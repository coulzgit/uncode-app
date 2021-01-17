<?php

namespace App\Imports;

use App\InvoceType;
use Maatwebsite\Excel\Concerns\ToModel;

class InvoceTypeImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new InvoceType([
            //
        ]);
    }
}
