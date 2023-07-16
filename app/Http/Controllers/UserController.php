<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('pages.dataUser.User');
    }
    public function TambahDataUser() {
        return view('pages.dataUser.TambahDataUser');
    }
    public function EditDataUser() {
        return view('pages.dataUser.EditDataUser');
    }
}
