<?php

namespace App;
use App\User;
use App\JobUsers;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $table = "jobs";
    //Primary Key/ID
    public $primaryKey = "id";
    //Timestamps
    public $timestamps = true;


     public function employer(){
        return $this->belongsTo('App\Employer');
    }
/*
    public function getDueDateAttribute($value){
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function getCreatedAtAttribute($value){
        return Carbon::parse($value)->format('d-m-Y');
    }
*/
    protected $dates =[
         'due_date',
    ];
}
