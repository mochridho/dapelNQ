<?php

namespace App\Http\Controllers;

use App\Models\DataOfViolation;
use App\Models\Sanction;
use App\Models\Santri;
use App\Models\Violation;
use Illuminate\Http\Request;

class DataOfViolationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.administrator')->except('index');
    }

    public function index(Request $request)
    {
        $query = DataOfViolation::query();
        if ($request->filled("q")) {
            $query->search($request->q);
        }
        return view('pages.data-of-violations.index',[
            'data' => $query->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.data-of-violations.create',[
            'santri' => Santri::latest()->get(),
            'violations' => Violation::latest()->get(),
            'sanctions' => Sanction::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'santri_id' => 'required|exists:santris,id',
            'violation_id' => 'required|exists:violations,id',
            'sanction_id' => 'required|exists:sanctions,id',
            'description' => 'nullable',
        ]);
        $data['status'] = 'proses';
        $data['user_id'] = auth()->user()->id;
        DataOfViolation::create($data);
        return redirect()->route('data-of-violations.index')->with('success','Data pelanggaran berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataOfViolation $dataOfViolation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataOfViolation $dataOfViolation)
    {
        return view('pages.data-of-violations.edit',[
            'data' => $dataOfViolation,
            'santri' => Santri::latest()->get(),
            'violations' => Violation::latest()->get(),
            'sanctions' => Sanction::latest()->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataOfViolation $dataOfViolation)
    {
        $data = $request->validate([
            'santri_id' => 'required|exists:santris,id',
            'violation_id' => 'required|exists:violations,id',
            'sanction_id' => 'required|exists:sanctions,id',
            'description' => 'nullable',
        ]);

        if ($request->status == 'selesai') {
            $data['status'] = 'selesai';
        } else {
            $data['status'] = 'proses';
        }

        $data['user_id'] = auth()->user()->id;
        $dataOfViolation->update($data);
        return redirect()->route('data-of-violations.index')->with('success','Data pelanggaran berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataOfViolation $dataOfViolation)
    {
        $dataOfViolation->delete();
        return redirect()->route('data-of-violations.index')->with('success','Data pelanggaran berhasil dihapus');
    }
}
