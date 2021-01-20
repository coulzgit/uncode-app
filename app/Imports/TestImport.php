<?php

namespace App\Imports;

use App\Models\Test;
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


class TestImport implements ToModel, WithStartRow,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable;

    public function model(array $row)
    {
        return new Test([
            'project_id'=>(int)$row[0],
            'account_id'=>(int)$row[1],
            'name'=>$row[2]
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
            '0' => 'required|integer',
            '1' => 'required|integer',
            '2' => 'required|max:10'
        ];
    }
    
    public function customValidationAttributes()
    {
        return [
            '0' => 'project_id',
            '1' => 'account_id',
            '2' => 'name'
        ];
    }
}
