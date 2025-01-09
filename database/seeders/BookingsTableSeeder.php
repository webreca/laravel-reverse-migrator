<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bookings')->delete();
        
        \DB::table('bookings')->insert(array (
            0 => 
            array (
                'id' => 14,
                'type' => 'Pay Now',
                'owner_id' => 3,
                'renter_id' => 1,
                'property_id' => 7,
                'amount' => '680.00000000',
                'from_date' => '2024-12-18 05:30:00',
                'to_date' => '2024-12-19 05:30:00',
                'guest' => 2,
                'room_no' => NULL,
                'floor_no' => NULL,
                'address' => NULL,
                'lat' => NULL,
                'lng' => NULL,
                'remarks' => NULL,
                'status' => 0,
                'checkin' => 0,
                'checkin_time' => NULL,
                'checkout' => 0,
                'checkout_time' => NULL,
                'digital_key' => NULL,
                'reason' => NULL,
                'payment_status' => 'Paid',
                'created_at' => '2024-12-18 03:37:34',
                'updated_at' => '2024-12-18 03:37:34',
            ),
            1 => 
            array (
                'id' => 15,
                'type' => 'Pay At Hotel',
                'owner_id' => 6,
                'renter_id' => 1,
                'property_id' => 3,
                'amount' => '1100.00000000',
                'from_date' => '2024-12-25 05:30:00',
                'to_date' => '2024-12-27 05:30:00',
                'guest' => 1,
                'room_no' => '2',
                'floor_no' => '1',
                'address' => 'noida',
                'lat' => '123',
                'lng' => '456',
                'remarks' => '1234565',
                'status' => 1,
                'checkin' => 1,
                'checkin_time' => '2024-12-24 17:16:46',
                'checkout' => 0,
                'checkout_time' => NULL,
                'digital_key' => '1234',
                'reason' => NULL,
                'payment_status' => 'Paid',
                'created_at' => '2024-12-24 14:14:15',
                'updated_at' => '2024-12-24 17:16:46',
            ),
            2 => 
            array (
                'id' => 16,
                'type' => 'Pay At Hotel',
                'owner_id' => 6,
                'renter_id' => 1,
                'property_id' => 9,
                'amount' => '900.00000000',
                'from_date' => '2025-01-08 05:30:00',
                'to_date' => '2025-01-10 05:30:00',
                'guest' => 1,
                'room_no' => '3',
                'floor_no' => '2',
                'address' => 'Shiv Vihar Karawal Nagar',
                'lat' => '123',
                'lng' => '345',
                'remarks' => '12',
                'status' => 1,
                'checkin' => 0,
                'checkin_time' => NULL,
                'checkout' => 0,
                'checkout_time' => NULL,
                'digital_key' => '1234',
                'reason' => NULL,
                'payment_status' => 'Paid',
                'created_at' => '2024-12-24 17:14:15',
                'updated_at' => '2024-12-24 17:15:38',
            ),
            3 => 
            array (
                'id' => 17,
                'type' => 'Pay Now',
                'owner_id' => 6,
                'renter_id' => 1,
                'property_id' => 9,
                'amount' => '450.00000000',
                'from_date' => '2024-12-26 05:30:00',
                'to_date' => '2024-12-28 05:30:00',
                'guest' => 1,
                'room_no' => NULL,
                'floor_no' => NULL,
                'address' => NULL,
                'lat' => NULL,
                'lng' => NULL,
                'remarks' => NULL,
                'status' => 0,
                'checkin' => 0,
                'checkin_time' => NULL,
                'checkout' => 0,
                'checkout_time' => NULL,
                'digital_key' => NULL,
                'reason' => NULL,
                'payment_status' => 'Paid',
                'created_at' => '2024-12-24 17:44:04',
                'updated_at' => '2024-12-24 17:44:04',
            ),
            4 => 
            array (
                'id' => 18,
                'type' => 'Pay Now',
                'owner_id' => 6,
                'renter_id' => 1,
                'property_id' => 9,
                'amount' => '10.00000000',
                'from_date' => '2025-03-29 05:30:00',
                'to_date' => '2025-03-30 05:30:00',
                'guest' => 1,
                'room_no' => NULL,
                'floor_no' => NULL,
                'address' => NULL,
                'lat' => NULL,
                'lng' => NULL,
                'remarks' => NULL,
                'status' => 1,
                'checkin' => 0,
                'checkin_time' => NULL,
                'checkout' => 0,
                'checkout_time' => NULL,
                'digital_key' => NULL,
                'reason' => NULL,
                'payment_status' => 'Paid',
                'created_at' => '2024-12-24 17:47:32',
                'updated_at' => '2024-12-24 17:48:24',
            ),
            5 => 
            array (
                'id' => 19,
                'type' => 'Pay Now',
                'owner_id' => 9,
                'renter_id' => 6,
                'property_id' => 10,
                'amount' => '1250.00000000',
                'from_date' => '2024-12-30 05:30:00',
                'to_date' => '2024-12-31 05:30:00',
                'guest' => 2,
                'room_no' => NULL,
                'floor_no' => NULL,
                'address' => NULL,
                'lat' => NULL,
                'lng' => NULL,
                'remarks' => NULL,
                'status' => 0,
                'checkin' => 0,
                'checkin_time' => NULL,
                'checkout' => 0,
                'checkout_time' => NULL,
                'digital_key' => NULL,
                'reason' => NULL,
                'payment_status' => 'Paid',
                'created_at' => '2024-12-29 20:11:28',
                'updated_at' => '2024-12-29 20:11:28',
            ),
            6 => 
            array (
                'id' => 20,
                'type' => 'Pay Now',
                'owner_id' => 10,
                'renter_id' => 6,
                'property_id' => 11,
                'amount' => '24.00000000',
                'from_date' => '2024-12-30 05:30:00',
                'to_date' => '2025-01-01 05:30:00',
                'guest' => 4,
                'room_no' => NULL,
                'floor_no' => NULL,
                'address' => NULL,
                'lat' => NULL,
                'lng' => NULL,
                'remarks' => NULL,
                'status' => 1,
                'checkin' => 0,
                'checkin_time' => NULL,
                'checkout' => 0,
                'checkout_time' => NULL,
                'digital_key' => NULL,
                'reason' => NULL,
                'payment_status' => 'Paid',
                'created_at' => '2024-12-29 20:41:58',
                'updated_at' => '2024-12-29 20:45:17',
            ),
            7 => 
            array (
                'id' => 21,
                'type' => 'Pay At Hotel',
                'owner_id' => 6,
                'renter_id' => 1,
                'property_id' => 13,
                'amount' => '12.00000000',
                'from_date' => '2025-01-24 05:30:00',
                'to_date' => '2025-01-26 05:30:00',
                'guest' => 1,
                'room_no' => NULL,
                'floor_no' => NULL,
                'address' => NULL,
                'lat' => NULL,
                'lng' => NULL,
                'remarks' => NULL,
                'status' => 1,
                'checkin' => 0,
                'checkin_time' => NULL,
                'checkout' => 0,
                'checkout_time' => NULL,
                'digital_key' => NULL,
                'reason' => NULL,
                'payment_status' => 'Pending',
                'created_at' => '2024-12-31 21:51:54',
                'updated_at' => '2024-12-31 21:51:54',
            ),
            8 => 
            array (
                'id' => 22,
                'type' => 'Pay At Hotel',
                'owner_id' => 6,
                'renter_id' => 2,
                'property_id' => 13,
                'amount' => '12.00000000',
                'from_date' => '2025-01-24 05:30:00',
                'to_date' => '2025-01-26 05:30:00',
                'guest' => 1,
                'room_no' => NULL,
                'floor_no' => NULL,
                'address' => NULL,
                'lat' => NULL,
                'lng' => NULL,
                'remarks' => NULL,
                'status' => 1,
                'checkin' => 0,
                'checkin_time' => NULL,
                'checkout' => 0,
                'checkout_time' => NULL,
                'digital_key' => NULL,
                'reason' => NULL,
                'payment_status' => 'Pending',
                'created_at' => '2024-12-31 21:51:54',
                'updated_at' => '2024-12-31 21:51:54',
            ),
            9 => 
            array (
                'id' => 23,
                'type' => 'Pay Now',
                'owner_id' => 6,
                'renter_id' => 1,
                'property_id' => 13,
                'amount' => '1000.00000000',
                'from_date' => '2025-01-24 00:00:00',
                'to_date' => '2025-01-26 00:00:00',
                'guest' => 2,
                'room_no' => NULL,
                'floor_no' => NULL,
                'address' => NULL,
                'lat' => NULL,
                'lng' => NULL,
                'remarks' => NULL,
                'status' => 1,
                'checkin' => 0,
                'checkin_time' => NULL,
                'checkout' => 0,
                'checkout_time' => NULL,
                'digital_key' => NULL,
                'reason' => NULL,
                'payment_status' => 'Paid',
                'created_at' => '2025-01-04 15:46:09',
                'updated_at' => '2025-01-04 15:46:09',
            ),
        ));
        
        
    }
}