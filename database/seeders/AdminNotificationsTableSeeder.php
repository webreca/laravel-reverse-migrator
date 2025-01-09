<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminNotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_notifications')->delete();
        
        \DB::table('admin_notifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 8,
                'title' => 'New member registered',
                'read_status' => 0,
                'click_url' => '/admin/manage/users/detail/8',
                'created_at' => '2024-12-18 19:25:07',
                'updated_at' => '2024-12-18 19:25:07',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 0,
            'title' => 'SQLSTATE[42S22]: Column not found: 1054 Unknown column \'customer_id\' in \'INSERT INTO\' (Connection: mysql, SQL: insert into `notification_logs` (`customer_id`, `notification_type`, `sender`, `sent_from`, `sent_to`, `subject`, `message`, `updated_at`, `created_at`) values (1, email, smtp, stays@getstudios.in, webreca@gmail.com, Password Reset, <p>Hi Prashant Chauhan (webreca),&nbsp;</p><p><div style="font-family: Montserrat, sans-serif;">We have received a request to reset the password for your account on&nbsp;<span style="font-weight: bolder;">2024-12-23 03:19:06 PM .<br></span></div><div style="font-family: Montserrat, sans-serif;">Requested From IP:&nbsp;<span style="font-weight: bolder;">2409:40d0:118a:51e4:550a:7a3e:4cef:a950</span>&nbsp;using&nbsp;<span style="font-weight: bolder;">Chrome</span>&nbsp;on&nbsp;<span style="font-weight: bolder;">Windows 10&nbsp;</span>.</div><div style="font-family: Montserrat, sans-serif;"><br></div><br style="font-family: Montserrat, sans-serif;"><div style="font-family: Montserrat, sans-serif;"><div>Your account recovery code is:&nbsp;&nbsp;&nbsp;<font size="6"><span style="font-weight: bolder;">409041</span></font></div><div><br></div></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;"><font size="4" color="#CC0000">If you do not wish to reset your password, please disregard this message.&nbsp;</font><br></div><div><font size="4" color="#CC0000"><br></font></div></p>, 2024-12-23 15:19:08, 2024-12-23 15:19:08))',
                'read_status' => 0,
                'click_url' => '#',
                'created_at' => '2024-12-23 20:49:08',
                'updated_at' => '2024-12-23 20:49:08',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 0,
            'title' => 'SQLSTATE[42S22]: Column not found: 1054 Unknown column \'customer_id\' in \'INSERT INTO\' (Connection: mysql, SQL: insert into `notification_logs` (`customer_id`, `notification_type`, `sender`, `sent_from`, `sent_to`, `subject`, `message`, `updated_at`, `created_at`) values (1, email, smtp, stays@getstudios.in, webreca@gmail.com, You have reset your password, <p>Hi Prashant Chauhan (webreca),&nbsp;</p><p><p style="font-family: Montserrat, sans-serif;">You have successfully reset your password.</p><p style="font-family: Montserrat, sans-serif;">You changed from&nbsp; IP:&nbsp;<span style="font-weight: bolder;">2409:40d0:118a:51e4:550a:7a3e:4cef:a950</span>&nbsp;using&nbsp;<span style="font-weight: bolder;">Chrome</span>&nbsp;on&nbsp;<span style="font-weight: bolder;">Windows 10&nbsp;</span>&nbsp;on&nbsp;<span style="font-weight: bolder;">2024-12-23 03:19:44 PM</span></p><p style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;"><br></span></p><p style="font-family: Montserrat, sans-serif;"><span style="font-weight: bolder;"><font color="#ff0000">If you did not change that, please contact us as soon as possible.</font></span></p></p>, 2024-12-23 15:19:46, 2024-12-23 15:19:46))',
                'read_status' => 0,
                'click_url' => '#',
                'created_at' => '2024-12-23 20:49:46',
                'updated_at' => '2024-12-23 20:49:46',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 9,
                'title' => 'New member registered',
                'read_status' => 0,
                'click_url' => '/admin/manage/users/detail/9',
                'created_at' => '2024-12-29 20:00:12',
                'updated_at' => '2024-12-29 20:00:12',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 8,
                'title' => 'New Customer registered',
                'read_status' => 0,
                'click_url' => '/admin/manage/users/detail/8',
                'created_at' => '2024-12-31 21:45:01',
                'updated_at' => '2024-12-31 21:45:01',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 0,
            'title' => 'SQLSTATE[42S22]: Column not found: 1054 Unknown column \'customer_id\' in \'INSERT INTO\' (Connection: mysql, SQL: insert into `notification_logs` (`customer_id`, `notification_type`, `sender`, `sent_from`, `sent_to`, `subject`, `message`, `updated_at`, `created_at`) values (8, email, smtp, stays@getstudios.in, priyajyoti307@gmail.com, Please verify your email address, <p>Hi @priyajyoti (priyajyoti),&nbsp;</p><p><br><div><div style="font-family: Montserrat, sans-serif;">Thanks For joining us.<br></div><div style="font-family: Montserrat, sans-serif;">Please use the below code to verify your email address.<br></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Your email verification code is:<font size="6"><span style="font-weight: bolder;">&nbsp;329800</span></font></div></div></p>, 2024-12-31 16:15:04, 2024-12-31 16:15:04))',
                'read_status' => 0,
                'click_url' => '#',
                'created_at' => '2024-12-31 21:45:04',
                'updated_at' => '2024-12-31 21:45:04',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 0,
            'title' => 'SQLSTATE[42S22]: Column not found: 1054 Unknown column \'customer_id\' in \'INSERT INTO\' (Connection: mysql, SQL: insert into `notification_logs` (`customer_id`, `notification_type`, `sender`, `sent_from`, `sent_to`, `subject`, `message`, `updated_at`, `created_at`) values (8, email, smtp, stays@getstudios.in, priyajyoti307@gmail.com, Please verify your email address, <p>Hi @priyajyoti (priyajyoti),&nbsp;</p><p><br><div><div style="font-family: Montserrat, sans-serif;">Thanks For joining us.<br></div><div style="font-family: Montserrat, sans-serif;">Please use the below code to verify your email address.<br></div><div style="font-family: Montserrat, sans-serif;"><br></div><div style="font-family: Montserrat, sans-serif;">Your email verification code is:<font size="6"><span style="font-weight: bolder;">&nbsp;963780</span></font></div></div></p>, 2024-12-31 16:18:39, 2024-12-31 16:18:39))',
                'read_status' => 0,
                'click_url' => '#',
                'created_at' => '2024-12-31 21:48:39',
                'updated_at' => '2024-12-31 21:48:39',
            ),
        ));
        
        
    }
}