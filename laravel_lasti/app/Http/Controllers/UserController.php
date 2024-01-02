<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = $request->file('foto');
        $foto->storeAs('public/user', $foto->hashName());
        $user = User::create([
            'foto' => $foto->hashName(),
            'name' => $request->name,
            'email' => $request->email,
            'email_verified_at' => $request->email_verified_at,
            'role' => $request->role,
            'password' => $request->password,
            'rememberToken' => $request->rememberToken,

        ]);
        if ($user) {
            return redirect()->route('user.index')->with(['success' => 'Data Berhasil Disimpan!']);

        } else {
            return redirect()->route('user.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
{
    return view('user.update', compact('user'));
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if ($request->file('foto') == "") {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'email_verified_at' => $request->email_verified_at,
                'role' => $request->role,
                'password' => $request->password,
                'rememberToken' => $request->rememberToken,
            ]);
        } else {
            Storage::disk('local')->delete('public/user/' . $user->foto);
            $foto = $request->file('foto');
            $foto->storeAs('public/user', $foto->hashName());
            $user->update([
                'foto' => $foto->hashName(),
                'name' => $request->name,
                'email' => $request->email,
                'email_verified_at' => $request->email_verified_at,
                'role' => $request->role,
                'password' => $request->password,
                'rememberToken' => $request->rememberToken,
            ]);
        }

        if ($user) {
            return redirect()->route('user.index')->with(['success' => 'Data berhasil diubah!']);
        } else {
            return redirect()->route('user.index')->with(['error' => 'Data gagal diubah!']);
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        Storage::disk('local')->delete('public/user/' . $user->foto);
        $user->delete();

        if ($user) {
            return redirect()->route('user.index')->with(['success' => 'Data berhasil dihapus!']);
        } else {
            return redirect()->route('user.index')->with(['error' => 'Data gagal dihapus!']);
        }
    }
}
