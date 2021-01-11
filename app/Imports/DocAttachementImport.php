<?php

namespace App\Imports;

use App\DocAttachement;
use Maatwebsite\Excel\Concerns\ToModel;

class DocAttachementImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DocAttachement([
            //
        ]);
    }
}
