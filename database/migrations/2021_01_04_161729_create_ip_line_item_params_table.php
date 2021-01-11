<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpLineItemParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ip_line_item_params', function (Blueprint $table) {
            $table->id();
            
            $table->string('LIP_DATA_FIELD')->nullable(false);
            $table->string('LIP_COMP_NO')->nullable(true);
            $table->string('LIP_FIELD_LABEL')->nullable(true);
            $table->string('LIP_DATA_TYPE')->nullable(true);
            $table->string('LIP_SCREEN_POSITION')->nullable(true);
            $table->string('LIP_FIELD_LENGHT')->nullable(true);
            $table->string('LIP_SHOW_IN_CLIENT')->nullable(true);
            $table->string('LIP_ORDER_ROW_DATA_FIELD')->nullable(true);
            $table->string('LIP_ORDER_ROW_DATA_FIELD_LABEL',100)->nullable(true);
            $table->string('LIP_ASSOSIATION_FIELD')->nullable(true);
            $table->string('LIP_RULES_FIELD')->nullable(true);
            $table->string('lip_col_order')->nullable(true);
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
        Schema::dropIfExists('ip_line_item_params');
    }
}
