<?php

namespace App\Imports;

use App\Compagnie;
use Maatwebsite\Excel\Concerns\ToModel;

class CompagnieImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Compagnie([
            //
        ]);
    }
}
