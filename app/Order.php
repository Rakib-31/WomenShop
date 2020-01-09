<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product','prod_id','prod_name','prod_quan','prod_color','prod_cost','name','email','country','state','postal','phone',
    ];
}
