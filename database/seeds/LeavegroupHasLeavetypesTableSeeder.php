<?php

use Illuminate\Database\Seeder;

class LeavegroupHasLeavetypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('leavegroup_has_leavetypes')->delete();
        
        \DB::table('leavegroup_has_leavetypes')->insert(array (
            0 => 
            array (
                'leave_type_id' => 1,
                'leave_group_id' => 1,
            ),
        ));
        
        
    }
}