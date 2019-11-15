<?php namespace Ugik\DataReference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUgikDatareferenceHeadtruk extends Migration
{
    public function up()
    {
        Schema::create('ugik_datareference_headtruk', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('head_truck_no', 12);
            $table->string('head_truck_type', 32);
            $table->string('vendor', 16);
            $table->primary(['head_truck_no']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ugik_datareference_headtruk');
    }
}
