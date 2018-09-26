<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;

class ExcelController extends Controller
{
    //
    public function __construct()
    {
        // Increase execution time so that document can be created
        ignore_user_abort(true);
        set_time_limit(0);
        ini_set('memory_limit', '-1');
    }

    public function showPage ()
    {
        return view ('excel');
    }

    public function export(Request $request)
    {
        //return Excel::download(new UsersExport, 'users.xlsx');
        (new UsersExport)->queue('users.xlsx');

        return back()->withSuccess('Export started!');
    }

    public function exportWithQueue (Request $request)
    {
        $userExport = new UsersExport;
        $userExport->queue('users.xlsx');

        return $userExport->download('users.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }
}
