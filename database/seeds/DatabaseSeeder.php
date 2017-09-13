<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	  // User seeder will use the roles above created.
	  $this->call(UsersTableSeeder::class);
    }
}
