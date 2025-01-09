<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExtensionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('extensions')->delete();
        
        \DB::table('extensions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'act' => 'tawk-chat',
            'name' => 'Live Chat(Tawk.to)',
                'description' => 'Key location is shown bellow',
                'image' => 'chat-png.png',
                'script' => '<script>
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src="https://embed.tawk.to/{{app_key}}";
s1.charset="UTF-8";
s1.setAttribute("crossorigin","*");
s0.parentNode.insertBefore(s1,s0);
})();
</script>',
                'shortcode' => '{"app_key":{"title":"App Key","value":"55"}}',
                'support' => 'twak.png',
                'status' => 0,
                'deleted_at' => NULL,
                'created_at' => '2019-10-19 04:46:05',
                'updated_at' => '2023-03-22 11:34:56',
            ),
            1 => 
            array (
                'id' => 2,
                'act' => 'google-recaptcha2',
                'name' => 'Google Recaptcha 2',
                'description' => 'Key location is shown bellow',
                'image' => 'recaptcha2.png',
                'script' => '
<script src="https://www.google.com/recaptcha/api.js"></script>
<div class="g-recaptcha" data-sitekey="{{site_key}}" data-callback="verifyCaptcha"></div>
<div id="g-recaptcha-error"></div>',
                'shortcode' => '{"site_key":{"title":"Site Key","value":"6LdPC88fAAAAADQlUf_DV6Hrvgm-pZuLJFSLDOWV"},"secret_key":{"title":"Secret Key","value":"6LdPC88fAAAAAG5SVaRYDnV2NpCrptLg2XLYKRKB"}}',
                'support' => 'recaptcha.png',
                'status' => 0,
                'deleted_at' => NULL,
                'created_at' => '2019-10-19 04:46:05',
                'updated_at' => '2022-05-08 09:31:36',
            ),
        ));
        
        
    }
}