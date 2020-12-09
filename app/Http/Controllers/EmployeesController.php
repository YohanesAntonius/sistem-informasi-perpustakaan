<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    //buat method index
    public function index(Request $request)
    {
        $employees = Employees::all();
        return view('employees.index' , compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nim' => 'required|unique:employees|max:10',
            'nama' => 'required|max:50',
            'alamat' => 'required|max:50',
            'telepon' => 'required|max:12',
            'cellphone'=> 'required|max:12',
            'agama' => 'required|max:10',
            'email' => 'required|max:20',
            'pendidikan_id' => 'required|max:1',
            'aktif' => 'required|max:1',
            'username' => 'required|max:10',
            'password' => 'required|max:20'
        ]);

        $user = new User;
        $user->role = 'admin';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->remember_token = Str::random(10);
        $user->save();

        // dd($user);
        $request->request->add(['user_id' => $user->id ]);
        $employees = Employees::create($request->all());
        return redirect('/employees')->with('pesan', 'Ditambahkan');

        // Employees::create($request->all());
        // return redirect('/employee');
    }

    public function show(Employees $employees)
    {
       //
    }

    public function edit(Employees $employees)
    {
       Employees::find($employees);
       return view('employees.edit', compact('employees'));
    }

    public function update(Request $request, Employees $employees)
    {
       Employees::where('id', $employees->id)
       ->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'cellphone' => $request->cellphone,
            'agama' => $request->agama,
            'email' => $request->email,
            'pendidikan_id' => $request->pendidikan_id,
            'aktif' => $request->aktif,
            'username' => $request->username,
            'password' => $request->password
       ]);

        return redirect('/employees')->with('pesan','Data pegawai berhasil diubah');
    }

    public function destroy(Employees $employees)
    {
        Employees::destroy($employees->id);
        return redirect('/employees')->with('pesan','Data pegawai berhasil dihapus');
    }

    // public function search(Employees $employees)
    // {
    //     Employees::search($employees->id);
    //     return view('/employees');
    // }
}
