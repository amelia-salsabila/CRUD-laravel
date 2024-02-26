<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use App\Models\Students;
use Illuminate\Http\Request;

class DashboardStudentController extends Controller
{
    public function index()
    {
        $perPage = 5;
        $students = Student::paginate($perPage);

        return view('/Dashboard/student/all', [
            "title" => "student",
            "students" => $students
        ]);
    }


    public function show(Student $student)
    {
        return view('Dashboard.student.detail', [
            "title" => "detail-student",
            "students" => $student //route model binding
        ]);
    }

    public function create()
    {
        return view('Dashboard.student.create', [
            "title" => "add data",
            "kelas" => Kelas::all()


        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required|max:255',
            'kelas_id' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);
        $result = Student::create($validateData);
        if ($result) {
            return redirect('/Dashboard/student/all')->with('success', 'Data siswa berhasil di tambahkan !');
        }
    }

    public function destroy(Student $students)
    {
        $result = Student::destroy($students->id);

        if ($result) {
            return redirect('/Dashboard/student/all')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect('/Dashboard/student/all')->with('error', 'Gagal menghapus data.');
        }
    }

    public function edit(Student $students)
    {
        return view('/Dashboard/Student/edit', [
            "title" => "edit data",
            "student" => $students,
            "kelas" => Kelas::all()


        ]);
    }

    public function update(Request $request, Student $students)
    {
        $validateData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required|max:255',
            'kelas_id' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);
        $result = Student::where('id', $students->id)->update($validateData);
        if ($result) {
            return redirect('/Dashboard/student/all')->with('success', 'Data siswa berhasil di update !');
        }
    }
}
