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
        //$this->call(UsersTableSeeder::class);
        $this->call(RoleAndPermissionTableSeeder::class);
        //$this->call(ApiSeeder::class);
        factory(App\User::class, 50)->create();
    }
}
