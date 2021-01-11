<?php

namespace App\Imports;

use App\AccActionLog;
use Maatwebsite\Excel\Concerns\ToModel;

class AccActionLogImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AccActionLog([
            //
        ]);
    }
}
