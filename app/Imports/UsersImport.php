<?php

namespace App\Imports;

use App\User;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithValidation;

class UsersImport implements ToModel,WithValidation,WithHeadingRow,WithBatchInserts,WithMapping
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name'     => $row['Tên'],
            'email'    => $row['Địa chỉ'],
            'password' => \Hash::make('123456'),
        ]);
    }
    public function headingRow(){
        return 1;
    }
    public function rules(): array
    {
        // TODO: Implement rules() method.
        return[
        'name' => 'required'
        ];
    }
    public function batchSize(): int
    {
        // TODO: Implement batchSize() method.
        return 10;
    }
    public function map($row): array
    {
        dd($row);
        // TODO: Implement map() method.
        return[
            'name' => $row['Tên'],
            'email' => $row['Địa chỉ']
        ];
    }
}
