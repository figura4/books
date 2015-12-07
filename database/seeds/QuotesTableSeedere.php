<?php
use Illuminate\Database\Seeder;
class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quotes')->insert([
            'body' => 'I computer sono inutili!',
            'source' => 'Io me medesimo',
            'book_id' => 1,
        ]);

        DB::table('quotes')->insert([
            'body' => 'Stupido equino',
            'source' => 'Oscar',
            'book_id' => 1,
        ]);
    }
}
