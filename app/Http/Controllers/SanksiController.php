<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SanksiController extends Controller
{
    public function index() {
        return view('pages.dataSanksi.Sanksi');
    }

    public function tambahDataSanksi() {
        return view('pages.dataSanksi.TambahDataSanksi');
    }

    public function editDataSanksi() {
        return view('pages.dataSanksi.EditDataSanksi');
    }
}
