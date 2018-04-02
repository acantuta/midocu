<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    		'nombres' => 'Administrador',
    		'email' => 'admin@localhost',
    		'password' => bcrypt('password'),
    		'tipo' => 'admin',
    		'created_at' => \Carbon\Carbon::now(),
    		'updated_at' => \Carbon\Carbon::now(),
    	]);
    }
}
