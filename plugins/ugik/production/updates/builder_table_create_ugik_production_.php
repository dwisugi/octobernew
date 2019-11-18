<?php namespace Ugik\Production\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUgikProduction extends Migration
{
    public function up()
    {
        Schema::create('ugik_production_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ugik_production_');
    }
}
