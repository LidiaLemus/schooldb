<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $fillable = ['codigo','name','is_active'];
}
