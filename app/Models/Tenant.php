<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $table = 'tenant';

    protected $fillable = [
        'nombre',
        'codigo',
        'telefono',
        'email',
    ];
}
