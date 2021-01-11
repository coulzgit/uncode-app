<?php

namespace App\Imports;

use App\AccActionLogName;
use Maatwebsite\Excel\Concerns\ToModel;

class AccActionLogNameImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AccActionLogName([
            //
        ]);
    }
}
