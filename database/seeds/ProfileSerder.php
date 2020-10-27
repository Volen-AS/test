<?php

use Illuminate\Database\Seeder;

class ProfileSerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'first_name' => 'Aaron',
                'last_name' => 'Hank',
                'phone' => '3724536673',
                'birth_date' => '12.44.1955',
                'sex' => 1
            ],
            [
                'user_id' => 2,
                'first_name' => 'Allen',
                'last_name' => 'Hank',
                'phone' => '3724536673',
                'birth_date' => '12.44.1955',
                'sex' => 2
            ],
            [
                'user_id' => 3,
                'first_name' => 'Ben-Gurion',
                'last_name' => 'David',
                'phone' => '3724536673',
                'birth_date' => '12.44.1955',
                'sex' => 1
            ],
            [
                'user_id' => 4,
                'first_name' => 'Cosby',
                'last_name' => 'Bill',
                'phone' => '3724536673',
                'birth_date' => '12.44.1955',
                'sex' => 1
            ],
            [
                'user_id' => 5,
                'first_name' => 'Esposito',
                'last_name' => 'Phil',
                'phone' => '3724536673',
                'birth_date' => '12.44.1955',
                'sex' => 2
            ],
            [
                'user_id' => 6,
                'first_name' => 'King',
                'last_name' => 'Coretta Scott',
                'phone' => '3724536673',
                'birth_date' => '12.44.1955',
                'sex' => 1
            ],

        ];
        DB::table('profiles')->insert($data);
    }
}
