<?php namespace Ugik\DataReference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteUgikDatareferenceSapi extends Migration
{
    public function up()
    {
        Schema::dropIfExists('ugik_datareference_sapi');
    }
    
    public function down()
    {
        Schema::create('ugik_datareference_sapi', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nama', 191)->nullable();
            $table->text('alamat')->nullable();
            $table->string('jurusan', 191)->nullable();
        });
    }
}
