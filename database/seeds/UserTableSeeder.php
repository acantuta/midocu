<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $rows = [];
        
        $rows[] = [
            'nombres' => 'Juan',
            'apellidos' => 'Pérez',
            'email' => 'juan.perez@localhost',
            'direccion' => 'Calle Las Flores 452',
            'telefono' => '9999999',
            'password' => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ];

        foreach (range(0, 50) as $i) {
            $rows[] = [
                'nombres' => $faker->name,
                'apellidos' => "Apellidos{$i}",
                'email' => $faker->freeEmail,
                'direccion' => "Dirección{$i}",
                'telefono' => '99999999',
                'password' => bcrypt('password'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ];
        }

        DB::table("users")->insert($rows);
    }
}
