<?php

namespace Grafxflow\PhpConsole\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class CreateScriptsTable extends Migration
{
    public function up()
    {
        Schema::create('grafxflow_phpconsole_scripts', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('description', 500)->nullable();
            $table->text('code');
        });
    }

    public function down()
    {
        Schema::dropIfExists('grafxflow_phpconsole_scripts');
    }
}
