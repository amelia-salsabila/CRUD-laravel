<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class DashboardKelasController extends Controller
{
    public function index()
    {
        $perPage = 5;
        $classes = Kelas::paginate($perPage);

        return view('Dashboard.kelas.all', [
            "title" => "kelas",
            "class" => Kelas::all()
        ]);
    }

    public function create()
    {
        return view('Dashboard.kelas.all', [
            "class" => Kelas::all()

        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required'
        ]);
        $result = Kelas::create($validateData);
        if ($result) {
            return redirect('/Dashboard/kelas/all')->with('success', 'Data siswa berhasil di tambahkan !');
        }
    }

    public function destroy(Kelas $classes)
    {
        $result = Kelas::destroy($classes->id);

        if ($result) {
            return redirect('/Dashboard/kelas/all')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect('/Dashboard/kelas/all')->with('error', 'Gagal menghapus data.');
        }
    }

    public function edit(Kelas $classes)
    {
        return view('Dashboard.kelas.all', [
            "class" => $classes

        ]);
    }

    public function update(Request $request, Kelas $classes)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255'

        ]);
        $result = Kelas::where('id', $classes->id)->update($validateData);
        if ($result) {
            return redirect('/Dashboard/kelas/all')->with('success', 'Data siswa berhasil di update !');
        }
    }
}
