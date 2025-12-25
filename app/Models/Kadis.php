<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kadis extends Model
{
    protected $fillable =
    [
        'name',
        'rank',
        'nrp',
        'image',
        'quote',
        'description',
        'is_active'
];
}
