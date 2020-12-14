<?php

namespace Database\Seeders;

use App\Models\Comuna;
use Illuminate\Database\Seeder;

class ComunasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();
        $comunas = [
            [1, '479000', 'Temuco'],
            [2, '6127381', 'Lautaro'],
            [3, '5493430', 'Padre las Casas'],
            [4, '58485', 'Galvarino'],
            [5, '454535', 'Freire'],
            [6, '17328418', 'Pitrufquen'],

        ];
        $comunas = array_map(function ($comuna) use ($now) {
            return [
                'id' => $comuna[0],
                'codigo' => $comuna[1],
                'nombre' => $comuna[2],
                'updated_at' => $now,
                'created_at' => $now,
            ];
        }, $comunas);
        Comuna::insert($comunas);
    }

}
