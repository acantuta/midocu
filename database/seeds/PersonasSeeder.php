<?php

use Illuminate\Database\Seeder;

class PersonasSeeder extends Seeder
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

    	foreach (range(0, 50) as $i) {
    		$nombres = $faker->firstName;
    		$apellidos = $faker->lastName;
    		$nombreCompleto = $nombres . ' ' . $apellidos;

    		$rows[] = [
    			'tipo' => 'natural',
    			'nombre_completo' => $nombreCompleto,
    			'nombres' => $nombres,
    			'apellidos' => $apellidos,
    			'correo' => $faker->email,
    			'telefono' => $faker->phoneNumber,
    			'direccion' => $faker->address,
    		];
    	}

    	DB::table('personas')->insert($rows);
    }
}
