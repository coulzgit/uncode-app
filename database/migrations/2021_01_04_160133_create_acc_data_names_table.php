<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccDataNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acc_data_names', function (Blueprint $table) {
            
            $table->id();
            
            // $table->string('data_index')->nullable(false);
            $table->string('data_field',50)->nullable(true);
            $table->string('data_name',50)->nullable(true);
            $table->string('default_value',50)->nullable(true);
            $table->string('data_type',1)->nullable(true);
            $table->string('data_formula',2000)->nullable(true);
            $table->string('data_background',20)->nullable(true);
            $table->string('data_format',20)->nullable(true);
            $table->string('listfile_index')->nullable(true);
            $table->string('lock_field')->nullable(true);
            $table->string('special_field',20)->nullable(true);
            $table->string('expand_index')->nullable(true);
            $table->string('dont_warn')->nullable(true);
            $table->string('comp_bind_level',10)->nullable(true);
            $table->string('must_field')->nullable(true);
            $table->string('max_length')->nullable(true);
            $table->string('min_length')->nullable(true);
            $table->string('layer')->nullable(true);
            $table->string('comp_no',20)->nullable(true);
            $table->string('use_digitgrouping')->nullable(true);
            $table->string('num_digits')->nullable(true);
            $table->string('data_width')->nullable(true);
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
        Schema::dropIfExists('acc_data_names');
    }
}
