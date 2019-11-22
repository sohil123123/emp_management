<?php

use Illuminate\Database\Seeder;

class LeaveTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('leave_types')->delete();
        
        \DB::table('leave_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'sil',
                'description' => 'this is testing',
                'status' => '1',
                'created_at' => '2019-11-18 00:00:00',
                'updated_at' => '2019-11-18 00:00:00',
            ),
        ));
        
        
    }
}