<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_types', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_type_code')->nullable(false);
            $table->string('invoice_type_name')->nullable(true);
            $table->string('handle_code')->nullable(true);
            // $table->string('comp_no')->nullable(false);
            $table->string('layer')->nullable(true);
            $table->string('credit_memo')->nullable(true);
            $table->string('INVOICE_TYPE_CAT')->nullable(true);
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
        Schema::dropIfExists('invoice_types');
    }
}
