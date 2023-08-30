<?php

namespace App\Http\Controllers;

use App\Models\DataOfViolation;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PelanggaranReportController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $query = DataOfViolation::with(['santri', 'violation', 'sanction']);
        if ($request->filled('tgl_pelanggaran')) {
            $query->whereDate('created_at', $request->tgl_pelanggaran)
            ->whereStatus('selesai');
        }

        if (request()->download == "true") {
            $data = $query->latest()->get();
            $pdf = Pdf::loadView(
                "pages.report.file-pdf",
                compact("data")
            )->setPaper("a4", "landscape");
            $title =
                "Laporan Pelanggaran Santri " . str()->random(5) . '-' . date("d-m-Y");
            // return $title;
            return $pdf->stream($title);
        }
        // return $query->get();
        return view('pages.report.report-pdf', [
            'data' => $query->get(),
        ]);
    }
}
