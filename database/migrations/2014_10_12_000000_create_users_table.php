<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name',20)->nullable(false);
            $table->string('prenom',50)->nullable(true);
            $table->string('nom',50)->nullable(true);
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable(true);
            $table->string('password')->nullable(true);
            $table->boolean('account_owner')->default(false);
            $table->string('photo')->default("6.jpg");
            
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}