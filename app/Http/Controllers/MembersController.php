<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Members;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    //buat method index
    public function index(Request $request)
    {
        $members = Members::all();
        return view('members.index' , compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {

        $user = new User;
        $user->role = 'anggota';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->remember_token = Str::random(10);
        $user->save();

        // dd($user);
        $request->request->add(['user_id' => $user->id ]);
        $members = Members::create($request->all());
        return redirect('/members')->with('pesan', 'Anggota berhasil ditambahkan');

        // Members::create($request->all());
        // return redirect('/members')->with('pesan', 'Ditambahkan');
    }

    public function show(Members $members)
    {
       //
    }

    public function edit(Members $members)
    {
       Members::find($members);
       return view('members.edit', compact('members'));
    }

    public function update(Request $request, Members $members)
    {
       Members::where('nim', $members->nim)
       ->update([
            // 'nim' => $request->nim,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'prodi' => $request->prodi,
            'email' => $request->email,
            'password' => $request->password
       ]);

        return redirect('/members')->with('pesan','Data anggota berhasil diubah');
    }

    public function destroy(Members $members)
    {
        Members::destroy($members->nim);
        return redirect('/members')->with('pesan','Data anggota berhasil dihapus');
    }

}
