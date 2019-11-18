<?php namespace Ugik\DataReference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUgikDatareferenceHeadtruck extends Migration
{
    public function up()
    {
        Schema::create('ugik_datareference_headtruck', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('head_truck_no', 12);
            $table->string('head_truck_type', 32);
            $table->string('vendor', 16);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ugik_datareference_headtruck');
    }
}
