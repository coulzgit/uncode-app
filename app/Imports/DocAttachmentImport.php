<?php

namespace App\Imports;

use App\Models\DocAttachment;
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


class DocAttachmentImport implements ToModel , WithStartRow,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable;
    protected $ID_DOC;
    

    public function __construct($ID_DOC) {
        $this->ID_DOC=$ID_DOC;
    }
    public function model(array $row)
    {                                                 
        return new DocAttachment([
            'doc_id'=>$row[0],  
            'attachment_name'=>$row[1], 
            'attachment_file'=>$row[2], 
            'attachment_owner'=>$row[3],    
            'attachment_resource'=>(string)$row[4], 
            'user_org_code'=>$row[5],   
            'resource_id'=>$row[6], 
            'attachment_encrypted'=>$row[7],    
            'original_file_name'=>$row[8],
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
            '1'=>'string|nullable|max:256',
            '2'=>'required|max:250',
            '3'=>'string|nullable|max:60',
            '4'=>'string|nullable|max:250',
            '5'=>'string|nullable|max:20',
            '6'=>'string|nullable|max:50',
            '7'=>'nullable',
            '8'=>'string|nullable|max:256'
        ];
    }
    public function customValidationAttributes()
    {
        return [
            '0'=>'doc_id',
            '1'=>'attachment_name',
            '2'=>'attachment_file',
            '3'=>'attachment_owner',
            '4'=>'attachment_resource',
            '5'=>'user_org_code',
            '6'=>'resource_id',
            '7'=>'attachment_encrypted',
            '8'=>'original_file_name'
        ];
    }

}
