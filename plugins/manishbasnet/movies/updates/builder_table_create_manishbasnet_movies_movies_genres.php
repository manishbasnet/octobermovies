<?php namespace ManishBasnet\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateManishbasnetMoviesMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('manishbasnet_movies_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id');
            $table->integer('genre_id');
            $table->primary(['movie_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('manishbasnet_movies_movies_genres');
    }
}
