<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookingGuestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('booking_guests')->delete();
        
        \DB::table('booking_guests')->insert(array (
            0 => 
            array (
                'id' => 1,
                'booking_id' => 14,
                'guest_type' => NULL,
                'name' => 'Prashant Chauhan',
                'email' => 'webreca@gmail.com',
                'mobile' => '9999577620',
                'address' => 'C-6, Sector 7',
                'gender' => 'Male',
            ),
            1 => 
            array (
                'id' => 2,
                'booking_id' => 14,
                'guest_type' => NULL,
                'name' => 'Vijay Chauhan',
                'email' => 'vijay@gmail.com',
                'mobile' => '9555108968',
                'address' => 'New Police Line',
                'gender' => 'Female',
            ),
            2 => 
            array (
                'id' => 3,
                'booking_id' => 15,
                'guest_type' => NULL,
                'name' => 'Prashant Chauhan',
                'email' => 'webreca@gmail.com',
                'mobile' => '9999577620',
                'address' => 'C-6, Sector 7',
                'gender' => 'Male',
            ),
            3 => 
            array (
                'id' => 4,
                'booking_id' => 16,
                'guest_type' => NULL,
                'name' => 'Prashant Chauhan',
                'email' => 'webreca@gmail.com',
                'mobile' => '9999577620',
                'address' => 'C-6, Sector 7',
                'gender' => 'Male',
            ),
            4 => 
            array (
                'id' => 5,
                'booking_id' => 17,
                'guest_type' => NULL,
                'name' => 'Prashant Chauhan',
                'email' => 'webreca@gmail.com',
                'mobile' => '9999577620',
                'address' => 'C-6, Sector 7',
                'gender' => 'Male',
            ),
            5 => 
            array (
                'id' => 6,
                'booking_id' => 18,
                'guest_type' => NULL,
                'name' => 'Prashant Chauhan',
                'email' => 'webreca@gmail.com',
                'mobile' => '9999577620',
                'address' => 'C-6, Sector 7',
                'gender' => 'Male',
            ),
            6 => 
            array (
                'id' => 7,
                'booking_id' => 19,
                'guest_type' => NULL,
                'name' => 'Test Mohit',
                'email' => 'mohitparwal2103@gmail.com',
                'mobile' => '1456486',
                'address' => 'delhi',
                'gender' => 'Male',
            ),
            7 => 
            array (
                'id' => 8,
                'booking_id' => 19,
                'guest_type' => NULL,
                'name' => 'Naman',
                'email' => 'hfsuifhwui@gmail.com',
                'mobile' => 'hjbh',
                'address' => 'duif',
                'gender' => 'Male',
            ),
            8 => 
            array (
                'id' => 9,
                'booking_id' => 20,
                'guest_type' => NULL,
                'name' => 'Test Mohit',
                'email' => 'mohitparwal2103@gmail.com',
                'mobile' => '1551',
                'address' => 'delhi',
                'gender' => 'Male',
            ),
            9 => 
            array (
                'id' => 10,
                'booking_id' => 20,
                'guest_type' => NULL,
                'name' => 't',
                'email' => 't@gmail.com',
                'mobile' => '84948',
                'address' => 'ghuh',
                'gender' => 'Male',
            ),
            10 => 
            array (
                'id' => 11,
                'booking_id' => 20,
                'guest_type' => NULL,
                'name' => 'h',
                'email' => 'h@gmail.com',
                'mobile' => '59656',
                'address' => 'hgbh',
                'gender' => 'Male',
            ),
            11 => 
            array (
                'id' => 12,
                'booking_id' => 20,
                'guest_type' => NULL,
                'name' => 'f',
                'email' => 'f@gmail.com',
                'mobile' => '594',
                'address' => 'guu',
                'gender' => 'Male',
            ),
            12 => 
            array (
                'id' => 13,
                'booking_id' => 21,
                'guest_type' => NULL,
                'name' => 'Priya Jyoti',
                'email' => 'priyajyoti307@gmail.com',
                'mobile' => '919988776655',
                'address' => 'Delhi',
                'gender' => 'Female',
            ),
            13 => 
            array (
                'id' => 14,
                'booking_id' => 23,
                'guest_type' => NULL,
                'name' => 'Prashant Chauhan',
                'email' => 'webreca@gmail.com',
                'mobile' => '9999577620',
                'address' => 'C-6, Sector 7',
                'gender' => 'Male',
            ),
            14 => 
            array (
                'id' => 15,
                'booking_id' => 23,
                'guest_type' => NULL,
                'name' => 'Neha',
                'email' => 'neha009@gmail.com',
                'mobile' => '9698578965',
                'address' => 'Tis Hazari',
                'gender' => 'Male',
            ),
        ));
        
        
    }
}