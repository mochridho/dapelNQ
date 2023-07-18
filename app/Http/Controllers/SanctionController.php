<?php

namespace App\Http\Controllers;

use App\Models\Sanction;
use Illuminate\Http\Request;

class SanctionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Sanction::query();
        if ($request->filled('q')) {
            $query->where('keterangan_sanksi', 'LIKE', '%' . $request->q . '%')
            ->orWhere('kategori_sanksi', 'LIKE', '%' . $request->q . '%');
        } else {
            $query->latest();
        }
        return view('pages.sanctions.index', [
            'sanctions' => $query->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return 'chuask';
        return view('pages.sanctions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'keterangan_sanksi' => 'required',
            'kategori_sanksi' => 'required',
        ]);
        $data['slug'] = str($request->keterangan_sanksi . '-' . str()->random(5))->slug();
        Sanction::create($data);
        return redirect()->route('master.sanctions.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
    */
    public function show(Sanction $sanction)
    {
        // return view('pages.sanctions.show', [
        //     'sanction' => $sanction,
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sanction $sanction)
    {
        return view('pages.sanctions.edit', [
            'sanction' => $sanction,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sanction $sanction)
    {
        $data = $request->validate([
            'keterangan_sanksi' => 'required',
            'kategori_sanksi' => 'required',
        ]);
        if ($sanction->keterangan_sanksi != $request->keterangan_sanksi) {
            $data['slug'] = str($request->keterangan_sanksi . '-' . str()->random(5))->slug();
        } else {
            $data['slug'] = $sanction->slug;
        }
        $sanction->update($data);
        return redirect()->route('master.sanctions.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sanction $sanction)
    {
        $sanction->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
