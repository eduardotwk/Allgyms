<?php


namespace App\Helpers;


use App\Models\Gym;

class GymHelper
{
    public function queryBuscarUsuario($valor)
    {
         return Gym::query()->with('comuna')
            ->where('nombre','LIKE','%'.$valor.'%')
            ->orWhereHas('comuna', function ($query) use ($valor) {
                $query->where('nombre','LIKE','%'.$valor.'%');
            })
            ->orderBy('nombre','asc');
    }
}