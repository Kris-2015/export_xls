<?php
/**
 * Created by PhpStorm.
 * User: mindfire
 * Date: 27/9/18
 * Time: 10:52 PM
 */

namespace App\Exports;

use Log;
use Exception;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;

class SheetsPerCountry implements FromQuery, WithTitle
{
    private $country;

    public function __construct(string $country)
    {
        $this->country = $country;
    }

    /**
     * @return $this|bool
     */
    public function query()
    {
        try {
            return User::query()->where('country', $this->country);
        } catch (Exception $e) {
            Log::error('Error occured while fetching records by country: ' .
                $e->getMessage());

            return false;
        }
    }

    public function title() : string
    {
        return 'Country ' . $this->country;
    }
}