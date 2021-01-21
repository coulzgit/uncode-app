<?php

namespace App\Imports;

use App\Models\IpLineItemParam;
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


class IpLineItemParamImport implements ToModel, WithStartRow,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable;
    protected $ip_line_item_id;

    public function __construct($ip_line_item_id) {
        $this->ip_line_item_id = $ip_line_item_id;
    }

    public function model(array $row)
    {
        return new IpLineItemParam([
            'LIP_DATA_FIELD'=>$row[0],  
            'LIP_COMP_NO'=>$row[1], 
            'LIP_FIELD_LABEL'=>$row[2], 
            'LIP_DATA_TYPE'=>$row[3],   
            'LIP_SCREEN_POSITION'=>$row[4], 
            'LIP_FIELD_LENGHT'=>$row[5],    
            'LIP_SHOW_IN_CLIENT'=>$row[6],  
            'LIP_ORDER_ROW_DATA_FIELD'=>$row[7],    
            'LIP_ORDER_ROW_DATA_FIELD_LABEL'=>$row[8],  
            'LIP_ASSOSIATION_FIELD'=>$row[9],   
            'LIP_RULES_FIELD'=>$row[10], 
            'lip_col_order'=>$row[11],
            'ip_line_item_id'=>$this->ip_line_item_id   
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
            '0'=>'required|max:191', 
            '1'=>'nullable|max:191', 
            '2'=>'nullable|max:191', 
            '3'=>'nullable|max:191',   
            '4'=>'nullable|max:191', 
            '5'=>'nullable|max:191',    
            '6'=>'nullable|max:191',  
            '7'=>'nullable|max:191',    
            '8'=>'nullable|max:191',  
            '9'=>'nullable|max:100',   
            '10'=>'nullable|max:191', 
            '11'=>'nullable|max:191'
        ];
    }
    
    public function customValidationAttributes()
    {
        return [
            '0'=>'LIP_DATA_FIELD', 
            '1'=>'LIP_COMP_NO', 
            '2'=>'LIP_FIELD_LABEL', 
            '3'=>'LIP_DATA_TYPE',   
            '4'=>'LIP_SCREEN_POSITION', 
            '5'=>'LIP_FIELD_LENGHT',    
            '6'=>'LIP_SHOW_IN_CLIENT',  
            '7'=>'LIP_ORDER_ROW_DATA_FIELD',    
            '8'=>'LIP_ORDER_ROW_DATA_FIELD_LABEL',  
            '9'=>'LIP_ASSOSIATION_FIELD',   
            '10'=>'LIP_RULES_FIELD', 
            '11'=>'lip_col_order'
        ];
    }
}
