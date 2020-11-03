<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant_user extends Model
{
    use HasFactory;

    protected $table = 'tenants_user';

    protected $fillable = [
        'tenant_id',
        'user_id',
        'user_status_id',
    ];
}
