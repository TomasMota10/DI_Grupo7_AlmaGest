<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank_entity extends Model
{
    protected $table = 'bank_entity';

    protected $fillable = [
        'name','ccc','deleted',
    ];
}