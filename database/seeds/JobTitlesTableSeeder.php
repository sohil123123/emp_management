<?php

use Illuminate\Database\Seeder;

class JobTitlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('job_titles')->delete();
        
        \DB::table('job_titles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'department_id' => 1,
                'name' => 'admin manager',
                'status' => '1',
                'created_at' => '2019-11-18 00:00:00',
                'updated_at' => '2019-11-18 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'department_id' => 3,
                'name' => 'receptionist',
                'status' => '1',
                'created_at' => '2019-11-18 00:00:00',
                'updated_at' => '2019-11-18 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'department_id' => 6,
                'name' => 'maintenance',
                'status' => '1',
                'created_at' => '2019-11-18 00:00:00',
                'updated_at' => '2019-11-18 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'department_id' => 6,
                'name' => 'operation',
                'status' => '1',
                'created_at' => '2019-11-18 00:00:00',
                'updated_at' => '2019-11-18 00:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'department_id' => 7,
                'name' => 'chief cook',
                'status' => '1',
                'created_at' => '2019-11-18 00:00:00',
                'updated_at' => '2019-11-18 00:00:00',
            ),
        ));
        
        
    }
}