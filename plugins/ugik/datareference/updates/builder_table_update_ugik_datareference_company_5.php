<?php namespace Ugik\DataReference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUgikDatareferenceCompany5 extends Migration
{
    public function up()
    {
        Schema::table('ugik_datareference_company', function($table)
        {
            $table->integer('id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('ugik_datareference_company', function($table)
        {
            $table->integer('id')->nullable(false)->change();
        });
    }
}
