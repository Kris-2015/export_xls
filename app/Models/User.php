<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Exception;
use Log;

/**
 * Class User
 * @package App\Models
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile_number',
        'country'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * Function to return all data
     * @param void
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getAllRecords()
    {
        return User::all();
    }

    /**
     * Function to get the records of 25 users
     * @param void
     * @return bool
     */
    public static function getSomeRec ()
    {
        // Get the records of 25 users
        try {
            return User::select('id', 'first_name', 'last_name',
                'mobile_number', 'email', 'country')->get()->take(25);
        } catch (Exception $e) {
            Log::error('Error occured in fetching records in getSomeRec function:' .
                $e->getMessage());

            return false;
        }
    }

    /**
     * Function to return the distinct list of country
     * @param void
     * @return array | boolean
     */
    public static function getCountry()
    {
        try {
            return User::select('country')->groupBy('country')->get();
        } catch (Exception $e) {
            Log::error('Error occured while getting the country' . $e);
            return false;
        }
    }
}
