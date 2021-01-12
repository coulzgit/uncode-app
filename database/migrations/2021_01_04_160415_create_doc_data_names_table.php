<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocDataNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_data_names', function (Blueprint $table) {
            $table->id();
            $table->string('data_index')->nullable(false);
            $table->string('data_name',50)->nullable(true);
            $table->string('default_value',50)->nullable(true);
            $table->string('data_type',1)->nullable(true);
            $table->string('list_index')->nullable(true);
            $table->string('order_index')->nullable(true);
            $table->string('lock_field')->nullable(true);
            $table->string('special_field',20)->nullable(true);
            $table->string('check_type',10)->nullable(true);
            $table->string('check_value_list',250)->nullable(true);
            $table->string('check_bind_index1')->nullable(true);
            $table->string('check_bind_index2')->nullable(true);
            $table->string('check_operator1',2)->nullable(true);
            $table->string('check_operator2',2)->nullable(true);
            $table->string('client_field')->nullable(true);
            $table->string('must_field')->nullable(true);
            $table->string('cell_format',25)->nullable(true);
            $table->string('max_length')->nullable(true);
            $table->string('min_length')->nullable(true);
            $table->string('comp_no',20)->nullable(true);
            $table->string('client_updateable')->nullable(false);
            $table->string('fs_field')->nullable(false);
            $table->string('fs_must_field')->nullable(false);
            $table->string('fs_order_index')->nullable(true);
            $table->string('fs_train_order_index')->nullable(true);
            $table->string('fs_length')->nullable(true);
            $table->string('fs_trainable')->nullable(true);
            $table->string('fs_alignment')->nullable(true);
            $table->string('fs_default_value',50)->nullable(true);
            $table->string('fs_data_type',10)->nullable(true);
            $table->string('fs_lock_field')->nullable(true);
            $table->string('use_digitgrouping')->nullable(true);
            $table->string('num_digits')->nullable(true);
            $table->string('data_width')->nullable(true);
            $table->string('fs_enablebatchlocking')->nullable(true);
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
        Schema::dropIfExists('doc_data_names');
    }
}
