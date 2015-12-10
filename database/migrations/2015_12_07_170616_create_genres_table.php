<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->timestamps();
        });
        
        Schema::create('book_genre', function (Blueprint $table) {
            $table->integer('genre_id');
            $table->integer('book_id');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('genres');
        Schema::drop('book_genre');
    }
}
