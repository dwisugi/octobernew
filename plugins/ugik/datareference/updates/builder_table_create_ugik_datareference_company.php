<?php namespace Ugik\DataReference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUgikDatareferenceCompany extends Migration
{
    public function up()
    {
        Schema::create('ugik_datareference_company', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('company_code', 12);
            $table->string('company_cat', 16);
            $table->string('company', 32);
            $table->text('address');
            $table->string('contact_name', 16);
            $table->integer('contact_phone');
            $table->text('company_notes');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ugik_datareference_company');
    }
}
