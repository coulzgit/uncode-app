<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $projet_id
 * @property string $doc_id
 * @property string $scan_date
 * @property string $comp_no
 * @property string $doc_name
 * @property string $doc_pages
 * @property string $flow_fixed
 * @property string $supplier_num
 * @property string $invoice_num
 * @property string $voucher_num
 * @property string $invoice_date
 * @property string $invoice_last_date
 * @property string $invoice_sum
 * @property string $stamp_date
 * @property string $stamp_uid
 * @property string $status_index
 * @property string $order_num
 * @property string $last_acceptor
 * @property string $exchange_rate
 * @property string $invoice_currency
 * @property string $invoice_sum_calc
 * @property string $cash_date
 * @property string $accounting_period
 * @property string $supplier_name
 * @property string $attrib_t1
 * @property string $attrib_t2
 * @property string $attrib_t3
 * @property string $attrib_t4
 * @property string $attrib_t5
 * @property string $attrib_t6
 * @property string $attrib_t7
 * @property string $attrib_n
 * @property string $attrib_n2
 * @property string $attrib_n3
 * @property string $attrib_n4
 * @property string $attrib_d
 * @property string $attrib_d2
 * @property string $attrib_d3
 * @property string $attrib_d4
 * @property string $bff_resource
 * @property string $vat_sum
 * @property string $invoice_serial
 * @property string $invoice_type
 * @property string $prebooked
 * @property string $secondary_status
 * @property string $entry_date
 * @property string $voucher_group
 * @property string $voucher_period
 * @property string $user_serial
 * @property string $net_sum_calc
 * @property string $net_sum
 * @property string $with_comments
 * @property string $external_status
 * @property string $voucher_year
 * @property string $serial_year
 * @property string $gl_date
 * @property string $credit_memo
 * @property string $vat_sum_calc
 * @property string $hold_owner
 * @property string $lock_owner
 * @property string $lock_date
 * @property string $lock_index
 * @property string $contract_num
 * @property string $oneaction
 * @property string $transfer_check
 * @property string $autoflow_status_index
 * @property string $match_status_index
 * @property string $custom_action_status
 * @property string $preprocessing_timestamp
 * @property string $supplier_rep_code
 * @property string $supplier_rep_name
 * @property string $payment_date
 * @property string $delivery_note_number
 * @property string $reference_person
 * @property string $CM_REQUEST
 * @property string $invoice_origin
 * @property string $match_wait_until
 * @property string $invoice_category
 * @property string $parent_invoice_id
 * @property string $MC_MATCH_STATUS_INDEX
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Projet $projet
 * @property AccData[] $accDatas
 * @property ActionLog[] $actionLogs
 * @property DataDoc[] $dataDocs
 * @property DocAttachment[] $docAttachments
 * @property DocFile[] $docFiles
 * @property IpLineItem[] $ipLineItems
 */
class Doc extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['projet_id', 'doc_id', 'scan_date', 'comp_no', 'doc_name', 'doc_pages', 'flow_fixed', 'supplier_num', 'invoice_num', 'voucher_num', 'invoice_date', 'invoice_last_date', 'invoice_sum', 'stamp_date', 'stamp_uid', 'status_index', 'order_num', 'last_acceptor', 'exchange_rate', 'invoice_currency', 'invoice_sum_calc', 'cash_date', 'accounting_period', 'supplier_name', 'attrib_t1', 'attrib_t2', 'attrib_t3', 'attrib_t4', 'attrib_t5', 'attrib_t6', 'attrib_t7', 'attrib_n', 'attrib_n2', 'attrib_n3', 'attrib_n4', 'attrib_d', 'attrib_d2', 'attrib_d3', 'attrib_d4', 'bff_resource', 'vat_sum', 'invoice_serial', 'invoice_type', 'prebooked', 'secondary_status', 'entry_date', 'voucher_group', 'voucher_period', 'user_serial', 'net_sum_calc', 'net_sum', 'with_comments', 'external_status', 'voucher_year', 'serial_year', 'gl_date', 'credit_memo', 'vat_sum_calc', 'hold_owner', 'lock_owner', 'lock_date', 'lock_index', 'contract_num', 'oneaction', 'transfer_check', 'autoflow_status_index', 'match_status_index', 'custom_action_status', 'preprocessing_timestamp', 'supplier_rep_code', 'supplier_rep_name', 'payment_date', 'delivery_note_number', 'reference_person', 'CM_REQUEST', 'invoice_origin', 'match_wait_until', 'invoice_category', 'parent_invoice_id', 'MC_MATCH_STATUS_INDEX', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function projet()
    {
        return $this->belongsTo('App\Models\Projet');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accDatas()
    {
        return $this->hasMany('App\Models\AccData', 'ID_DOC');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actionLogs()
    {
        return $this->hasMany('App\Models\ActionLog', 'ID_DOC');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dataDocs()
    {
        return $this->hasMany('App\Models\DataDoc', 'ID_DOC');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docAttachments()
    {
        return $this->hasMany('App\Models\DocAttachment', 'ID_DOC');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docFiles()
    {
        return $this->hasMany('App\Models\DocFile', 'ID_DOC');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ipLineItems()
    {
        return $this->hasMany('App\Models\IpLineItem', 'ID_DOC');
    }
}
