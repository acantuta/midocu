<?php

use Illuminate\Database\Seeder;

class ExpedienteTiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = [
            [
                'nombre' => 'oficio'
            ],
            [
                'nombre' => 'carta'
            ],
            [
                'nombre' => 'informe'
            ],
            [
                'nombre' => 'memorando'
            ],
            [
                'nombre' => 'otro'
            ],
        ];

        DB::table('expediente_tipos')->insert($rows);
    }
}
