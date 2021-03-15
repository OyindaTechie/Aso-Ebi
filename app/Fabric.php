<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabric extends Model
{
    //
    protected $fillable = [
        'NoofFabrics', 'FabricType', 'Location', 'UserPhoneno'
    ];
}
