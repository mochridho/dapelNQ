<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormReportController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('pages.report.create');
    }
}
