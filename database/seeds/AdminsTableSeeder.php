<?php

use Illuminate\Database\Seeder;

use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'admin',
	        'email' => 'admin@gmail.com',
	        'password' => bcrypt('123456'),
	        'remember_token' => str_random(10),
        ]);

        Admin::create([
            'name' => 'sub admin',
	        'email' => 'sub_admin@gmail.com',
	        'password' => bcrypt('123456'),
	        'remember_token' => str_random(10),
        ]);

        Admin::create([
            'name' => 'seo',
	        'email' => 'seo@gmail.com',
	        'password' => bcrypt('123456'),
	        'remember_token' => str_random(10),
        ]);
    }
}
