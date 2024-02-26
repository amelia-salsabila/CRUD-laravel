<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        return view('student.all', [
            "tittle" => "Students",
            "students" => Student::latest()->filter(request(['search']))->paginate(10)
        ]);
    }

    public function home()
    {
        return view('home');
    }

    public function show(Student $student)
    {

        // Kemudian tampilkan data mahasiswa dalam view
        return view('student\detail', [
            'student' => $student
        ]);
    }
    public function create()
    {
        return view('student.create', [
            "tittle" => "create-new-data",
            "kelas" => Kelas::all()
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nis' => 'required',
            'nama' => 'required|max:255',
            'kelas_id' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required'
        ]);

        $result = Student::create($validateData);
        if ($result) {
            return redirect('/student/all')->with('success', 'Student added successfully');
        } else {
            return redirect('student/create')->with('error', 'Failed to add student');
        }
    }

    public function destroy(Student $student)
    {
        $result = Student::destroy($student->id);

        if ($result) {
            return redirect('/student/all')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect('/student/all')->with('error', 'Gagal menghapus data.');
        }
    }

    public function edit(Student $student)
    {
        return view('student.edit', [
            "title" => "edit data",
            "student" => $student,
            "kelas" => Kelas::all()

        ]);
    }

    public function update(Request $request, Student $student)
    {
        $validateData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required|max:255',
            'kelas_id' => 'required|max:255',
            'tgl_lahir' => 'required',
            'alamat' => 'required'
        ]);
        $result = Student::where('id', $student->id)->update($validateData);
        if ($result) {
            return redirect('/student/all')->with('success', 'Data siswa berhasil di update !');
        }
    }
}
