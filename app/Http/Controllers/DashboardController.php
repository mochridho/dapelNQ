<?php

namespace App\Http\Controllers;

use App\Models\Sanction;
use App\Models\Violation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('pages.Dashboard',[
            'violations' => Violation::count(),
            'sanctions' => Sanction::count(),
        ]);
    }
}
