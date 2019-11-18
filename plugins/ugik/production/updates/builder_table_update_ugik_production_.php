<?php namespace Ugik\Production\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUgikProduction extends Migration
{
    public function up()
    {
        Schema::rename('ugik_production_production', 'ugik_production_');
    }
    
    public function down()
    {
        Schema::rename('ugik_production_', 'ugik_production_production');
    }
}
