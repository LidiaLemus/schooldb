<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectYear extends Model
{
	protected $table = 'subject_years';
    protected $fillable = ['subject_id','teacher_id','year_id'];

    public function year(){
    	return $this->belongsTo('App\Year');
    }

    public function teacher(){
    	return $this->belongsTo('App\Teacher');
    }
     public function subject(){
    	return $this->belongsTo('App\Subject');
    }
    public function enrollments(){
        return $this->hasMany('App\Enrollment');
    }
}
