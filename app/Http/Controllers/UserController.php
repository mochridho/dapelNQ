<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('roles', '!=', 'admin')
        ->where('id', '!=', Auth::user()->id)
        ->latest()->get();
        return view('pages.users.index', [
            'users' =>  $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->roles != 'admin') {
            return redirect()->route('master.users.index')->with('error', 'Anda tidak memiliki hak akses');
        }
        return view('pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'roles' => 'required|in:penyidik,sekretaris',
        ]);
        $data['password'] = Hash::make($request->password);
        // return $data;
        User::create($data);
        return redirect()->route('master.users.index')->with('success', 'Data User berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
         if (Auth::user()->roles != 'admin') {
            return redirect()->route('master.users.index')->with('error', 'Anda tidak memiliki hak akses');
        }
        return view('pages.users.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required',
            'username' => 'required|alpha_num|unique:users,username,' . $user->id,
            'email' => 'required|email|unique:users,email,'. $user->id,
            'password' => 'nullable|min:8',
            'roles' => 'required|in:penyidik,sekretaris',
        ]);
        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        } else {
            $data['password'] = $user->password;
        }
        // return $data;
        $user->update($data);
        return redirect()->route('master.users.index')->with('success', 'Data User berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'Data User berhasil dihapus');
    }
}
