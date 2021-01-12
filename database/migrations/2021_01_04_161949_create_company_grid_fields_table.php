<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyGridFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_grid_fields', function (Blueprint $table) {
            $table->id();
            // $table->integer('compagnie_id')->nullable(false);
            $table->string('comp_no')->nullable(false);
            $table->string('acc_fields',500)->nullable(true);
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
        Schema::dropIfExists('company_grid_fields');
    }
}
