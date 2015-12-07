<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id');
            $table->integer('user_id');
            $table->string('italian_title');
            $table->string('italian_subtitle');
            $table->string('original_title');
            $table->string('original_subtitle');
            $table->text('review');
            $table->dateTime('review_pub_date');
            $table->char('pages', 5);
            $table->string('editor');
            $table->string('cover');
            $table->char('pub_year', 4);
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
        Schema::drop('books');
    }
}
