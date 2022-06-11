<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("number");
            $table->timestamps();
            $table->boolean("step1")->nullable();
            $table->boolean("step2")->nullable();
            $table->boolean("step3")->nullable();
            $table->boolean("step4")->nullable();
            $table->boolean("step5")->nullable();
            $table->boolean("step6")->nullable();
            $table->boolean("step7")->nullable();
            $table->boolean("step8")->nullable();
            $table->boolean("step9")->nullable();
            $table->boolean("step10")->nullable();
            $table->boolean("step11")->nullable();
            $table->boolean("step12")->nullable();
            $table->boolean("step13")->nullable();
            $table->boolean("step14")->nullable();
            $table->string("process")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processes');
    }
}
