<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waundarouten extends Model
{
    protected $fillable = ['title','length','distance','claim','content','preview','img','maps'];
}
