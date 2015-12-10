<?php
use Illuminate\Database\Seeder;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'italian_title' => 'La stupidità dello equino',
            'review' => 'Equino sempre più stupido',
            'author_id' => '1',
            'user_id' => '1',
            'vote' => '5',
            'review_pub_date' => '12-12-2012'
        ]);
        
    }
}
