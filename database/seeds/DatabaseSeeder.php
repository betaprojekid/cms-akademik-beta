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
        $this->reset();
        // $this->call(UserSeeder::class);
        // $this->call([
        //     ''
        // ])
    }

    public function reset(){
        // truncate all here
    }
}
