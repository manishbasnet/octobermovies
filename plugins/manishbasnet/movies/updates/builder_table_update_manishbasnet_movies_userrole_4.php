<?php namespace ManishBasnet\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateManishbasnetMoviesUserrole4 extends Migration
{
    public function up()
    {
        Schema::table('manishbasnet_movies_userrole', function($table)
        {
            $table->string('role_code');
        });
    }
    
    public function down()
    {
        Schema::table('manishbasnet_movies_userrole', function($table)
        {
            $table->dropColumn('role_code');
        });
    }
}
