<?php

use Illuminate\Database\Seeder;

class UserGroup extends Seeder
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
                'group_id' => 1,
                'user_id' => 2,
            ],
            [
                'group_id' => 1,
                'user_id' => 3,
            ],
            [
                'group_id' => 1,
                'user_id' => 4,
            ],
            [
                'group_id' => 2,
                'user_id' => 2,
            ],
            [
                'group_id' => 2,
                'user_id' => 6,
            ],
            [
                'group_id' => 3,
                'user_id' => 4,
            ],
            [
                'group_id' => 3,
                'user_id' => 5,
            ],
            [
                'group_id' => 3,
                'user_id' => 6,
            ],
        ];
        DB::table('user_groups')->insert($data);
    }
}
