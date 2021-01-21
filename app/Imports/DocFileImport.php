<?php

namespace App\Imports;

use App\Models\DocFile;
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


class DocFileImport implements ToModel, WithStartRow,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable;
    protected $ID_DOC;

    public function __construct($ID_DOC) {
        $this->ID_DOC = $ID_DOC;
    }

    public function model(array $row)
    {
        
        return new DocFile([
            'doc_id'=>$row[0],  
            'doc_page'=>$row[1],    
            'doc_file'=>$row[2],    
            'file_format'=>$row[3], 
            'file_resource'=>$row[4],   
            'user_org_code'=>$row[5],   
            'file_encrypted'=>$row[6],  
            'external_ref'=>$row[7],
            'ID_DOC'=>$this->ID_DOC
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
            '1'=>'required|max:191',    
            '2'=>'required|max:256',    
            '3'=>'required|max:4', 
            '4'=>'required|max:100',   
            '5'=>'required|max:10',   
            '6'=>'nullable|max:191',  
            '7'=>'nullable|max:60'
        ];
    }
    
    public function customValidationAttributes()
    {
        return [
            '0'=>'doc_id',  
            '1'=>'doc_page',    
            '2'=>'doc_file',    
            '3'=>'file_format', 
            '4'=>'file_resource',   
            '5'=>'user_org_code',   
            '6'=>'file_encrypted',  
            '7'=>'external_ref'
        ];
    }
}
