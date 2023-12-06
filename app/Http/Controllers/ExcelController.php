<?php

namespace App\Http\Controllers;

use App\Imports\CoursesImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Excel;

class ExcelController extends Controller
{
    public function store(Request $data): Request
    {
        $data->validate([
            'excel' => 'required'
        ]);
        try {
            return Excel::import(new CoursesImport(), storage_path('public/'.$data->file('excel')));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function convertToHtml()
    {

    }
}
