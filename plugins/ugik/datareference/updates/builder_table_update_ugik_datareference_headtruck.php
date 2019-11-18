<?php namespace Ugik\DataReference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUgikDatareferenceHeadtruck extends Migration
{
    public function up()
    {
        Schema::table('ugik_datareference_headtruck', function($table)
        {
            $table->string('head_truck_type', 32)->nullable()->change();
            $table->string('vendor', 16)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('ugik_datareference_headtruck', function($table)
        {
            $table->string('head_truck_type', 32)->nullable(false)->change();
            $table->string('vendor', 16)->nullable(false)->change();
        });
    }
}
