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


class DocImport implements ToModel, WithStartRow,WithValidation
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
        return new Doc([
            'doc_id'=>$row[0],
            'scan_date'=>$row[1],
            'comp_no'=>$row[2],
            'doc_name'=>$row[3],
            'doc_pages'=>$row[4],
            'flow_fixed'=>$row[5],
            'supplier_num'=>$row[6],
            'invoice_num'=>$row[7],
            'voucher_num'=>$row[8],
            'invoice_date'=>$row[9],
            'invoice_last_date'=>$row[10],
            'invoice_sum'=>$row[11],
            'stamp_date'=>$row[12],
            'stamp_uid'=>$row[13],
            'status_index'=>$row[14],
            'order_num'=>$row[15],
            'last_acceptor'=>$row[16],
            'exchange_rate'=>$row[17],
            'invoice_currency'=>$row[18],
            'invoice_sum_calc'=>$row[19],
            'cash_date'=>$row[20],
            'accounting_period'=>$row[21],
            'supplier_name'=>$row[22],
            'attrib_t1'=>$row[23],
            'attrib_t2'=>$row[24],
            'attrib_t3'=>$row[25],
            'attrib_t4'=>$row[26],
            'attrib_t5'=>$row[27],
            'attrib_t6'=>$row[28],
            'attrib_t7'=>$row[29],
            'attrib_n'=>$row[30],
            'attrib_n2'=>$row[31],
            'attrib_n3'=>$row[32],
            'attrib_n4'=>$row[33],
            'attrib_d'=>$row[34],
            'attrib_d2'=>$row[35],
            'attrib_d3'=>$row[36],
            'attrib_d4'=>$row[37],
            'bff_resource'=>$row[38],
            'vat_sum'=>$row[39],
            'invoice_serial'=>$row[40],
            'invoice_type'=>$row[41],
            'prebooked'=>$row[42],
            'secondary_status'=>$row[43],
            'entry_date'=>$row[44],
            'voucher_group'=>$row[45],
            'voucher_period'=>$row[46],
            'user_serial'=>$row[47],
            'net_sum_calc'=>$row[48],
            'net_sum'=>$row[49],
            'with_comments'=>$row[50],
            'external_status'=>$row[51],
            'voucher_year'=>$row[52],
            'serial_year'=>$row[53],
            'gl_date'=>$row[54],
            'credit_memo'=>$row[55],
            'vat_sum_calc'=>$row[56],
            'hold_owner'=>$row[57],
            'lock_owner'=>$row[58],
            'lock_date'=>$row[59],
            'lock_index'=>$row[60],
            'contract_num'=>$row[61],
            'oneaction'=>$row[62],
            'transfer_check'=>$row[63],
            'autoflow_status_index'=>$row[64],
            'match_status_index'=>$row[65],
            'custom_action_status'=>$row[66],
            'preprocessing_timestamp'=>$row[67],
            'supplier_rep_code'=>$row[68],
            'supplier_rep_name'=>$row[69],
            'payment_date'=>$row[70],
            'delivery_note_number'=>$row[71],
            'reference_person'=>$row[72],
            'CM_REQUEST'=>$row[73],
            'invoice_origin'=>$row[74],
            'match_wait_until'=>$row[75],
            'invoice_category'=>$row[76],
            'parent_invoice_id'=>$row[77],
            'MC_MATCH_STATUS_INDEX'=>$row[78],
            'projet_id'=>$this->projet_id
        ]);
    }
   
    /**
     * @return int
     */
    public function startRow(): int
    {

        return 2;
    }

    public function rules(): array
    {
        Validator::extend('without_spaces', function($attr, $value){
            return preg_match('/^\S*$/u', $value);
        });
        return [
            '0'=>'required|max:64', 
            '1'=>'string|nullable',
            '2'=>'max:20',
            '3'=>'max:60',
            '4'=>'integer|nullable',
            '5'=>'integer|nullable',
            '6'=>'max:100',
            '7'=>'max:30',
            '8'=>'max:30',
            '9'=>'string|nullable',
            '10'=>'string|nullable',
            '11'=>'max:256',
            '12'=>'string|nullable',
            '13'=>'max:60',
            '14'=>'string|nullable',
            '15'=>'max:50',
            '16'=>'max:60',
            '17'=>'max:256',
            '18'=>'max:20',
            '19'=>'max:256',
            '20'=>'string|nullable',
            '21'=>'max:15',
            '22'=>'max:70',
            '23'=>'max:50',
            '24'=>'max:50',
            '25'=>'max:50',
            '26'=>'max:50',
            '27'=>'max:50',
            '28'=>'max:50',
            '29'=>'max:50',
            '30'=>'max:100',
            '31'=>'max:100',
            '32'=>'max:100',
            '33'=>'max:100',
            '34'=>'string|nullable',
            '35'=>'string|nullable',
            '36'=>'string|nullable',
            '37'=>'string|nullable',
            '38'=>'max:80',
            '39'=>'max:100',
            '40'=>'max:100',
            '41'=>'max:5',
            '42'=>'string|nullable',
            '43'=>'string|nullable',
            '44'=>'string|nullable',
            '45'=>'max:20',
            '46'=>'string|max:4|nullable',
            '47'=>'string|nullable',
            '48'=>'max:100',
            '49'=>'max:100',
            '50'=>'string|nullable',
            '51'=>'string|nullable',
            '52'=>'string|nullable|max:4|alpha_dash',
            '53'=>'string|nullable',
            '54'=>'string|nullable',
            '55'=>'max:30',
            '56'=>'max:100',
            '57'=>'max:60',
            '58'=>'max:60',
            '59'=>'string|nullable',
            '60'=>'string|nullable',
            '61'=>'max:50',
            '62'=>'string|nullable',
            '63'=>'string|nullable',
            '64'=>'string|nullable',
            '65'=>'string|nullable',
            '66'=>'string|nullable',
            '67'=>'string|nullable',
            '68'=>'max:60',
            '69'=>'max:200',
            '70'=>'string|nullable',
            '71'=>'max:100',
            '72'=>'max:60',
            '73'=>'string|nullable',
            '74'=>'string|nullable',
            '75'=>'string|nullable',
            '76'=>'max:50',
            '77'=>'max:64',
            '78'=>'string|nullable'
        ];
    }
    public function customValidationAttributes()
    {
        return [
            '0'=>'doc_id',
            '1'=>'scan_date',
            '2'=>'comp_no',
            '3'=>'doc_name',
            '4'=>'doc_pages',
            '5'=>'flow_fixed',
            '6'=>'supplier_num',
            '7'=>'invoice_num',
            '8'=>'voucher_num',
            '9'=>'invoice_date',
            '10'=>'invoice_last_date',
            '11'=>'invoice_sum',
            '12'=>'stamp_date',
            '13'=>'stamp_uid',
            '14'=>'status_index',
            '15'=>'order_num',
            '16'=>'last_acceptor',
            '17'=>'exchange_rate',
            '18'=>'invoice_currency',
            '19'=>'invoice_sum_calc',
            '20'=>'cash_date',
            '21'=>'accounting_period',
            '22'=>'supplier_name',
            '23'=>'attrib_t1',
            '24'=>'attrib_t2',
            '25'=>'attrib_t3',
            '26'=>'attrib_t4',
            '27'=>'attrib_t5',
            '28'=>'attrib_t6',
            '29'=>'attrib_t7',
            '30'=>'attrib_n',
            '31'=>'attrib_n2',
            '32'=>'attrib_n3',
            '33'=>'attrib_n4',
            '34'=>'attrib_d',
            '35'=>'attrib_d2',
            '36'=>'attrib_d3',
            '37'=>'attrib_d4',
            '38'=>'bff_resource',
            '39'=>'vat_sum',
            '40'=>'invoice_serial',
            '41'=>'invoice_type',
            '42'=>'prebooked',
            '43'=>'secondary_status',
            '44'=>'entry_date',
            '45'=>'voucher_group',
            '46'=>'voucher_period',
            '47'=>'user_serial',
            '48'=>'net_sum_calc',
            '49'=>'net_sum',
            '50'=>'with_comments',
            '51'=>'external_status',
            '52'=>'voucher_year',
            '53'=>'serial_year',
            '54'=>'gl_date',
            '55'=>'credit_memo',
            '56'=>'vat_sum_calc',
            '57'=>'hold_owner',
            '58'=>'lock_owner',
            '59'=>'lock_date',
            '60'=>'lock_index',
            '61'=>'contract_num',
            '62'=>'oneaction',
            '63'=>'transfer_check',
            '64'=>'autoflow_status_index',
            '65'=>'match_status_index',
            '66'=>'custom_action_status',
            '67'=>'preprocessing_timestamp',
            '68'=>'supplier_rep_code',
            '69'=>'supplier_rep_name',
            '70'=>'payment_date',
            '71'=>'delivery_note_number',
            '72'=>'reference_person',
            '73'=>'CM_REQUEST',
            '74'=>'invoice_origin',
            '75'=>'match_wait_until',
            '76'=>'invoice_category',
            '77'=>'parent_invoice_id',
            '78'=>'MC_MATCH_STATUS_INDEX'

        ];
    }
}
