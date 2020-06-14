<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Freelance extends Model
{
    use SoftDeletes;
    protected $fillable = ['id',
     'username', 
     'email', 
     'phone', 
     'files', 
     'major', 
    'technologies',
    'about',
    'demo',
    'project_name'
 ];
    protected $data = ['delete_at'];
}
