<?php

namespace App\Imports;

use App\Models\ActionLogName;
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


class ActionLogNameImport implements ToModel , WithStartRow,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable;
    protected $action_log_id;

    public function __construct($action_log_id) {
        $this->action_log_id = $action_log_id;
    }
    public function model(array $row)
    {  
    //log_index   log_description default_view    lan_code    search_index                                                                                                                      
        return new ActionLogName([
            'log_index'=>$row[0],
            'log_description'=>$row[1],
            'default_view'=>$row[2],
            'lan_code'=>$row[3],
            'search_index'=>$row[4],
            'action_log_id'=>$this->action_log_id
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
            '1'=>'string|nullable|max:250',
            '2'=>'required|integer',
            '3'=>'required|max:3',
            '4'=>'string|nullable'
        ];
    }

    public function customValidationAttributes()
    {
        return [
            '0'=>'log_index',
            '1'=>'log_description',
            '2'=>'default_view',
            '3'=>'lan_code',
            '4'=>'search_index'
        ];
    }

}
