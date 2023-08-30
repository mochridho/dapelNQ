<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Santri::query();
        if ($request->filled('q')) {
            $query->where('nama_santri', 'LIKE', '%' . $request->q . '%');
        } else {
            $query->latest();
        }
        return view('pages.santri.index', [
            'santri' => $query->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->roles != 'admin' && Auth::user()->roles != 'sekretaris') {
            return redirect()->route('master.santri.index')->with('error', 'Anda tidak memiliki hak akses');
        }
        return view('pages.santri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nis' => 'required|integer|digits:9|unique:santris,nis',
            'nama_santri' => 'required',
            'nama_wali' => 'nullable',
            'jk' => 'required|in:L,P',
            'tgl_lahir' => 'required|date',
            'kamar' => 'required',
            'pendidikan' => 'required',
            'no_hp' => 'nullable',
            'alamat' => 'nullable',
        ]);
        // return $data;
        Santri::create($data);
        return redirect()->route('master.santri.index')->with('success', 'Data Santri berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Santri $santri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Santri $santri)
    {
         if (Auth::user()->roles != 'admin' && Auth::user()->roles != 'sekretaris') {
            return redirect()->route('master.santri.index')->with('error', 'Anda tidak memiliki hak akses');
        }
        return view('pages.santri.edit', [
            'santri' => $santri,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Santri $santri)
    {
         $data = $request->validate([
            'nis' => 'required|integer|digits:9|unique:santris,nis,' . $santri->id,
            'nama_santri' => 'required',
            'nama_wali' => 'nullable',
            'jk' => 'required|in:L,P',
            'tgl_lahir' => 'required|date',
            'kamar' => 'required',
            'pendidikan' => 'required',
            'no_hp' => 'nullable',
            'alamat' => 'nullable',
        ]);
        // return $data;
        $santri->update($data);
        return redirect()->route('master.santri.index')->with('success', 'Data Santri berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Santri $santri)
    {
        $santri->delete();
        return back()->with('success', 'Data Santri berhasil dihapus');
    }
}
