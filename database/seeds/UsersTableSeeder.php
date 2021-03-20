<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\App\User::create([
    		'name' => 'Wahyu Nugroho Indrawinata',
    		'email' => 'korodarmo@gmail.com',
    		'password' => Hash::make('123456'),
    	]);
    }
}
