<?php namespace Ugik\DataReference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUgikDatareferenceHeadtruk2 extends Migration
{
    public function up()
    {
        Schema::table('ugik_datareference_headtruk', function($table)
        {
            $table->integer('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('ugik_datareference_headtruk', function($table)
        {
            $table->dropColumn('id');
        });
    }
}
