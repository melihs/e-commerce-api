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
//         $this->call(UsersTableSeeder::class);
	    factory('App\User',10)->create();
	    factory('App\Model\Product',10)->create();
	    factory('App\Model\Review',10)->create();
    }
}
