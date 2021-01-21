<?php

namespace App\Imports;

use App\Models\CompanyGridField;
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


class CompanyGridFieldImport implements ToModel , WithStartRow,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable;
    protected $compagnie_id;
    

    public function __construct($compagnie_id) {
        $this->compagnie_id=$compagnie_id;
    }
    public function model(array $row)
    {                                         
        return new CompanyGridField([
          'comp_no'=>$row[0],    
          'acc_fields'=>$row[1], 
          'compagnie_id'=>$this->compagnie_id 

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
            '1'=>'string|nullable|max:500'
        ];
    }

    public function customValidationAttributes()
    {
        return [
          '0'=>'comp_no',    
          '1'=>'acc_fields'
        ];
    }

}
