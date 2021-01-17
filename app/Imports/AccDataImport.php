<?php

namespace App\Imports;

use App\AccData;
use Maatwebsite\Excel\Concerns\ToModel;

class AccDataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AccData([
            //
        ]);
    }
}
