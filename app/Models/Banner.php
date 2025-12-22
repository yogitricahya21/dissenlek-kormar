<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable =
    [
        'title',
        'subtitle',
        'eyebrow_text',
        'media_type',
        'media_file',
        'stroke_text',
        'btn_fill_text',
        'btn_fill_url',
        'btn_border_text',
        'btn_border_url',
        'order_index'
    ];
}
