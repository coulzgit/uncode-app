<?php

namespace App\Imports;

use App\DocData;
use Maatwebsite\Excel\Concerns\ToModel;

class DocDataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DocData([
            //
        ]);
    }
}
