<?php

namespace App\Imports;

use App\Models\Doc;
use Maatwebsite\Excel\Concerns\ToModel;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsFailures;


use Log;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;


class DocImport implements ToModel, WithHeadingRow,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable;
    protected $projet_id;

    public function __construct($projet_id) {
        $this->projet_id = $projet_id;
    }
    
    public function model(array $row)
    {
        //projet_id
        return new Doc($row);
        // return new Doc([
        //     'doc_id'=>$row['doc_id'],
        //     'scan_date'=>$row['scan_date'],
        //     'comp_no'=>$row['comp_no'],
        //     'doc_name'=>$row['doc_name'],
        //     'doc_pages'=>$row['doc_pages'],
        //     'flow_fixed'=>$row['flow_fixed'],
        //     'supplier_num'=>$row['supplier_num'],
        //     'invoice_num'=>$row['invoice_num'],
        //     'voucher_num'=>$row['voucher_num'],
        //     'invoice_date'=>$row['invoice_date'],
        //     'invoice_last_date'=>$row['invoice_last_date'],
        //     'invoice_sum'=>$row['invoice_sum'],
        //     'stamp_date'=>$row['stamp_date'],
        //     'stamp_uid'=>$row['stamp_uid'],
        //     'status_index'=>$row['status_index'],
        //     'order_num'=>$row['order_num'],
        //     'last_acceptor'=>$row['last_acceptor'],
        //     'exchange_rate'=>$row['exchange_rate'],
        //     'invoice_currency'=>$row['invoice_currency'],
        //     'invoice_sum_calc'=>$row['invoice_sum_calc'],
        //     'cash_date'=>$row['cash_date'],
        //     'accounting_period'=>$row['accounting_period'],
        //     'supplier_name'=>$row['supplier_name'],
        //     'attrib_t1'=>$row['attrib_t1'],
        //     'attrib_t2'=>$row['attrib_t2'],
        //     'attrib_t3'=>$row['attrib_t3'],
        //     'attrib_t4'=>$row['attrib_t4'],
        //     'attrib_t5'=>$row['attrib_t5'],
        //     'attrib_t6'=>$row['attrib_t6'],
        //     'attrib_t7'=>$row['attrib_t7'],
        //     'attrib_n'=>$row['attrib_n'],
        //     'attrib_n2'=>$row['attrib_n2'],
        //     'attrib_n3'=>$row['attrib_n3'],
        //     'attrib_n4'=>$row['attrib_n4'],
        //     'attrib_d'=>$row['attrib_d'],
        //     'attrib_d2'=>$row['attrib_d2'],
        //     'attrib_d3'=>$row['attrib_d3'],
        //     'attrib_d4'=>$row['attrib_d4'],
        //     'bff_resource'=>$row['bff_resource'],
        //     'vat_sum'=>$row['vat_sum'],
        //     'invoice_serial'=>$row['invoice_serial'],
        //     'invoice_type'=>$row['invoice_type'],
        //     'prebooked'=>$row['prebooked'],
        //     'secondary_status'=>$row['secondary_status'],
        //     'entry_date'=>$row['entry_date'],
        //     'voucher_group'=>$row['voucher_group'],
        //     'voucher_period'=>$row['voucher_period'],
        //     'user_serial'=>$row['user_serial'],
        //     'net_sum_calc'=>$row['net_sum_calc'],
        //     'net_sum'=>$row['net_sum'],
        //     'with_comments'=>$row['with_comments'],
        //     'external_status'=>$row['external_status'],
        //     'voucher_year'=>$row['voucher_year'],
        //     'serial_year'=>$row['serial_year'],
        //     'gl_date'=>$row['gl_date'],
        //     'credit_memo'=>$row['credit_memo'],
        //     'vat_sum_calc'=>$row['vat_sum_calc'],
        //     'hold_owner'=>$row['hold_owner'],
        //     'lock_owner'=>$row['lock_owner'],
        //     'lock_date'=>$row['lock_date'],
        //     'lock_index'=>$row['lock_index'],
        //     'contract_num'=>$row['contract_num'],
        //     'oneaction'=>$row['oneaction'],
        //     'transfer_check'=>$row['transfer_check'],
        //     'autoflow_status_index'=>$row['autoflow_status_index'],
        //     'match_status_index'=>$row['match_status_index'],
        //     'custom_action_status'=>$row['custom_action_status'],
        //     'preprocessing_timestamp'=>$row['preprocessing_timestamp'],
        //     'supplier_rep_code'=>$row['supplier_rep_code'],
        //     'supplier_rep_name'=>$row['supplier_rep_name'],
        //     'payment_date'=>$row['payment_date'],
        //     'delivery_note_number'=>$row['delivery_note_number'],
        //     'reference_person'=>$row['reference_person'],
        //     'CM_REQUEST'=>$row['cm_request'],
        //     'invoice_origin'=>$row['invoice_origin'],
        //     'match_wait_until'=>$row['match_wait_until'],
        //     'invoice_category'=>$row['invoice_category'],
        //     'parent_invoice_id'=>$row['parent_invoice_id'],
        //     'MC_MATCH_STATUS_INDEX'=>$row['mc_match_status_index'],
        //     'projet_id'=>$this->projet_id
        // ]);
    }

    public function rules(): array
    {
        return [
            'doc_id'=>'required|max:64', 
            'scan_date'=>'string|nullable',
            'comp_no'=>'max:20',
            'doc_name'=>'max:60',
            'doc_pages'=>'integer|nullable',
            'flow_fixed'=>'integer|nullable',
            'supplier_num'=>'max:100',
            'invoice_num'=>'max:30',
            'voucher_num'=>'max:30',
            'invoice_date'=>'string|nullable',
            'invoice_last_date'=>'string|nullable',
            'invoice_sum'=>'max:256',
            'stamp_date'=>'string|nullable',
            'stamp_uid'=>'max:60',
            'status_index'=>'string|nullable',
            'order_num'=>'max:50',
            'last_acceptor'=>'max:60',
            'exchange_rate'=>'max:256',
            'invoice_currency'=>'max:20',
            'invoice_sum_calc'=>'max:256',
            'cash_date'=>'string|nullable',
            'accounting_period'=>'max:15',
            'supplier_name'=>'max:70',
            'attrib_t1'=>'max:50',
            'attrib_t2'=>'max:50',
            'attrib_t3'=>'max:50',
            'attrib_t4'=>'max:50',
            'attrib_t5'=>'max:50',
            'attrib_t6'=>'max:50',
            'attrib_t7'=>'max:50',
            'attrib_n'=>'max:100',
            'attrib_n2'=>'max:100',
            'attrib_n3'=>'max:100',
            'attrib_n4'=>'max:100',
            'attrib_d'=>'string|nullable',
            'attrib_d2'=>'string|nullable',
            'attrib_d3'=>'string|nullable',
            'attrib_d4'=>'string|nullable',
            'bff_resource'=>'max:80',
            'vat_sum'=>'max:100',
            'invoice_serial'=>'max:100',
            'invoice_type'=>'max:5',
            'prebooked'=>'string|nullable',
            'secondary_status'=>'string|nullable',
            'entry_date'=>'string|nullable',
            'voucher_group'=>'max:20',
            'voucher_period'=>'string|max:4|nullable',
            'user_serial'=>'string|nullable',
            'net_sum_calc'=>'max:100',
            'net_sum'=>'max:100',
            'with_comments'=>'string|nullable',
            'external_status'=>'string|nullable',
            'voucher_year'=>'string|nullable|max:4|alpha_dash',
            'serial_year'=>'string|nullable',
            'gl_date'=>'string|nullable',
            'credit_memo'=>'max:30',
            'vat_sum_calc'=>'max:100',
            'hold_owner'=>'max:60',
            'lock_owner'=>'max:60',
            'lock_date'=>'string|nullable',
            'lock_index'=>'string|nullable',
            'contract_num'=>'max:50',
            'oneaction'=>'string|nullable',
            'transfer_check'=>'string|nullable',
            'autoflow_status_index'=>'string|nullable',
            'match_status_index'=>'string|nullable',
            'custom_action_status'=>'string|nullable',
            'preprocessing_timestamp'=>'string|nullable',
            'supplier_rep_code'=>'max:60',
            'supplier_rep_name'=>'max:200',
            'payment_date'=>'string|nullable',
            'delivery_note_number'=>'max:100',
            'reference_person'=>'max:60',
            'cm_request'=>'string|nullable',
            'invoice_origin'=>'string|nullable',
            'match_wait_until'=>'string|nullable',
            'invoice_category'=>'max:50',
            'parent_invoice_id'=>'max:64',
            'mc_match_status_index'=>'string|nullable'
        ];
    }
    
}
