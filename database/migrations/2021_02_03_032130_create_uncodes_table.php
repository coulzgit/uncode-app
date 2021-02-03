<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUncodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uncodes', function (Blueprint $table) {
            $table->id();
            $table->string('app_logo')->nullable(true);
            $table->string('favicon')->nullable(true);
            $table->string('app_name')->nullable(true);
            $table->string('contact_url')->nullable(true);
            $table->string('telephone1')->nullable(true);
            $table->string('telephone2')->nullable(true);
            $table->string('domaine')->nullable(true);
            $table->string('email')->nullable(true);
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
        Schema::dropIfExists('uncodes');
    }
}
