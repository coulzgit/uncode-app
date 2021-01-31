<?php

namespace App\Imports;

use App\Models\AccDataName;
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


class AccDataNameImport implements ToModel , WithStartRow,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable;
    protected $acc_data_id;
    protected $projet_id;

    public function __construct($projet_id) {
        $this->projet_id = $projet_id;
        $this->acc_data_id = 1;
    }
    public function model(array $row)
    {            
    

        return new AccDataName([
            'data_index'=>$row[0],  
            'data_field'=>$row[1],  
            'data_name'=>$row[2],   
            'default_value'=>$row[3],   
            'data_type'=>$row[4],   
            'data_formula'=>$row[5],    
            'data_background'=>$row[6], 
            'data_format'=>$row[7], 
            'listfile_index'=>$row[8],  
            'lock_field'=>$row[9],  
            'special_field'=>$row[10],   
            'expand_index'=>$row[11],    
            'dont_warn'=>$row[12],   
            'comp_bind_level'=>$row[13], 
            'must_field'=>$row[14],  
            'max_length'=>$row[15],  
            'min_length'=>$row[16],  
            'layer'=>$row[17],   
            'comp_no'=>$row[18], 
            'use_digitgrouping'=>$row[19],   
            'num_digits'=>$row[20],  
            'data_width'=>$row[21],
            'ID_DOC'=>$this->acc_data_id,
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
            '0'=>'required|integer',  
            '1'=>'string|nullable|max:50',  
            '2'=>'string|nullable|max:50',   
            '3'=>'string|nullable|max:50',   
            '4'=>'string|nullable|max:1',   
            '5'=>'string|nullable|max:2000',    
            '6'=>'string|nullable|max:20', 
            '7'=>'string|nullable|max:20', 
            '8'=>'integer|nullable',  
            '9'=>'integer|nullable',  
            '10'=>'string|nullable|max:10',   
            '11'=>'integer|nullable',    
            '12'=>'integer|nullable',   
            '13'=>'nullable', 
            '14'=>'integer|nullable',  
            '15'=>'integer|nullable',  
            '16'=>'integer|nullable',  
            '17'=>'integer|nullable',   
            '18'=>'string|nullable|max:20', 
            '19'=>'integer|nullable',   
            '20'=>'integer|nullable',  
            '21'=>'integer|nullable'
        ];
    }

    public  function customValidationAttributes()
    {
        return [
            '0'=>'data_index',  
            '1'=>'data_field',  
            '2'=>'data_name',   
            '3'=>'default_value',   
            '4'=>'data_type',   
            '5'=>'data_formula',    
            '6'=>'data_background', 
            '7'=>'data_format', 
            '8'=>'listfile_index',  
            '9'=>'lock_field',  
            '10'=>'special_field',   
            '11'=>'expand_index',    
            '12'=>'dont_warn',   
            '13'=>'comp_bind_level', 
            '14'=>'must_field',  
            '15'=>'max_length',  
            '16'=>'min_length',  
            '17'=>'layer',   
            '18'=>'comp_no', 
            '19'=>'use_digitgrouping',   
            '20'=>'num_digits',  
            '21'=>'data_width'
        ];
    }


}

