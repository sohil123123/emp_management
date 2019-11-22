<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departments')->delete();
        
        \DB::table('departments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin department',
                'status' => '1',
                'created_at' => '2019-11-18 00:00:00',
                'updated_at' => '2019-11-18 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ecommerce',
                'status' => '1',
                'created_at' => '2019-11-18 00:00:00',
                'updated_at' => '2019-11-18 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'front office',
                'status' => '1',
                'created_at' => '2019-11-18 00:00:00',
                'updated_at' => '2019-11-18 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'production',
                'status' => '1',
                'created_at' => '2019-11-18 00:00:00',
                'updated_at' => '2019-11-18 00:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'testing',
                'status' => '1',
                'created_at' => '2019-11-18 00:00:00',
                'updated_at' => '2019-11-18 00:00:00',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'engineering',
                'status' => '1',
                'created_at' => '2019-11-18 00:00:00',
                'updated_at' => '2019-11-18 00:00:00',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'kitchen department',
                'status' => '1',
                'created_at' => '2019-11-18 00:00:00',
                'updated_at' => '2019-11-18 00:00:00',
            ),
        ));
        
        
    }
}