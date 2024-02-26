<?php

namespace App\Http\Controllers;

// app/Http/Controllers/KelasController.php

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return view('kelas.all', [
            "title" => "Kelas",
            "kelas" => Kelas::all()
        ]);
    }

    public function create()
    {
        return view('kelas.create', [
            "tittle" => "create-new-data",
            "kelas" => Kelas::all()
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
        ]);

        $result = Kelas::create($validateData);
        if ($result) {
            return redirect('/kelas/all')->with('success', 'Class added successfully');
        } else {
            return redirect('kelas/create')->with('error', 'Failed to add class');
        }
    }

    public function destroy(Kelas $kelas)
    {
        $result = Kelas::destroy($kelas->id);

        if ($result) {
            return redirect('/kelas/all')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect('/kelas/all')->with('error', 'Gagal menghapus data.');
        }
    }

    public function edit(Kelas $kelas)
    {
        return view('kelas.edit', [
            "title" => "edit data",
            "kelas" => $kelas

        ]);
    }

    public function update(Request $request, Kelas $kelas)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
        ]);
        $result = Kelas::where('id', $kelas->id)->update($validateData);
        if ($result) {
            return redirect('/kelas/all')->with('success', 'Data siswa berhasil di update !');
        }
    }
}
