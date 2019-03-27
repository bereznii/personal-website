<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Project;

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
        //clear table
        Project::truncate();

        $client = new \GuzzleHttp\Client();

        //repos info
        $res = $client->request('GET', 'https://api.github.com/users/bereznii/repos');
        
        $gitobjs = json_decode($res->getBody());
        
        foreach($gitobjs as $obj) {
            //repos commits
            $commits = $client->request('GET', 'https://api.github.com/repos/bereznii/'.$obj->name.'/commits');

            $project = new Project;

            $project->name = $obj->name;
            $project->html_url = $obj->html_url;
            $project->language = $obj->language;
            $project->size = $obj->size;
            $project->description = $obj->description;
            $project->commits = count(json_decode($commits->getBody()));//decode json and count number of array members
            $project->created = date("Y-m-d", strtotime($obj->created_at));
            $project->updated = date("Y-m-d", strtotime($obj->updated_at));

            $project->save();
        }

        echo "Projects updated \n";
    }
}
