<?php namespace Ugik\DataReference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUgikDatareferenceCompany extends Migration
{
    public function up()
    {
        Schema::table('ugik_datareference_company', function($table)
        {
            $table->integer('id')->unsigned();
            $table->primary(['company_code']);
        });
    }
    
    public function down()
    {
        Schema::table('ugik_datareference_company', function($table)
        {
            $table->dropPrimary(['company_code']);
            $table->dropColumn('id');
        });
    }
}
