<?php

namespace App\Imports;

use App\IpLineItem;
use Maatwebsite\Excel\Concerns\ToModel;

class IpLineItemImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new IpLineItem([
            //
        ]);
    }
}
