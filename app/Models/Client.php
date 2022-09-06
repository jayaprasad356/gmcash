<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $casts = [
        'name' => 'string',
        'mobile' => 'string',
        'email' => 'string',
        'platform' => 'string',
        'address' => 'string',
        'city' => 'string',
        'state' => 'string',
        'country' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
