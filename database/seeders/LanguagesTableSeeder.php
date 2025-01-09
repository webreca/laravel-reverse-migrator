<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('languages')->delete();
        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'English',
                'code' => 'en',
                'icon' => '5f15968db08911595250317.png',
                'text_align' => 0,
                'is_default' => 1,
                'created_at' => '2020-07-06 09:17:55',
                'updated_at' => '2022-09-29 16:06:14',
            ),
        ));
        
        
    }
}