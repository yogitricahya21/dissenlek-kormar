<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable =
    [
        'visi',
        'misi',
        'tugas_pokok',
        'logo',
        'sejarah'
    ];
}
