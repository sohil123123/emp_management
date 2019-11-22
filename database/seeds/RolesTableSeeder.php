<?php

use Illuminate\Database\Seeder;

use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
	        'guard_name' => 'admin',
        ]);

        Role::create([
            'name' => 'sub_admin',
	        'guard_name' => 'admin',
        ]);

        Role::create([
            'name' => 'seo',
	        'guard_name' => 'admin',
        ]);

        Role::create([
            'name' => 'manager',
	        'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'employee',
	        'guard_name' => 'web',
        ]);
        
    }
}
