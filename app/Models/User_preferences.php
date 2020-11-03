<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_preferences extends Model
{
    use HasFactory;
    protected $table = 'user_preferences';

    protected $fillable = [
        'user_id',
        'current_tenant',
    ];
}
