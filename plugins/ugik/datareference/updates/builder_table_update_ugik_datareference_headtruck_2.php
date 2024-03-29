<?php namespace Ugik\DataReference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUgikDatareferenceHeadtruck2 extends Migration
{
    public function up()
    {
        Schema::table('ugik_datareference_headtruck', function($table)
        {
            $table->bigInteger('id')->nullable(false)->unsigned()->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('ugik_datareference_headtruck', function($table)
        {
            $table->integer('id')->nullable()->unsigned()->default(null)->change();
        });
    }
}
