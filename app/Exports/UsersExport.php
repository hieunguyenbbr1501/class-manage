<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class UsersExport implements FromCollection, WithHeadings, WithMapping,WithMultipleSheets
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::all();
    }

    public function query()
    {
        return User::query()->where('name', 'Like', '%admin%');
    }

    public function headings(): array
    {
        // TODO: Implement headings() method.
        return [
            'ID',
            'Name',
            'Email'
        ];
    }
    public function map($row): array
    {
        // TODO: Implement map() method.
        return [
            $row->id,
            $row->name,
            $row->email
        ];
    }
    public function sheets(): array
    {
        // TODO: Implement sheets() method.
        $sheets = [];
        for($month = 1; $month < 12; $month++){
            $sheets[] = new UsersExportPerMonth($month);
        }
        return $sheets;
    }
}
