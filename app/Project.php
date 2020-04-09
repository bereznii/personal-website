<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $fillable = [
        'name',
        'html_url',
        'language',
        'size',
        'description',
        'commits',
        'created',
        'updated'
    ];
}
