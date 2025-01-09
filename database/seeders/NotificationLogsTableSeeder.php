<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NotificationLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notification_logs')->delete();
        
        \DB::table('notification_logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 8,
                'sender' => 'smtp',
                'sent_from' => 'stays@getstudios.in',
                'sent_to' => 'john@gmail.com',
                'subject' => 'Please verify your email address',
            'message' => '<p>Hi @johndoe (johndoe),&nbsp;</p><p><br><div><div style="font-family: Montserrat, sans-serif;">Thanks For joining us.<br></div><div style="font-family: Montserrat, sans-serif;">Please use the below code to verify your email address.<br></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Your email verification code is:<font size="6"><span style="font-weight: bolder;">&nbsp;560674</span></font></div></div></p>',
                'notification_type' => 'email',
                'created_at' => '2024-12-18 19:25:10',
                'updated_at' => '2024-12-18 19:25:10',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 9,
                'sender' => 'smtp',
                'sent_from' => 'stays@getstudios.in',
                'sent_to' => 'mohitparwal2127@gmail.com',
                'subject' => 'Please verify your email address',
            'message' => '<p>Hi @mohitparwal2127 (mohitparwal2127),&nbsp;</p><p><br><div><div style="font-family: Montserrat, sans-serif;">Thanks For joining us.<br></div><div style="font-family: Montserrat, sans-serif;">Please use the below code to verify your email address.<br></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Your email verification code is:<font size="6"><span style="font-weight: bolder;">&nbsp;956127</span></font></div></div></p>',
                'notification_type' => 'email',
                'created_at' => '2024-12-29 20:00:15',
                'updated_at' => '2024-12-29 20:00:15',
            ),
        ));
        
        
    }
}