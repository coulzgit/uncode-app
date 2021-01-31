<?php

namespace App\Imports;

use App\Models\IpLineItem;
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


class IpLineItemImport implements ToModel, WithStartRow,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable;
    protected $ID_DOC;
    protected $projet_id;

    public function __construct($projet_id) {
        $this->projet_id = $projet_id;
        $this->ID_DOC = 1;
    }

    public function model(array $row)
    {
        return new IpLineItem([
            'LIT_DOC_ID'=>$row[0],  
            'LIT_ROWID'=>$row[1],   
            'LIT_PRODUCT_CODE'=>$row[2],    
            'LIT_ITEM_DESCRIPTION'=>$row[3],    
            'LIT_ADD_KEY_CODE'=>$row[4],    
            'LIT_DISCOUNT_PER'=>$row[5],    
            'LIT_DISCOUNT_AMOUNT'=>$row[6], 
            'LIT_VAT_PER'=>$row[7], 
            'LIT_VAT_AMOUNT'=>$row[8],  
            'LIT_QUANTITY'=>$row[9],    
            'LIT_QUANTITY_UNIT'=>$row[10],   
            'LIT_NET_SUM'=>$row[11], 
            'LIT_GROSS_SUM'=>$row[12],   
            'LIT_APRICE_NET'=>$row[13],  
            'LIT_APRICE_GROSS'=>$row[14],    
            'LIT_ORDER_NUMBER'=>$row[15],    
            'LIT_ORDER_ROW_NUMBER'=>$row[16],    
            'LIT_INFO_ITEM'=>$row[17],   
            'LIT_STAMP_TIME'=>$row[18],  
            'LIT_CALC_ITEM_TOTAL'=>$row[19], 
            'LIT_MATCH_STATUS_INDEX'=>$row[20],  
            'LIT_T1'=>$row[21],  
            'LIT_T2'=>$row[22],  
            'LIT_T3'=>$row[23],  
            'LIT_T4'=>$row[24],  
            'LIT_T5'=>$row[25],  
            'LIT_T6'=>$row[26],  
            'LIT_T7'=>$row[27],  
            'LIT_T8'=>$row[28],  
            'LIT_T9'=>$row[29],  
            'LIT_T10'=>$row[30], 
            'LIT_T11'=>$row[31], 
            'LIT_T12'=>$row[32], 
            'LIT_T13'=>$row[33], 
            'LIT_T14'=>$row[34], 
            'LIT_T15'=>$row[35], 
            'LIT_T16'=>$row[36], 
            'LIT_T17'=>$row[37], 
            'LIT_T18'=>$row[38], 
            'LIT_T19'=>$row[39], 
            'LIT_T20'=>$row[40], 
            'LIT_T21'=>$row[41], 
            'LIT_T22'=>$row[42], 
            'LIT_T23'=>$row[43], 
            'LIT_T24'=>$row[44], 
            'LIT_T25'=>$row[45], 
            'LIT_T26'=>$row[46], 
            'LIT_T27'=>$row[47], 
            'LIT_T28'=>$row[48], 
            'LIT_T29'=>$row[49], 
            'LIT_T30'=>$row[50], 
            'LIT_T31'=>$row[51], 
            'LIT_T32'=>$row[52], 
            'LIT_T33'=>$row[53], 
            'LIT_T34'=>$row[54], 
            'LIT_T35'=>$row[55], 
            'LIT_T36'=>$row[56], 
            'LIT_T37'=>$row[57], 
            'LIT_T38'=>$row[58], 
            'LIT_T39'=>$row[59], 
            'LIT_T40'=>$row[60], 
            'LIT_T41'=>$row[61], 
            'LIT_T42'=>$row[62], 
            'LIT_T43'=>$row[63], 
            'LIT_T44'=>$row[64], 
            'LIT_T45'=>$row[65], 
            'LIT_T46'=>$row[66], 
            'LIT_T47'=>$row[67], 
            'LIT_T48'=>$row[68], 
            'LIT_T49'=>$row[69], 
            'LIT_T50'=>$row[70], 
            'LIT_N1'=>$row[71],  
            'LIT_N2'=>$row[72],  
            'LIT_N3'=>$row[73],  
            'LIT_N4'=>$row[74],  
            'LIT_N5'=>$row[75],  
            'LIT_N6'=>$row[76],  
            'LIT_N7'=>$row[77],  
            'LIT_N8'=>$row[78],  
            'LIT_N9'=>$row[79],  
            'LIT_N10'=>$row[80], 
            'LIT_D1'=>$row[81],  
            'LIT_D2'=>$row[82],  
            'LIT_D3'=>$row[83],  
            'LIT_D4'=>$row[84],  
            'LIT_D5'=>$row[85],  
            'LIT_D6'=>$row[86],  
            'LIT_D7'=>$row[87],  
            'LIT_D8'=>$row[88],  
            'LIT_D9'=>$row[89],  
            'LIT_D10'=>$row[90],
            'ID_DOC'=>$this->ID_DOC,
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
        return [
            '0'=>'required|max:64',  
            '1'=>'required|max:255',   
            '2'=>'nullable|max:50',    
            '3'=>'nullable|max:255',    
            '4'=>'nullable|max:255',    
            '5'=>'nullable|max:255',    
            '6'=>'nullable|max:100', 
            '7'=>'nullable|max:255', 
            '8'=>'nullable|max:100',  
            '9'=>'nullable|max:100',    
            '10'=>'nullable|max:100',   
            '11'=>'nullable|max:100', 
            '12'=>'nullable|max:100',   
            '13'=>'nullable|max:100',  
            '14'=>'nullable|max:100',    
            '15'=>'nullable|max:100',    
            '16'=>'nullable|max:100',    
            '17'=>'nullable|max:100',   
            '18'=>'nullable|max:100',  
            '19'=>'nullable|max:100', 
            '20'=>'nullable|max:100',  
            '21'=>'nullable|max:100',  
            '22'=>'nullable|max:100',  
            '23'=>'nullable|max:100',  
            '24'=>'nullable|max:100',  
            '25'=>'nullable|max:100',  
            '26'=>'nullable|max:100',  
            '27'=>'nullable|max:100',  
            '28'=>'nullable|max:100',  
            '29'=>'nullable|max:100',  
            '30'=>'nullable|max:100', 
            '31'=>'nullable|max:100', 
            '32'=>'nullable|max:100', 
            '33'=>'nullable|max:100', 
            '34'=>'nullable|max:100', 
            '35'=>'nullable|max:100', 
            '36'=>'nullable|max:100', 
            '37'=>'nullable|max:100', 
            '38'=>'nullable|max:100', 
            '39'=>'nullable|max:100', 
            '40'=>'nullable|max:100', 
            '41'=>'nullable|max:100', 
            '42'=>'nullable|max:100', 
            '43'=>'nullable|max:100', 
            '44'=>'nullable|max:100', 
            '45'=>'nullable|max:100', 
            '46'=>'nullable|max:100', 
            '47'=>'nullable|max:100', 
            '48'=>'nullable|max:100', 
            '49'=>'nullable|max:100', 
            '50'=>'nullable|max:100', 
            '51'=>'nullable|max:100', 
            '52'=>'nullable|max:100', 
            '53'=>'nullable|max:100', 
            '54'=>'nullable|max:100', 
            '55'=>'nullable|max:100', 
            '56'=>'nullable|max:100', 
            '57'=>'nullable|max:100', 
            '58'=>'nullable|max:100', 
            '59'=>'nullable|max:100', 
            '60'=>'nullable|max:100', 
            '61'=>'nullable|max:100', 
            '62'=>'nullable|max:100', 
            '63'=>'nullable|max:100', 
            '64'=>'nullable|max:100', 
            '65'=>'nullable|max:100', 
            '66'=>'nullable|max:100', 
            '67'=>'nullable|max:100', 
            '68'=>'nullable|max:100', 
            '69'=>'nullable|max:100', 
            '70'=>'nullable|max:100', 
            '71'=>'nullable|max:100',  
            '72'=>'nullable|max:100',  
            '73'=>'nullable|max:100',  
            '74'=>'nullable|max:100',  
            '75'=>'nullable|max:100',  
            '76'=>'nullable|max:100',  
            '77'=>'nullable|max:100',  
            '78'=>'nullable|max:100',  
            '79'=>'nullable|max:100',  
            '80'=>'nullable|max:100', 
            '81'=>'nullable|max:255',  
            '82'=>'nullable|max:255',  
            '83'=>'nullable|max:255',  
            '84'=>'nullable|max:255',  
            '85'=>'nullable|max:255',  
            '86'=>'nullable|max:255',  
            '87'=>'nullable|max:255',  
            '88'=>'nullable|max:255',  
            '89'=>'nullable|max:255',  
            '90'=>'nullable|max:255'
        ];
    }
    
    public function customValidationAttributes()
    {
        return [
            '0'=>'LIT_DOC_ID',  
            '1'=>'LIT_ROWID',   
            '2'=>'LIT_PRODUCT_CODE',    
            '3'=>'LIT_ITEM_DESCRIPTION',    
            '4'=>'LIT_ADD_KEY_CODE',    
            '5'=>'LIT_DISCOUNT_PER',    
            '6'=>'LIT_DISCOUNT_AMOUNT', 
            '7'=>'LIT_VAT_PER', 
            '8'=>'LIT_VAT_AMOUNT',  
            '9'=>'LIT_QUANTITY',    
            '10'=>'LIT_QUANTITY_UNIT',   
            '11'=>'LIT_NET_SUM', 
            '12'=>'LIT_GROSS_SUM',   
            '13'=>'LIT_APRICE_NET',  
            '14'=>'LIT_APRICE_GROSS',    
            '15'=>'LIT_ORDER_NUMBER',    
            '16'=>'LIT_ORDER_ROW_NUMBER',    
            '17'=>'LIT_INFO_ITEM',   
            '18'=>'LIT_STAMP_TIME',  
            '19'=>'LIT_CALC_ITEM_TOTAL', 
            '20'=>'LIT_MATCH_STATUS_INDEX',  
            '21'=>'LIT_T1',  
            '22'=>'LIT_T2',  
            '23'=>'LIT_T3',  
            '24'=>'LIT_T4',  
            '25'=>'LIT_T5',  
            '26'=>'LIT_T6',  
            '27'=>'LIT_T7',  
            '28'=>'LIT_T8',  
            '29'=>'LIT_T9',  
            '30'=>'LIT_T10', 
            '31'=>'LIT_T11', 
            '32'=>'LIT_T12', 
            '33'=>'LIT_T13', 
            '34'=>'LIT_T14', 
            '35'=>'LIT_T15', 
            '36'=>'LIT_T16', 
            '37'=>'LIT_T17', 
            '38'=>'LIT_T18', 
            '39'=>'LIT_T19', 
            '40'=>'LIT_T20', 
            '41'=>'LIT_T21', 
            '42'=>'LIT_T22', 
            '43'=>'LIT_T23', 
            '44'=>'LIT_T24', 
            '45'=>'LIT_T25', 
            '46'=>'LIT_T26', 
            '47'=>'LIT_T27', 
            '48'=>'LIT_T28', 
            '49'=>'LIT_T29', 
            '50'=>'LIT_T30', 
            '51'=>'LIT_T31', 
            '52'=>'LIT_T32', 
            '53'=>'LIT_T33', 
            '54'=>'LIT_T34', 
            '55'=>'LIT_T35', 
            '56'=>'LIT_T36', 
            '57'=>'LIT_T37', 
            '58'=>'LIT_T38', 
            '59'=>'LIT_T39', 
            '60'=>'LIT_T40', 
            '61'=>'LIT_T41', 
            '62'=>'LIT_T42', 
            '63'=>'LIT_T43', 
            '64'=>'LIT_T44', 
            '65'=>'LIT_T45', 
            '66'=>'LIT_T46', 
            '67'=>'LIT_T47', 
            '68'=>'LIT_T48', 
            '69'=>'LIT_T49', 
            '70'=>'LIT_T50', 
            '71'=>'LIT_N1',  
            '72'=>'LIT_N2',  
            '73'=>'LIT_N3',  
            '74'=>'LIT_N4',  
            '75'=>'LIT_N5',  
            '76'=>'LIT_N6',  
            '77'=>'LIT_N7',  
            '78'=>'LIT_N8',  
            '79'=>'LIT_N9',  
            '80'=>'LIT_N10', 
            '81'=>'LIT_D1',  
            '82'=>'LIT_D2',  
            '83'=>'LIT_D3',  
            '84'=>'LIT_D4',  
            '85'=>'LIT_D5',  
            '86'=>'LIT_D6',  
            '87'=>'LIT_D7',  
            '88'=>'LIT_D8',  
            '89'=>'LIT_D9',  
            '90'=>'LIT_D10'
        ];
    }
}
