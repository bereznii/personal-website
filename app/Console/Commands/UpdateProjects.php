<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Project;
use App\History;

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
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
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
    }

    /**
     * @param string $repoName
     * @return int
     */
    private function countCommits(string $repoName): int
    {
        $client = new \GuzzleHttp\Client();
        $commits = $client->request('GET', 'https://api.github.com/repos/bereznii/'.$repoName.'/stats/contributors');

        $count = 0;
        foreach (json_decode($commits->getBody(), 1) as $contributor) {
            $count += $contributor['total'];
        }

        return $count;
    }
}
