<?php

namespace App\Http\Controllers;

use App\Models\Violation;
use Illuminate\Http\Request;

class ViolationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.violations.index', [
            'violations' => Violation::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.violations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'keterangan_pelanggaran' => 'required',
            'kategori_pelanggaran' => 'required',
        ]);
        $data['slug'] = str($request->keterangan_pelanggaran . '-' . str()->random(5))->slug();
        Violation::create($data);
        return redirect()->route('violations.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Violation $violation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Violation $violation)
    {
        return view('pages.violations.edit', [
            'violation' => $violation,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Violation $violation)
    {
        $data = $request->validate([
            'keterangan_pelanggaran' => 'required',
            'kategori_pelanggaran' => 'required',
        ]);
        if ($violation->keterangan_pelanggaran != $request->keterangan_pelanggaran) {
            $data['slug'] = str($request->keterangan_pelanggaran . '-' . str()->random(5))->slug();
        } else {
            $data['slug'] = $violation->slug;
        }
        $violation->update($data);
        return redirect()->route('violations.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Violation $violation)
    {
        $violation->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
