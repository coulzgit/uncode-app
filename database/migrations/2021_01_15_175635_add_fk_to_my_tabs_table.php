<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToMyTabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // RELATION TABLE USERS
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('account_id')->nullable()->constrained('accounts');
        });
        // RELATION TABLE ACC_DATAS
        Schema::table('acc_datas', function (Blueprint $table) {
            $table->foreignId('ID_DOC')->nullable()->constrained('docs');

        });
        // // RELATION TABLE ACC_DATA_NAMES
        Schema::table('acc_data_names', function (Blueprint $table) {
            $table->foreignId('acc_data_id')->nullable()->constrained('acc_datas');
        });
        // // RELATION TABLE ACTION_LOGS
        Schema::table('action_logs', function (Blueprint $table) {
                $table->foreignId('ID_DOC')->nullable()->constrained('docs');
        });
        // // RELATION TABLE ACTION_LOG_NAMES
        Schema::table('action_log_names', function (Blueprint $table) {
                $table->foreignId('action_log_id')->nullable()->constrained('action_logs');
        });
        // // RELATION TABLE DOC_ATTACHMENTS
        Schema::table('doc_attachments', function (Blueprint $table) {
                $table->foreignId('ID_DOC')->nullable()->constrained('docs');
                // $table->foreignId('doc_id')->nullable()->constrained('docs');
        });
        // // RELATION TABLE DOC_DATAS
        Schema::table('data_docs', function (Blueprint $table) {
                $table->foreignId('ID_DOC')->nullable()->constrained('docs');
        });
        // // RELATION TABLE DOC_DATA_NAMES
        Schema::table('doc_data_names', function (Blueprint $table) {
                $table->foreignId('doc_data_id')->nullable()->constrained('data_docs');
        });
        // // RELATION TABLE DOC_FILES
        Schema::table('doc_files', function (Blueprint $table) {
                $table->foreignId('ID_DOC')->nullable()->constrained('docs');
        });
        // // RELATION TABLE COMPAGNY_GRID_FIELDS
        Schema::table('company_grid_fields', function (Blueprint $table) {
                $table->foreignId('compagnie_id')->nullable()->constrained('compagnies');
        });
        // // RELATION TABLE INVOICE_TYPES
        Schema::table('invoice_types', function (Blueprint $table) {
                $table->foreignId('compagnie_id')->nullable()->constrained('compagnies');
        });
        // // RELATION TABLE IP_LINE_ITEMS
        Schema::table('ip_line_items', function (Blueprint $table) {
                $table->foreignId('ID_DOC')->nullable()->constrained('docs');
        });
        // // RELATION TABLE IP_LINE_ITEM_PARAMS
        Schema::table('ip_line_item_params', function (Blueprint $table) {
                $table->foreignId('ip_line_item_id')->nullable()->constrained('ip_line_items');
        });
        // // RELATION TABLE ACCOUNTS
        Schema::table('accounts', function (Blueprint $table) {
                $table->foreignId('licence_id')->nullable()->constrained('licences');
        });
        // // RELATION TABLE PROJETS
        Schema::table('projets', function (Blueprint $table) {
            $table->foreignId('account_id')->nullable()->constrained('accounts');
        });
        // // RELATION TABLE DOCS
        Schema::table('docs', function (Blueprint $table) {
            $table->foreignId('projet_id')->nullable()->constrained('projets');
        });

        // // RELATION TABLE ACC_DATA_COLUMN_SHOW
        Schema::table('acc_data_column_shows', function (Blueprint $table) {
            $table->foreignId('account_id')->nullable()->constrained('accounts');
        });
        // // RELATION TABLE DOC_COLUMN_SHOW
        Schema::table('doc_column_shows', function (Blueprint $table) {
            $table->foreignId('account_id')->nullable()->constrained('accounts');
        });

        // // RELATION TABLE PERMISSION_NAME
        Schema::table('permission_names', function (Blueprint $table) {
            $table->foreignId('permission_id')->nullable()->constrained('permissions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
