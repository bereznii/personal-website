<?php

namespace App\Console\Commands;

use http\Exception\RuntimeException;
use Illuminate\Console\Command;

use App\Project;
use App\History;
use Illuminate\Support\Facades\Log;

class UpdateProjects extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:updateprojects';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update projects repositories info';

    /**
     * @var string used for github OAuth.
     */
    private string $clientId;
    private string $clientSecret;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->clientId = config('github.clientId');
        $this->clientSecret = config('github.clientSecret');
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $client = new \GuzzleHttp\Client();

        $res = $client->request('GET', 'https://api.github.com/users/bereznii/repos');

        $repositories = json_decode($res->getBody());

        foreach($repositories as $repo) {

            Project::updateOrCreate([
                'name' => $repo->name
            ],
            [
                'html_url' => $repo->html_url,
                'language' => $repo->language ?? '',
                'size' => $repo->size,
                'description' => '',
                'commits' => $this->countCommits($repo->name),
                'created' => date("Y-m-d", strtotime($repo->created_at)),
                'updated' => date("Y-m-d", strtotime($repo->updated_at)),
            ]);

        }

        //saving job
        $record = new History;
        $record->type = 'updating projects';
        $info = ['file' => __FILE__,'namespace' => __NAMESPACE__,'method' => __METHOD__,'line' => __LINE__];
        $record->payload = json_encode($info);
        $record->save();

        logger('project updated');

        return 0;
    }

    /**
     * @param string $repoName
     * @return int
     */
    private function countCommits(string $repoName): int
    {
        try {
            $client = new \GuzzleHttp\Client();

            $repoInTable = Project::where('name', $repoName)->first();

            $prevCommits = isset($repoInTable) ? $repoInTable->commits : 0;

            $commits = $client->request('GET', 'https://api.github.com/repos/bereznii/'.$repoName.'/stats/contributors', [
                'auth' => [
                    $this->clientId,
                    $this->clientSecret
                ]
            ]);

            $count = 0;
            foreach (json_decode($commits->getBody(), 1) as $contributor) {
                $count += (int) $contributor['total'];
            }

            return ($count !== 0)
                ? $count
                : $prevCommits;
        } catch (\Throwable $e) {
            Log::error('Message: ' . $e->getMessage() . '. Repo name: ' . $repoName);
        }

        throw new \RuntimeException('Error during project update: ' . $e->getMessage());
    }
}
