<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new User([
            'name'     => $row[0],
            'surname'    => $row[1],
            'email'    => $row[2],
            'phone' => $row[3],
            'password' => Hash::make($row[4])
        ]);
    }
}
