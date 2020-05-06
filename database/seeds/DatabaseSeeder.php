<?php

use Illuminate\Database\Seeder;
use App\Rate;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        factory(Rate::class,10)->create();
    }
}
