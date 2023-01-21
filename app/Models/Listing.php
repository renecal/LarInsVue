<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'beds',
        'baths',
        'city',
        'code',
        'area',
        'street',
        'street_nr',
        'price',

    ];
}
