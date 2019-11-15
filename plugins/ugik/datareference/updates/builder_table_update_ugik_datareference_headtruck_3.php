<?php namespace Ugik\DataReference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUgikDatareferenceHeadtruck3 extends Migration
{
    public function up()
    {
        Schema::table('ugik_datareference_headtruck', function($table)
        {
            $table->integer('id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('ugik_datareference_headtruck', function($table)
        {
            $table->integer('id')->unsigned(false)->change();
        });
    }
}
