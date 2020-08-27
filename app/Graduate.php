<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graduate extends Model
{
    protected $fillable = [
        'Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6', 'Q7'
    ];
}
