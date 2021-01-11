<?php

namespace App\Imports;

use App\DocDataName;
use Maatwebsite\Excel\Concerns\ToModel;

class DocDataNameImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DocDataName([
            //
        ]);
    }
}
