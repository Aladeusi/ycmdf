<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hire extends Model
{
    //

    public $table="hires";


    public function service()
    {
        return $this->belongsTo('App\Service','service_id');
    }
}
