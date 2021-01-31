<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccActionLogNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_log_names', function (Blueprint $table) {
            $table->id();
           $table->integer('projet_id')->nullable(true);
            $table->string('log_index')->nullable(false);
            $table->string('log_description',250)->nullable(true);
            $table->string('default_view')->nullable(false);
            $table->string('lan_code',3)->nullable(false);
            $table->string('search_index')->nullable(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('action_log_names');
    }
}