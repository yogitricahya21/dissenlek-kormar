<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $fillable =
    [
        'name',
        'nrp',
        'rank',
        'position',
        'subdis',
        'image'
    ];
}
