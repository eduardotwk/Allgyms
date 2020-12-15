<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    use HasFactory;

    protected $table = 'gyms';

    protected $fillable = [
        'nombre',
        'ubicacion',
        'comuna_id',
        'telefono',
        'detalles',
        'tenant_id'];

    public function comuna(){
        return $this->belongsTo(Comuna::class, 'comuna_id');
    }



}
