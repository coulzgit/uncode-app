<?php

namespace App\Imports;

use App\Models\DataDoc;
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


class DataDocImport implements ToModel , WithStartRow,WithValidation
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
    //ID_DOC  doc_id  data_index  data_value  stamp_date  stamp_uid                        
        return new DataDoc([
            'doc_id'=>$row[0],
            'data_index'=>$row[1],
            'data_value'=>$row[2],
            'stamp_date'=>$row[3],
            'stamp_uid'=>$row[4],
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
            '1'=>'required',
            '2'=>'string|nullable|max:100',
            '3'=>'string|nullable',
            '4'=>'string|nullable|max:60'
        ];
    }

    public function customValidationAttributes()
    {
        return [
            '0'=>'doc_id',
            '1'=>'data_index',
            '2'=>'data_value',
            '3'=>'stamp_date',
            '4'=>'stamp_uid'
        ];
    }

}
