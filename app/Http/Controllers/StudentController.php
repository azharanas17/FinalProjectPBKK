<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::orderby('nama', 'ASC')
        ->paginate(5);

        return view('student.index', compact('student'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:155',
            'nrp' => 'required|string|max:20',
            'kelas' => 'required|string|max:15',
            'hp' => 'required|string|max:15'
        ]);

        $student = Student::create([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'kelas' => $request->kelas,
            'hp' => $request->hp
        ]);

        if($student) {
            return redirect()
                ->route('student.index')
                ->with([
                    'success' => 'New student has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occured, Please try again'
                ]);
        }
    }

    public function edit ($id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:155',
            'nrp' => 'required|string|max:20',
            'kelas' => 'required|string|max:15',
            'hp' => 'required|string|max:15'
        ]);

        $student = Student::findOrFail($id);
        $student->update([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'kelas' => $request->kelas,
            'hp' => $request->hp
        ]);

        if($student) {
            return redirect()
                ->route('student.index')
                ->with([
                    'success' => 'Student has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occured, Please try again'
                ]);
        }
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        if($student) {
            return redirect()
                ->route('student.index')
                ->with([
                    'success' => 'Student has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occured, Please try again'
                ]);
        }
    }
}
