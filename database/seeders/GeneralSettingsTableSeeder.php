<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GeneralSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('general_settings')->delete();
        
        \DB::table('general_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'site_name' => 'GetStudios Stays',
                'cur_text' => 'INR',
                'cur_sym' => '₹',
                'fixed_commission' => '1.00000000',
                'parcent_commission' => '1.00000000',
                'access_token' => 'pk.eyJ1Ijoicmlhc2FkcmlvbiIsImEiOiJjbGVmZmFrMG0wcWhlM3ZtamVpZzZvbnRiIn0.vyldCHXkEAoFjvchIgO_wg',
                'upload_approval' => 1,
                'email_from' => 'stays@getstudios.in',
            'email_template' => '<p>Hi {{fullname}} ({{username}}),&nbsp;</p><p>{{message}}</p>',
            'sms_body' => 'Hi {{fullname}} ({{username}}), 
{{message}}',
                'sms_from' => 'Minstack',
                'base_color' => '3b6ac4',
                'secondary_color' => '060662',
                'mail_config' => '{"name":"smtp","host":"smtp.hostinger.com","port":"465","enc":"ssl","username":"Stays@getstudios.in","password":"Stays@11223344"}',
                'sms_config' => '{"name":"messageBird","clickatell":{"api_key":"----------------"},"infobip":{"username":"------------8888888","password":"-----------------"},"message_bird":{"api_key":"-------------------"},"nexmo":{"api_key":"----------------------","api_secret":"----------------------"},"sms_broadcast":{"username":"----------------------","password":"-----------------------------"},"twilio":{"account_sid":"-----------------------","auth_token":"---------------------------","from":"----------------------"},"text_magic":{"username":"-----------------------","apiv2_key":"-------------------------------"},"custom":{"method":"get","url":"https:\\/\\/hostname\\/demo-api-v1","headers":{"name":["api_key"],"value":["test_api 555"]},"body":{"name":["from_number"],"value":["5657545757"]}}}',
                'global_shortcodes' => '{
"site_name":"Name of your site",
"site_currency":"Currency of your site",
"currency_symbol":"Symbol of currency"
}',
                'kv' => 0,
                'ev' => 1,
                'en' => 1,
                'sv' => 0,
                'sn' => 0,
                'force_ssl' => 0,
                'maintenance_mode' => 0,
                'secure_password' => 0,
                'agree' => 1,
                'registration' => 1,
                'active_template' => 'default',
                'system_info' => '[]',
                'created_at' => NULL,
                'updated_at' => '2024-12-07 20:47:19',
            ),
        ));
        
        
    }
}