<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('companies')->delete();
        
        \DB::table('companies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'apollo',
                'status' => '1',
                'created_at' => '2019-11-18 00:00:00',
                'updated_at' => '2019-11-18 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'HG',
                'status' => '1',
                'created_at' => '2019-11-18 00:00:00',
                'updated_at' => '2019-11-18 00:00:00',
            ),
        ));
        
        
    }
}