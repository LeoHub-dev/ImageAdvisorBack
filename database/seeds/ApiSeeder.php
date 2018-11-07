<?php

use Illuminate\Database\Seeder;

use App\Models\Api;

class ApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //Role::truncate();
        //Permission::truncate();

        $api = new Api();
        $api->name         = 'Bittrex';
        $api->save();

    
    }
}
