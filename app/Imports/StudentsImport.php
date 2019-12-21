<?php

namespace App\Imports;

use App\Student;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentsImport implements ToCollection,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(\Illuminate\Support\Collection $rows)
    {

        foreach ($rows as $row)
        {
            Student::create([
                'name'     => $row['name'],
                'email'    => $row['email'],
                'password' => Hash::make($row['dob']),
                'dob' => $row['dob'],
                'address' => $row['address'],
                'code' => $row['code'],
                'gender' => 'abc'
            ]);
        }
    }
    public function headingRow(){
        return 1;
    }
//    public function mapping(): array
//    {
//        // TODO: Implement mapping() method.
//        return [
//            'name'  => 'B1',
//            'email' => 'B2',
//        ];
//    }

}

