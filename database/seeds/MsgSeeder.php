<?php

use Illuminate\Database\Seeder;

class MsgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'user_id' => 1,
                'msg_text'   => 'Receive discounts on tasty lunch specials. Text “LUNCH” to 777-343-555 and get a 2% discount on your next order! Your Daily Food.',
            ],
            [
                'user_id' => 1,
                'msg_text'   => 'No more running out of the office at 4pm on Fridays to find a new dress! Lucy’s Closet is now open until 8pm. Find your closest store: lucy.com/stores',
            ],
            [
                'user_id' => 1,
                'msg_text'   => 'All your favourite books at your reach! Gottingham Bookstore is now mobile. Best deals for 3 days only, hurry up: m.bookstore.com',
            ],
            [
                'user_id' => 1,
                'msg_text'   => 'Be the first to know about discounts and offers at Bethany Beauty! Click here to subscribe: store.com/coupons-deals',
            ],
            [
                'user_id' => 1,
                'msg_text'   => 'Your dental appointment with Dr P. Delvour is scheduled for October 29, 4:00pm. ABC Dentist, 555-555-555.',
            ]
        ];
        \DB::table('msg_templates')->insert($data);
    }
}
