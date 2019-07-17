<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['codigo','fullname','birthdate','is_active'];
}
