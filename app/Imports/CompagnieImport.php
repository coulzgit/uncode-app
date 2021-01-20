<?php

namespace App\Imports;

use App\Models\Compagnie;
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


class CompagnieImport implements ToModel , WithStartRow,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable;
    public function __construct() {
    }
    public function model(array $row)
    {  
                                                                            
        return new Compagnie([
          'comp_index'=>$row[0],    
          'comp_no'=>$row[1], 
          'comp_name'=>$row[2],   
          'comp_parent'=>$row[3], 
          'comp_struct1'=>$row[4],    
          'comp_struct2'=>$row[5],    
          'comp_struct3'=>$row[6],    
          'comp_struct4'=>$row[7],    
          'comp_struct5'=>$row[8],    
          'comp_struct6'=>$row[9],    
          'comp_struct7'=>$row[10],    
          'comp_struct8'=>$row[11],    
          'comp_struct9'=>$row[12],    
          'comp_struct10'=>$row[13],   
          'comp_date1'=>$row[14], 
          'comp_date2'=>$row[15],  
          'comp_date3'=>$row[16],  
          'valid_start'=>$row[17],   
          'valid_end'=>$row[18],   
          'edipartnerid'=>$row[19]  
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
            '0'=>'string|nullable',
            '1'=>'required',
            '2'=>'string|nullable',
            '3'=>'string|nullable',
            '4'=>'string|nullable',
            '5'=>'string|nullable',
            '6'=>'string|nullable',
            '7'=>'string|nullable',
            '8'=>'string|nullable',
            '9'=>'string|nullable',
            '10'=>'string|nullable',
            '11'=>'string|nullable',
            '12'=>'string|nullable',
            '13'=>'string|nullable',
            '14'=>'string|nullable',
            '15'=>'string|nullable',
            '16'=>'string|nullable',
            '17'=>'nullable',
            '18'=>'string|nullable',
            '19'=>'string|nullable'
        ];
    }

    public function customValidationAttributes()
    {
        return [
          '0'=>'comp_index',    
          '1'=>'comp_no', 
          '2'=>'comp_name',   
          '3'=>'comp_parent', 
          '4'=>'comp_struct1',    
          '5'=>'comp_struct2',    
          '6'=>'comp_struct3',    
          '7'=>'comp_struct4',    
          '8'=>'comp_struct5',    
          '9'=>'comp_struct6',    
          '10'=>'comp_struct7',    
          '11'=>'comp_struct8',    
          '12'=>'comp_struct9',    
          '13'=>'comp_struct10',   
          '14'=>'comp_date1', 
          '15'=>'comp_date2',  
          '16'=>'comp_date3',  
          '17'=>'valid_start', 
          '18'=>'valid_end',   
          '19'=>'edipartnerid'  
        ];
    }

}
