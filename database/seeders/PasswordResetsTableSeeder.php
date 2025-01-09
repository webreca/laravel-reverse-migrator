<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_resets')->delete();
        
        \DB::table('password_resets')->insert(array (
            0 => 
            array (
                'email' => 'kailashsingh3312@gmail.com',
                'token' => '860459',
                'created_at' => '2024-11-18 17:20:48',
            ),
            1 => 
            array (
                'email' => 'sandipva55@gmail.com',
                'token' => '458387',
                'created_at' => '2024-11-18 17:32:19',
            ),
            2 => 
            array (
                'email' => 'webreca@gmail.com',
                'token' => '409041',
                'created_at' => '2024-12-23 20:49:06',
            ),
        ));
        
        
    }
}