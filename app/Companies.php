<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table = 'companies';

    protected $fillable = [
        'id','name', 'address','city','cif','email','phone',
        'del_term_id','transport_id','payment_term_id',
        'bank_entity_id','discount_id','deleted',
    ];
}