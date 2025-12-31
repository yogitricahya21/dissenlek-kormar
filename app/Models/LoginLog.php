<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LoginLog extends Model
{
    use HasFactory;

    // Tambahkan baris ini
    protected $fillable = [
        'email',
        'ip_address',
        'user_agent',
        'status',
    ];
}
