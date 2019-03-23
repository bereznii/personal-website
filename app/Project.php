<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public static function getProjects() {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://api.github.com/users/bereznii/repos');
        
        $gitobjs = json_decode($res->getBody());
        
        foreach($gitobjs as $obj) {
            $project = new Project;

            $project->name = $obj->name;
            $project->html_url = $obj->html_url;
            $project->language = $obj->language;
            $project->size = $obj->size;
            $project->description = $obj->description;
            $project->created = date("Y-m-d", strtotime($obj->created_at));
            $project->updated = date("Y-m-d", strtotime($obj->updated_at));

            $project->save();
        }
    }
}
