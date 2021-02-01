<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(false);
            $table->boolean('statut')->default(false);
            $table->string('app_name')->nullable(true);
            $table->string('app_logo')->nullable(true);
            $table->string('expired_at')->nullable(true);
            $table->string('domaine_name')->nullable(true);
            $table->string('login_image')->nullable(true);

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
        Schema::dropIfExists('accounts');
    }
}
