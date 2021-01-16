<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docs', function (Blueprint $table) {

            $table->id();
            $table->string('doc_id',64)->nullable(false); 
            $table->string('scan_date')->nullable(true);
            $table->string('comp_no',20)->nullable(true);
            $table->string('doc_name',60)->nullable(true);
            $table->string('doc_pages')->nullable(true);
            $table->string('flow_fixed')->nullable(true);
            $table->string('supplier_num',100)->nullable(true);
            $table->string('invoice_num',30)->nullable(true);
            $table->string('voucher_num',30)->nullable(true);
            $table->string('invoice_date')->nullable(true);
            $table->string('invoice_last_date')->nullable(true);

            $table->string('invoice_sum',256)->nullable(true);

            $table->string('stamp_date')->nullable(true);
            $table->string('stamp_uid',60)->nullable(true);
            $table->string('status_index')->nullable(false);
            $table->string('order_num',50)->nullable(true);
            $table->string('last_acceptor',60)->nullable(true);
            $table->string('exchange_rate',256)->nullable(true);
            $table->string('invoice_currency',20)->nullable(true);

            $table->string('invoice_sum_calc',256)->nullable(true);

            $table->string('cash_date')->nullable(true);
            $table->string('accounting_period',15)->nullable(true);
            $table->string('supplier_name',70)->nullable(true);
            $table->string('attrib_t1',50)->nullable(true);
            $table->string('attrib_t2',50)->nullable(true);
            $table->string('attrib_t3',50)->nullable(true);
            $table->string('attrib_t4',50)->nullable(true);
            $table->string('attrib_t5',50)->nullable(true);
            $table->string('attrib_t6',50)->nullable(true);
            $table->string('attrib_t7',50)->nullable(true);

            $table->string('attrib_n',100)->nullable(true);
            $table->string('attrib_n2',100)->nullable(true);
            $table->string('attrib_n3',100)->nullable(true);
            $table->string('attrib_n4',100)->nullable(true);

            $table->string('attrib_d')->nullable(true);
            $table->string('attrib_d2')->nullable(true);
            $table->string('attrib_d3')->nullable(true);
            $table->string('attrib_d4')->nullable(true);
            $table->string('bff_resource',80)->nullable(true);
            $table->string('vat_sum',100)->nullable(true);
            $table->string('invoice_serial',100)->nullable(true);
            $table->string('invoice_type',5)->nullable(true);

            $table->string('prebooked')->nullable(true);
            $table->string('secondary_status')->nullable(true);

            $table->string('entry_date')->nullable(true);
            $table->string('voucher_group',20)->nullable(true);
            $table->string('voucher_period',4)->nullable(true);
            $table->string('user_serial')->nullable(true);
            $table->string('net_sum_calc',100)->nullable(true);
            $table->string('net_sum',100)->nullable(true);
            $table->string('with_comments')->nullable(true);
            $table->string('external_status')->nullable(true);
            $table->string('voucher_year',4)->nullable(true);

            $table->string('serial_year')->nullable(true);

            $table->string('gl_date')->nullable(true);
            $table->string('credit_memo',30)->nullable(true);
            $table->string('vat_sum_calc',100)->nullable(true);
            $table->string('hold_owner',60)->nullable(true);
            $table->string('lock_owner',60)->nullable(true);
            $table->string('lock_date')->nullable(true);

            $table->string('lock_index')->nullable(true);
            $table->string('contract_num',50)->nullable(true);
            $table->string('oneaction')->nullable(true);
            $table->string('transfer_check')->nullable(true);
            $table->string('autoflow_status_index')->nullable(true);
            $table->string('match_status_index')->nullable(true);
            $table->string('custom_action_status')->nullable(true);

            $table->string('preprocessing_timestamp')->nullable(true);
            $table->string('supplier_rep_code',60)->nullable(true);
            $table->string('supplier_rep_name',200)->nullable(true);
            $table->string('payment_date')->nullable(true);
            $table->string('delivery_note_number',100)->nullable(true);
            $table->string('reference_person',60)->nullable(true);

            $table->string('CM_REQUEST')->nullable(true);
            $table->string('invoice_origin')->nullable(true);
            $table->string('match_wait_until')->nullable(true);
            $table->string('invoice_category',50)->nullable(true);
            $table->string('parent_invoice_id',64)->nullable(true);
            $table->string('MC_MATCH_STATUS_INDEX')->nullable(true);
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
        Schema::dropIfExists('docs');
    }
}