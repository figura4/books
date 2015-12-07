<?php
use Illuminate\Database\Seeder;
class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'description' => 'Fantascienza'
        ]);
        DB::table('genres')->insert([
            'description' => 'Thriller'
        ]);
        DB::table('genres')->insert([
            'description' => 'Storico'
        ]);
        DB::table('genres')->insert([
            'description' => 'Biografico'
        ]);

    }
}
