<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");
        Model::unguard();

        $this->call(UserTableSeeder::class);

        $this->call(CategoryTableSeeder::class);

        $this->call(PostTableSeeder::class);

        Model::reguard();
        DB::statement("SET foreign_key_checks=1");
    }
}
