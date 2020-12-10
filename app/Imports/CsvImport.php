<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CsvImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        if($row["status"] != "admin"){
            return new User([
                'name' =>  $row["name"],
                'lname' =>  $row["lname"],
                'status' =>  $row["status"],
                'gender' =>  $row["gender"],
                'phone' =>  $row["phone"],
                'id_number' =>  $row["id_number"],
                'hall' =>  $row["hall"],
                'program' =>  $row["program"],
                'department' =>  $row["department"],
                'email' =>  $row["email"],
                'password' => \Hash::make($row['password']),
            ]);
        }
    }
}