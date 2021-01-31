<?php

namespace App\Imports;

use App\Models\ActionLog;
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


class ActionLogImport implements ToModel , WithStartRow,WithValidation
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
        return new ActionLog([
            'doc_id'=>$row[0],
            'stamp_uid'=>$row[1],
            'stamp_date'=>$row[2],
            'log_index'=>$row[3],
            'log_comment'=>$row[4],
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
            '1'=>'required|max:60',
            '2'=>'required',
            '3'=>'required',
            '4'=>'string|nullable|max:2000'
        ];
    }

    public function customValidationAttributes()
    {
        return [
            '0'=>'doc_id',
            '1'=>'stamp_uid',
            '2'=>'stamp_date',
            '3'=>'log_index',
            '4'=>'log_comment'
        ];
    }

}
