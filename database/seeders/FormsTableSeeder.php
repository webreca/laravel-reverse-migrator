<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FormsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('forms')->delete();
        
        \DB::table('forms')->insert(array (
            0 => 
            array (
                'id' => 2,
                'act' => 'manual_deposit',
                'form_data' => '{"nid_number":{"name":"NID Number","label":"nid_number","is_required":"required","extensions":null,"options":[],"type":"text"},"nid_number_22":{"name":"NID Number 22","label":"nid_number_22","is_required":"required","extensions":null,"options":[],"type":"textarea"},"sadfg":{"name":"sadfg","label":"sadfg","is_required":"optional","extensions":null,"options":[],"type":"text"},"asdf":{"name":"asdf","label":"asdf","is_required":"required","extensions":null,"options":["Test","Test2","Test3"],"type":"select"},"nid_number_226985":{"name":"NID Number 226985","label":"nid_number_226985","is_required":"required","extensions":null,"options":["Test","Test 2","Test 3"],"type":"checkbox"},"nid_number_3333":{"name":"NID Number 3333","label":"nid_number_3333","is_required":"required","extensions":null,"options":["Test","asdf"],"type":"radio"},"nid_number_3333587":{"name":"NID Number 3333587","label":"nid_number_3333587","is_required":"optional","extensions":"jpg,bmp,png,pdf","options":[],"type":"file"}}',
                'created_at' => '2022-03-16 06:39:49',
                'updated_at' => '2022-03-17 05:32:54',
            ),
            1 => 
            array (
                'id' => 3,
                'act' => 'manual_deposit',
                'form_data' => '{"nid_number":{"name":"NID Number","label":"nid_number","is_required":"required","extensions":null,"options":[],"type":"text"},"nid_number_226985":{"name":"NID Number 226985","label":"nid_number_226985","is_required":"required","extensions":"","options":[],"type":"textarea"}}',
                'created_at' => '2022-03-16 10:02:29',
                'updated_at' => '2022-03-16 10:05:32',
            ),
            2 => 
            array (
                'id' => 5,
                'act' => 'withdraw_method',
                'form_data' => '{"nid_number_33":{"name":"NID Number 33","label":"nid_number_33","is_required":"required","extensions":"","options":[],"type":"textarea"}}',
                'created_at' => '2022-03-17 06:15:35',
                'updated_at' => '2022-03-17 06:23:17',
            ),
            3 => 
            array (
                'id' => 6,
                'act' => 'withdraw_method',
                'form_data' => '{"nid_number":{"name":"NID Number","label":"nid_number","is_required":"required","extensions":"","options":[],"type":"textarea"}}',
                'created_at' => '2022-03-17 06:17:04',
                'updated_at' => '2022-03-17 06:17:04',
            ),
            4 => 
            array (
                'id' => 7,
                'act' => 'kyc',
                'form_data' => '{"full_name":{"name":"Full Name","label":"full_name","is_required":"required","extensions":null,"options":[],"type":"text"},"nid_number":{"name":"NID Number","label":"nid_number","is_required":"required","extensions":null,"options":[],"type":"text"},"gender":{"name":"Gender","label":"gender","is_required":"required","extensions":null,"options":["Male","Female","Others"],"type":"select"},"you_hobby":{"name":"You Hobby","label":"you_hobby","is_required":"required","extensions":null,"options":["Programming","Gardening","Traveling","Others"],"type":"checkbox"},"nid_photo":{"name":"NID Photo","label":"nid_photo","is_required":"required","extensions":"jpg,png","options":[],"type":"file"},"mobile":{"name":"Mobile","label":"mobile","is_required":"required","extensions":"","options":[],"type":"text"}}',
                'created_at' => '2022-03-17 08:26:14',
                'updated_at' => '2023-11-20 16:26:53',
            ),
            5 => 
            array (
                'id' => 8,
                'act' => 'manual_deposit',
                'form_data' => '{"nid_number":{"name":"NID Number","label":"nid_number","is_required":"required","extensions":"","options":[],"type":"text"}}',
                'created_at' => '2022-03-21 13:23:25',
                'updated_at' => '2022-03-21 13:23:25',
            ),
            6 => 
            array (
                'id' => 9,
                'act' => 'manual_deposit',
                'form_data' => '{"nid_number":{"name":"NID Number","label":"nid_number","is_required":"required","extensions":"","options":[],"type":"text"}}',
                'created_at' => '2022-03-21 13:24:15',
                'updated_at' => '2022-03-21 13:24:15',
            ),
            7 => 
            array (
                'id' => 10,
                'act' => 'manual_deposit',
                'form_data' => '{"nid_number":{"name":"NID Number","label":"nid_number","is_required":"required","extensions":"","options":[],"type":"textarea"}}',
                'created_at' => '2022-03-21 13:25:15',
                'updated_at' => '2022-03-21 13:25:22',
            ),
            8 => 
            array (
                'id' => 11,
                'act' => 'withdraw_method',
                'form_data' => '{"nid_number_2658":{"name":"NID Number 2658","label":"nid_number_2658","is_required":"required","extensions":"","options":["asdf"],"type":"checkbox"}}',
                'created_at' => '2022-03-22 05:44:09',
                'updated_at' => '2022-03-22 05:44:18',
            ),
            9 => 
            array (
                'id' => 12,
                'act' => 'withdraw_method',
                'form_data' => '[]',
                'created_at' => '2022-03-30 14:33:12',
                'updated_at' => '2022-03-30 14:33:12',
            ),
            10 => 
            array (
                'id' => 13,
                'act' => 'withdraw_method',
                'form_data' => '{"bank_name":{"name":"Bank Name","label":"bank_name","is_required":"required","extensions":null,"options":[],"type":"text"},"account_name":{"name":"Account Name","label":"account_name","is_required":"required","extensions":null,"options":[],"type":"text"},"account_number":{"name":"Account Number","label":"account_number","is_required":"required","extensions":null,"options":[],"type":"text"}}',
                'created_at' => '2022-03-30 14:39:11',
                'updated_at' => '2022-09-28 09:35:20',
            ),
            11 => 
            array (
                'id' => 14,
                'act' => 'withdraw_method',
                'form_data' => '{"mobile_number":{"name":"Mobile Number","label":"mobile_number","is_required":"required","extensions":null,"options":[],"type":"text"}}',
                'created_at' => '2022-03-30 14:40:12',
                'updated_at' => '2022-09-29 15:25:20',
            ),
            12 => 
            array (
                'id' => 15,
                'act' => 'manual_deposit',
                'form_data' => '{"send_from_number":{"name":"Send From Number","label":"send_from_number","is_required":"required","extensions":"","options":[],"type":"text"},"transaction_number":{"name":"Transaction Number","label":"transaction_number","is_required":"required","extensions":"","options":[],"type":"text"},"screenshot":{"name":"Screenshot","label":"screenshot","is_required":"required","extensions":"jpg,jpeg,png","options":[],"type":"file"}}',
                'created_at' => '2022-03-30 14:45:27',
                'updated_at' => '2022-03-30 14:45:27',
            ),
            13 => 
            array (
                'id' => 16,
                'act' => 'manual_deposit',
                'form_data' => '{"transaction_number":{"name":"Transaction Number","label":"transaction_number","is_required":"required","extensions":null,"options":[],"type":"text"},"screenshot":{"name":"Screenshot","label":"screenshot","is_required":"required","extensions":"jpg,pdf,docx","options":[],"type":"file"}}',
                'created_at' => '2022-03-30 14:46:43',
                'updated_at' => '2022-04-11 08:49:54',
            ),
            14 => 
            array (
                'id' => 17,
                'act' => 'manual_deposit',
                'form_data' => '[]',
                'created_at' => '2022-03-30 14:51:19',
                'updated_at' => '2022-03-30 14:51:19',
            ),
            15 => 
            array (
                'id' => 18,
                'act' => 'manual_deposit',
                'form_data' => '{"asdfasddf":{"name":"asdfasddf","label":"asdfasddf","is_required":"required","extensions":"","options":[],"type":"text"}}',
                'created_at' => '2022-09-28 10:20:55',
                'updated_at' => '2022-09-28 10:20:55',
            ),
            16 => 
            array (
                'id' => 19,
                'act' => 'manual_deposit',
                'form_data' => '{"sadf":{"name":"sadf","label":"sadf","is_required":"required","extensions":null,"options":[],"type":"textarea"}}',
                'created_at' => '2022-09-28 10:43:04',
                'updated_at' => '2022-09-28 10:43:59',
            ),
            17 => 
            array (
                'id' => 20,
                'act' => 'manual_deposit',
                'form_data' => '{"transaction_id":{"name":"Transaction ID","label":"transaction_id","is_required":"required","extensions":"","options":[],"type":"text"}}',
                'created_at' => '2023-05-27 08:20:43',
                'updated_at' => '2023-05-27 08:20:43',
            ),
            18 => 
            array (
                'id' => 21,
                'act' => 'manual_deposit',
                'form_data' => '{"name":{"name":"Name","label":"name","is_required":"required","extensions":null,"options":[],"type":"text"},"account":{"name":"Account","label":"account","is_required":"required","extensions":null,"options":[],"type":"text"},"mobile":{"name":"Mobile","label":"mobile","is_required":"required","extensions":null,"options":[],"type":"text"}}',
                'created_at' => '2023-11-24 22:50:06',
                'updated_at' => '2023-11-25 10:14:51',
            ),
        ));
        
        
    }
}