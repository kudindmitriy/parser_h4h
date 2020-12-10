<?php

namespace App\Imports;

use App\Models\Recipient;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class RecipientsImport implements ToModel
{
    public function isValidEmail($email){
        return !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    /**
     * @param array $row
     *
     * @return Recipient|null
     */
    public function model(array $row)
    {
        if(!$this->isValidEmail($row[3])){
            return null;
        }

        if(Recipient::where('email', '=', $row[3])->exists()){
            return null;
        }


        return new Recipient([
            'name'     => $row[0],
            'surname'    => $row[1],
            'phone' => $row[2],
            'email'    => $row[3]
        ]);
    }
}
