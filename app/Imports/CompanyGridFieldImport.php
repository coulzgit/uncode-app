<?php

namespace App\Imports;

use App\CompanyGridField;
use Maatwebsite\Excel\Concerns\ToModel;

class CompanyGridFieldImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CompanyGridField([
            //
        ]);
    }
}
