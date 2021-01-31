<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompagniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compagnies', function (Blueprint $table) {
            $table->id();
            $table->integer('projet_id')->nullable(true);
            $table->string('comp_index')->nullable(true);
            $table->string('comp_no')->nullable(false);
            $table->string('comp_name')->nullable(true);
            $table->string('comp_parent')->nullable(true);
            $table->string('comp_struct1')->nullable(true);
            $table->string('comp_struct2')->nullable(true);
            $table->string('comp_struct3')->nullable(true);
            $table->string('comp_struct4')->nullable(true);
            $table->string('comp_struct5')->nullable(true);
            $table->string('comp_struct6')->nullable(true);
            $table->string('comp_struct7')->nullable(true);
            $table->string('comp_struct8')->nullable(true);
            $table->string('comp_struct9')->nullable(true);
            $table->string('comp_struct10')->nullable(true);
            $table->string('comp_date1')->nullable(true);
            $table->string('comp_date2')->nullable(true);
            $table->string('comp_date3')->nullable(true);
            $table->string('valid_start')->nullable(true);
            $table->string('valid_end')->nullable(true);
            $table->string('edipartnerid')->nullable(true);

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
        Schema::dropIfExists('compagnies');
    }
}
