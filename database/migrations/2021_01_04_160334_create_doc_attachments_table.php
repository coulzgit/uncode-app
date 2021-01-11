<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_attachments', function (Blueprint $table) {
            $table->id();
            // $table->string('doc_id',64)->nullable(false);
            $table->string('attachment_name',256)->nullable(true);
            $table->string('attachment_file',250)->nullable(false);
            $table->string('attachment_owner',60)->nullable(true);
            $table->string('attachment_resource',250)->nullable(true);
            $table->string('user_org_code',20)->nullable(true);
            $table->string('resource_id',50)->nullable(true);
            $table->string('attachment_encrypted')->nullable(true);
            $table->string('original_file_name',256)->nullable(true);
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
        Schema::dropIfExists('doc_attachments');
    }
}
