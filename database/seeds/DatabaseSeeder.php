<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ProfileSerder::class);
        $this->call(MsgSeeder::class);
        $this->call(Group::class);
        $this->call(UserGroup::class);
    }
}
