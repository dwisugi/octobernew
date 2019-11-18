<?php namespace Ugik\DataReference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUgikDatareferenceCompany extends Migration
{
    public function up()
    {
        Schema::table('ugik_datareference_company', function($table)
        {
            $table->increments('id')->unsigned();
            $table->dropColumn('company_code');
            $table->dropColumn('company_cat');
            $table->dropColumn('company');
            $table->dropColumn('address');
            $table->dropColumn('contact_name');
            $table->dropColumn('contact_phone');
            $table->dropColumn('company_notes');
        });
    }
    
    public function down()
    {
        Schema::table('ugik_datareference_company', function($table)
        {
            $table->dropColumn('id');
            $table->string('company_code', 12);
            $table->string('company_cat', 16);
            $table->string('company', 32);
            $table->text('address');
            $table->string('contact_name', 16);
            $table->integer('contact_phone');
            $table->text('company_notes');
        });
    }
}
