<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index() {
        return view('pages.dataSantri.Santri');
    }

    public function tambahDataSantri() {
        return view('pages.dataSantri.TambahDataSantri');
    }

    public function editDataSantri() {
        return view('pages.dataSantri.EditDataSantri');
    }
}
