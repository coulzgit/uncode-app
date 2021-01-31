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
        $row['projet_id']=$this->projet_id;
        return new Doc($row);   
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
