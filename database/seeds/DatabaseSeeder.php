<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AuthorsTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(QuotesTableSeeder::class);

        Model::reguard();
    }
}
