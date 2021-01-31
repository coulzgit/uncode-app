<?php

namespace App\Imports;

use App\Models\DocDataName;
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


class DocDataNameImport implements ToModel , WithStartRow,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable;
    protected $doc_data_id;
    protected $projet_id;

    public function __construct($projet_id) {
        $this->projet_id = $projet_id;
        $this->doc_data_id = 1;
    }
    public function model(array $row)
    {               
        return new DocDataName([
            'data_index'=>$row[0],  
            'data_name'=>$row[1],   
            'default_value'=>$row[2],   
            'data_type'=>$row[3],  
            'list_index'=>$row[4],  
            'order_index'=>$row[5], 
            'lock_field'=>$row[6],  
            'special_field'=>$row[7],   
            'check_type'=>$row[8],  
            'check_value_list'=>$row[9],    
            'check_bind_index1'=>$row[10],   
            'check_bind_index2'=>$row[11],   
            'check_operator1'=>$row[12], 
            'check_operator2'=>$row[13], 
            'client_field'=>$row[14],    
            'must_field'=>$row[15],  
            'cell_format'=>$row[16], 
            'max_length'=>$row[17],  
            'min_length'=>$row[18],  
            'comp_no'=>$row[19], 
            'client_updateable'=>$row[20],   
            'fs_field'=>$row[21],    
            'fs_must_field'=>$row[22],   
            'fs_order_index'=>$row[23],  
            'fs_train_order_index'=>$row[24],    
            'fs_length'=>$row[25],   
            'fs_trainable'=>$row[26],    
            'fs_alignment'=>$row[27],    
            'fs_default_value'=>$row[28],    
            'fs_data_type'=>$row[29],    
            'fs_lock_field'=>$row[30],   
            'use_digitgrouping'=>$row[31],   
            'num_digits'=>$row[32],  
            'data_width'=>$row[33],  
            'fs_enablebatchlocking'=>$row[34],
            'doc_data_id'=>$this->doc_data_id,
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
            '0'=>'required',
            '1'=>'string|nullable|max:50',
            '2'=>'string|nullable|max:50',
            '3'=>'string|nullable|max:1',
            '4'=>'string|nullable',
            '5'=>'string|nullable',
            '6'=>'string|nullable',
            '7'=>'string|nullable|max:20',
            '8'=>'string|nullable|max:10',
            '9'=>'string|nullable|max:250',
            '10'=>'string|nullable',
            '11'=>'string|nullable',
            '12'=>'string|nullable|max:2',
            '13'=>'string|nullable|max:2',
            '14'=>'string|nullable',
            '15'=>'string|nullable',
            '16'=>'string|nullable|max:25',
            '17'=>'string|nullable',
            '18'=>'string|nullable',
            '19'=>'string|nullable|max:20',
            '20'=>'required',
            '21'=>'required',
            '22'=>'required',
            '23'=>'string|nullable',
            '24'=>'string|nullable',
            '25'=>'string|nullable',
            '26'=>'string|nullable',
            '27'=>'string|nullable',
            '28'=>'string|nullable|max:50',
            '29'=>'string|nullable|max:10',
            '30'=>'string|nullable',
            '31'=>'string|nullable',
            '32'=>'string|nullable',
            '33'=>'string|nullable',
            '34'=>'string|nullable'
        ];
    }

            


    public function customValidationAttributes()
    {
        return [
            '0'=>'data_index',  
            '1'=>'data_name',   
            '2'=>'default_value',   
            '3'=>'data_type',  
            '4'=>'list_index',  
            '5'=>'order_index', 
            '6'=>'lock_field',  
            '7'=>'special_field',   
            '8'=>'check_type',  
            '9'=>'check_value_list',    
            '10'=>'check_bind_index1',   
            '11'=>'check_bind_index2',   
            '12'=>'check_operator1', 
            '13'=>'check_operator2', 
            '14'=>'client_field',    
            '15'=>'must_field',  
            '16'=>'cell_format', 
            '17'=>'max_length',  
            '18'=>'min_length',  
            '19'=>'comp_no', 
            '20'=>'client_updateable',   
            '21'=>'fs_field',    
            '22'=>'fs_must_field',   
            '23'=>'fs_order_index',  
            '24'=>'fs_train_order_index',    
            '25'=>'fs_length',   
            '26'=>'fs_trainable',    
            '27'=>'fs_alignment',    
            '28'=>'fs_default_value',    
            '29'=>'fs_data_type',    
            '30'=>'fs_lock_field',   
            '31'=>'use_digitgrouping',   
            '32'=>'num_digits',  
            '33'=>'data_width',  
            '34'=>'fs_enablebatchlocking'
        ];
    }

}

