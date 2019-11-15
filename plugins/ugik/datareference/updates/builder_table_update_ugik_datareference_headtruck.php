<?php namespace Ugik\DataReference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUgikDatareferenceHeadtruck extends Migration
{
    public function up()
    {
        Schema::rename('ugik_datareference_headtruk', 'ugik_datareference_headtruck');
    }
    
    public function down()
    {
        Schema::rename('ugik_datareference_headtruck', 'ugik_datareference_headtruk');
    }
}
