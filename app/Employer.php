<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    //
    protected $table = 'Employers';

    public $primarykey ='id';

    public $timestamps =true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
