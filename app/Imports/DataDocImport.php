<?php

namespace App\Imports;

use App\Models\DataDoc;
use App\MyClasses\LoadingManager;
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
    protected $projet_id;

    public function __construct($projet_id) {
        $this->projet_id = $projet_id;
        $this->ID_DOC = 1;
    }
    public function model(array $row)
    {               
        $row['projet_id']=$this->projet_id;
        //$loadingManager = new LoadingManager();
        //$doc= $loadingManager->getDoc($row[0],$this->projet_id);
        //Log::info("DOC: ".json_encode($doc));

        // if (!empty($doc)) {
        //     return new DataDoc([
        //         'doc_id'=>$row[0],
        //         'data_index'=>$row[1],
        //         'data_value'=>$row[2],
        //         'stamp_date'=>$row[3],
        //         'stamp_uid'=>$row[4],
        //         'ID_DOC'=>$this->ID_DOC,
        //         'projet_id'=>$this->projet_id
        //     ]);
        // }
        return new DataDoc([
                'doc_id'=>$row[0],
                'data_index'=>$row[1],
                'data_value'=>$row[2],
                'stamp_date'=>$row[3],
                'stamp_uid'=>$row[4],
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
