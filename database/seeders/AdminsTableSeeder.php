<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'email' => 'admin@example.com',
                'username' => 'admin',
                'email_verified_at' => NULL,
                'image' => '656327ffc36881700997119.jpg',
                'password' => '$2y$10$ZOWPSwbB7098UQHq/GZX5uGq43wfuDDjMBNASktSNK55T/4jC/xvy',
                'remember_token' => 'JVtkXwTjlnnCTinlkN9Ym8YMm5NzBFtZDRzBePXEgjrCoQ70X0VRnQ1cKF7N',
                'created_at' => NULL,
                'updated_at' => '2023-11-26 16:42:00',
            ),
        ));
        
        
    }
}