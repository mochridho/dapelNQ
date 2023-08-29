<?php

namespace App\Http\Controllers;

use App\Models\DataOfViolation;
use Illuminate\Http\Request;

class WaliController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $query = $request->get('q');
        if (!empty($query) && strlen($query) === 9) {
            $data = DataOfViolation::with(['santri', 'violation', 'sanction', 'user'])
            ->whereStatus('selesai')
            ->whereHas('santri', function ($query) use ($request) {
                $query->where('nis', '=', $request->q);
            })->latest()->get();
        } else {
            $data = collect();
        }
        // return $data;
        return view('pages.wali.index', compact('data'));
    }
}
