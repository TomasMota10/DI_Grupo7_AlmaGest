<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transports extends Model
{
    protected $table = 'transports';

    protected $fillable = [
        'min','max','price','deleted'
    ];
}