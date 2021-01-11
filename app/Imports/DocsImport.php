<?php

namespace App\Imports;

use App\Models\Doc;
use Maatwebsite\Excel\Concerns\ToModel;

class DocsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Doc([
                    'scan_date'     => $row[0],
                    'comp_no'       => $row[1],
                    'doc_name'      => $row[2],
                    'doc_pages'     => $row[3],
                    'flow_fixed'    => $row[4],
                    'supplier_num'  => $row[5],
                    'invoice_num'   => $row[6],
                    'voucher_num'   => $row[7],
                    'invoice_date'  => $row[8],
                    'invoice_last_date'     => $row[9],
                    'invoice_sum'           => $row[10],
                    'stamp_date'            => $row[11],
                    'stamp_uid'             => $row[12],
                    'status_index'          => $row[13],
                    'order_num'             => $row[14],
                    'last_acceptor'         => $row[16],
                    'exchange_rate'         => $row[17],
                    'invoice_currency'      => $row[18],
                    'invoice_sum_calc'      => $row[19],
                    'cash_date'             => $row[20],
                    'accounting_period'     => $row[21],
                    'supplier_name'         => $row[22],
                    'attrib_t1'             => $row[23],
                    'attrib_t2'             => $row[24],
                    'attrib_t3'             => $row[25],
                    'attrib_t4'             => $row[26],
                    'attrib_t5'             => $row[27],
                    'attrib_t6]'            => $row[28],
                    'attrib_t7'             => $row[29],
                    'attrib_n'              => $row[30],
                    'attrib_n2'             => $row[31],
                    'attrib_n3'             => $row[32],
                    'attrib_n4'             => $row[33],
                    'attrib_d'              => $row[34],
                    'attrib_d2'             => $row[35],
                    'attrib_d3'             => $row[36],
                    'attrib_d4'             => $row[37],
                    'bff_resource'          => $row[38],
                    'vat_sum'               => $row[39],
                    'invoice_serial'        => $row[40],
                    'invoice_type'          => $row[41],
                    'prebooked'             => $row[42],
                    'secondary_status'      => $row[43],
                    'entry_date'            => $row[44],
                    'voucher_group'        => $row[45],
                    'voucher_period'        => $row[46],
                    'user_serial'           => $row[47],
                    'net_sum_calc'          => $row[48],
                    'net_sum'               => $row[49],
                    'with_comments'         => $row[50],
                    'external_status'       => $row[51],
                    'voucher_year'          => $row[52],
                    'serial_year'           => $row[53],
                    'gl_date'               => $row[54],
                    'credit_memo'           => $row[55],
                    'vat_sum_calc'          => $row[56],
                    'hold_owner'            => $row[57],
                    'lock_owner'            => $row[58],
                    'lock_date'             => $row[59],
                    'lock_index'            => $row[60],
                    'contract_num'          => $row[61],
                    'oneaction'             => $row[62],
                    'transfer_check'        => $row[63],
                    'autoflow_status_index'  => $row[64],
                    'match_status_index'    => $row[65],
                    'custom_action_status'  => $row[66],
                    'preprocessing_timestamp'       => $row[67],
                    'supplier_rep_code'             => $row[68],
                    'supplier_rep_name'             => $row[69],
                    'payment_date'                  => $row[70],
                    'delivery_note_number'          => $row[71],
                    'reference_person'              => $row[72],
                    'CM_REQUEST'                    => $row[73],
                    'invoice_origin'                => $row[74],
                    'match_wait_until'              => $row[75],
                    'invoice_category'              => $row[76],
                    'parent_invoice_id'             => $row[77],
                    'MC_MATCH_STATUS_INDEX'         => $row[78],
                    // 'account_id'                    =>  $row[79],
                    // 'updated_at'         => $row[79]



        ]);
    }
}
