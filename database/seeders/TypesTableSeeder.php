<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('types')->delete();
        
        \DB::table('types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Studio',
                'status' => 1,
                'created_at' => '2024-11-02 16:11:02',
                'updated_at' => '2024-11-02 16:11:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Pent Studio',
                'status' => 1,
                'created_at' => '2024-11-02 16:11:11',
                'updated_at' => '2024-11-02 16:11:11',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Residential',
                'status' => 1,
                'created_at' => '2024-11-02 16:11:28',
                'updated_at' => '2024-11-25 00:18:55',
            ),
        ));
        
        
    }
}