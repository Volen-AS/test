<?php

use Illuminate\Database\Seeder;

class Group extends Seeder
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
                'user_owner_id' => 1,
                'group_name' => 'we'
            ],
            [
                'user_owner_id' => 1,
                'group_name' => 'vipUser'
            ],
            [
                'user_owner_id' => 1,
                'group_name' => 'bestUser'
            ],
        ];
        DB::table('groups')->insert($data);
    }
}
