<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    public function index() {
        return view('pages.dataPelanggaran.Pelanggaran');
    }

    public function tambahDataPelanggaran() {
        return view('pages.dataPelanggaran.TambahDataPelanggaran');
    }

    public function editDataPelanggaran() {
        return view('pages.dataPelanggaran.EditDataPelanggaran');
    }
}
