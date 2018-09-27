<?php
namespace App\Exports;

use App\Models\User;
use App\Exports\SheetsPerCountry;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class UsersExport implements FromQuery, ShouldQueue, WithMultipleSheets
{
    use Exportable;

    public function query()
    {
        return User::query();
    }

    public function sheets(): array
    {
        $sheets = [];

        // Get the list of countries
        $countries = User::getCountry();
        foreach ($countries as $country) {
            $sheets[] = new SheetsPerCountry($country['country']);
        }

        return $sheets;
    }
}