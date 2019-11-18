<?php namespace Ugik\DataReference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUgikDatareferenceSapi extends Migration
{
    public function up()
    {
        Schema::create('ugik_datareference_sapi', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->text('alamat')->nullable();
            $table->string('jurusan')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ugik_datareference_sapi');
    }
}
