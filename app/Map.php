<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Map extends Eloquent
{
    protected $collection = 'myData';

    public $primaryKey='id';
}
