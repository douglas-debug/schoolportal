<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'Employees';

    public $primarykey ='id';

    public $timestamps =true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
