<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([

            'prenom'=>$row[0],
            'nom'=>$row[1],
             'email' =>$row[2],
              'password' =>\Hash::make('123456'),
        ]);
    }
}
