<?php

use Illuminate\Database\Seeder;

class LeaveGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('leave_groups')->delete();
        
        \DB::table('leave_groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'vacation',
                'description' => 'vacation days',
                'status' => '1',
                'created_at' => '2019-11-18 00:00:00',
                'updated_at' => '2019-11-18 00:00:00',
            ),
        ));
        
        
    }
}