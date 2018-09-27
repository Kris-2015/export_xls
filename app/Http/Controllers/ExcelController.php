<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Exports\UsersExport;

/**
 * Class ExcelController
 * @package App\Http\Controllers
 * @purpose Class to export package of data into excel sheet
 */
class ExcelController extends Controller
{
    /**
     * ExcelController constructor.
     */
    public function __construct()
    {
        // Increase execution time so that document can be created
        ignore_user_abort(true);
        set_time_limit(0);
        ini_set('memory_limit', '-1');
    }

    /**
     * Function to return the view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPage ()
    {
        // Get the list of records of users
        $users = User::getSomeRec();
        return view ('excel', compact('users'));
    }

    /**
     * Function to export data from db
     * @param Request $request
     * @return mixed
     */
    public function export(Request $request)
    {
        (new UsersExport)->queue('users.xlsx');

        return back()->withSuccess('Export started!');
    }

    /**
     * Function to export the db data into excel file using queue
     * @param Request $request
     * @return \Illuminate\Http\Response|\Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function exportWithQueue (Request $request)
    {
        $userExport = new UsersExport();
        $userExport->queue('users.xlsx');

        return $userExport->download('users.xlsx',
            \Maatwebsite\Excel\Excel::XLSX);
    }

    /**
     * Function to download the excel file in multiple sheets
     * @param Request $request
     * @return \Illuminate\Http\Response|\Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function downloadWithMultipleSheets(Request $request)
    {
        return (new UsersExport())->download('users.xlsx');
    }
}
