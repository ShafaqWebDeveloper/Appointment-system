<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('pname');
            $table->string('pfname');
            $table->string('pmobile');
            $table->string('pgen');
            $table->string('pdoc');
            $table->string('pdate');
            $table->string('ptime');
            $table->string('pemail');
            $table->string('ppass');
            $table->string('ppic');
            $table->string('psymptoms');
            $table->string('prole');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
