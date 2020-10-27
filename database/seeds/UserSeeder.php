<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'name'   => 'User1',
                'email'  => 'User1@g.g',
                'password'=> bcrypt('123123123')
            ],
            [
                'name'   => 'User2',
                'email'  => 'User2@g.g',
                'password'=> bcrypt('123123123')
            ],
            [
                'name'   => 'User6',
                'email'  => 'User6@g.g',
                'password'=> bcrypt('123123123')
            ],
            [
                'name'   => 'User3',
                'email'  => 'User3@g.g',
                'password'=> bcrypt('123123123')
            ],
            [
                'name'   => 'User4',
                'email'  => 'User4@g.g',
                'password'=> bcrypt('123123123')
            ],
            [
                'name'   => 'User5',
                'email'  => 'User5@g.g',
                'password'=> bcrypt('123123123')
            ],

        ];
        DB::table('users')->insert($data);
    }
}
