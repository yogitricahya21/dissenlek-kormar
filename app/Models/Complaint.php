<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable =
    [
        'reporter_name',
        'email_or_phone',
        'message',
        'attachment',
        'status'
    ];
}
