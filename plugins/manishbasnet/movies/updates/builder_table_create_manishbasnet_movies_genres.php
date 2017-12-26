<?php namespace ManishBasnet\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateManishbasnetMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('manishbasnet_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('manishbasnet_movies_genres');
    }
}