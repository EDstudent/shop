<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
			'name' => 'Admin',
			'email' => 'admin@p.p',
			'password' => bcrypt('qweasd'),
			'role' => 2,
		]);	
    	DB::table('users')->insert([
			'name' => 'John',
			'email' => 'c@p.p',
			'password' => bcrypt('qweasd'),
			'role' => 3,
		]);	
    }
}
