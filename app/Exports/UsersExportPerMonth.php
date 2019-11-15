<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;

class UsersExportPerMonth implements FromQuery, WithTitle,WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    private $month;
    public function __construct($month)
    {
        $this->month = $month;
    }

    public function query()
    {
        // TODO: Implement query() method.
        return User::query()->whereMonth('created_at', $this->month);
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
    public function title(): string
    {
        // TODO: Implement title() method.
        return 'Month '.$this->month;

    }
}
