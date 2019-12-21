<?php

namespace App\Imports;

use App\Lecturer;
use App\Student;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Validators\Failure;
use Throwable;

class LecturersImport implements ToCollection, WithHeadingRow, SkipsOnError, SkipsOnFailure
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(\Illuminate\Support\Collection $rows)
    {

        foreach ($rows as $row) {
            Lecturer::create([
                'name' => $row['name'],
                'email' => $row['email'],
                'password' => Hash::make($row['dob']),
                'dob' => $row['dob'],
                'address' => $row['address'],
                'code' => $row['code'],
                'gender' => 'abc'
            ]);
        }
    }

    public function headingRow()
    {
        return 1;
    }
    public function onError(Throwable $e)
    {
        // TODO: Implement onError() method.
    }

    public function onFailure(Failure ...$failures)
    {
        // TODO: Implement onFailure() method.
    }

}

