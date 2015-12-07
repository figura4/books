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
            $table->string('italian_subtitle')->nullable();
            $table->string('original_title')->nullable();
            $table->string('original_subtitle')->nullable();
            $table->text('review');
            $table->dateTime('review_pub_date');
            $table->char('pages', 5)->nullable();
            $table->string('editor')->nullable();
            $table->string('cover')->nullable();
            $table->char('pub_year', 4)->nullable();
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
