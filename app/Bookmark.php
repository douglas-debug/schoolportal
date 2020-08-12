<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    //
    protected $table = 'Bookmarks';

    public $primarykey ='id';

    public $timestamps =true;
}
