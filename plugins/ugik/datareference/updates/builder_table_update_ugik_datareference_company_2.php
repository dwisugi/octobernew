<?php namespace Ugik\DataReference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUgikDatareferenceCompany2 extends Migration
{
    public function up()
    {
        Schema::table('ugik_datareference_company', function($table)
        {
            $table->string('company_code', 16);
            $table->string('company_cat', 16);
            $table->string('company', 32);
            $table->text('address');
            $table->string('contact_name', 16);
            $table->integer('contact_phone');
            $table->text('company_notes');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ugik_datareference_company', function($table)
        {
            $table->dropColumn('company_code');
            $table->dropColumn('company_cat');
            $table->dropColumn('company');
            $table->dropColumn('address');
            $table->dropColumn('contact_name');
            $table->dropColumn('contact_phone');
            $table->dropColumn('company_notes');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
}
