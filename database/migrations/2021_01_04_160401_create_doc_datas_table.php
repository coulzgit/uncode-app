<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_docs', function (Blueprint $table) {
            $table->id();
            $table->integer('projet_id')->nullable(true);
            $table->string('data_index')->nullable(false);
            $table->string('doc_id',64)->nullable(false);
            $table->string('data_value',100)->nullable(true);
            $table->string('stamp_date')->nullable(true);
            $table->string('stamp_uid',60)->nullable(true);

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
        Schema::dropIfExists('data_docs');
    }
}