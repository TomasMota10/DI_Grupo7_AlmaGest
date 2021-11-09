<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_terms extends Model
{
    protected $table = 'payment_terms';

    protected $fillable = [
        'description', 'deleted',
    ];
}