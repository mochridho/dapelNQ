<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelanggarController extends Controller
{
    public function index() {
        return view('pages.dataPelanggar.DataPelanggar');
    }

    public function tambahDataPelanggar() {
        return view('pages.dataPelanggar.TambahDataPelanggar');
    }

    public function editDataPelanggar() {
        return view('pages.dataPelanggar.EditDataPelanggar');
    }
}
