<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery_terms extends Model
{
    protected $table = 'delivery_terms';

    protected $fillable = [
        'description','deleted'
    ];
}