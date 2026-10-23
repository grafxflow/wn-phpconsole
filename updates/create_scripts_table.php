<?php

namespace Grafxflow\PhpConsole\Updates;

use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;
use Winter\Storm\Support\Facades\Schema;

class CreateScriptsTable extends Migration
{
    public function up(): void
    {
        Schema::create('grafxflow_phpconsole_scripts', function (Blueprint $table): void {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('description', 500)->nullable();
            $table->text('code');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grafxflow_phpconsole_scripts');
    }
}
