<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\Staff;
use App\Models\Book;
use App\Models\Student;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function index()
    {
        $borrow = Borrow::orderby('id', 'ASC')
        ->paginate(10);

        return view('borrow.index', compact('borrow'));
    }

    public function create()
    {
        $staff = Staff::all();
        $book = Book::all();
        $student = Student::all();
        $list_compact = compact('staff', 'book', 'student');
        return view('borrow.create', $list_compact);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'students_id' => 'required',
            'staff_id' => 'required',
            'books_id' => 'required'
        ]);

        $borrow = Borrow::create([
            'students_id' => $request->students_id,
            'staff_id' => $request->staff_id,
            'books_id' => $request->books_id
        ]);

        if($borrow) {
            return redirect()
                ->route('borrow.index')
                ->with([
                    'success' => 'New borrow has been created successfully'
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
        $borrow = Borrow::findOrFail($id);
        $staff = Staff::all();
        $book = Book::all();
        $student = Student::all();
        $list_compact = compact('borrow', 'staff', 'book', 'student');
        return view('borrow.edit', $list_compact);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'students_id' => 'required',
            'staff_id' => 'required',
            'books_id' => 'required'
        ]);

        $borrow = Borrow::findOrFail($id);
        $borrow->update([
            'students_id' => $request->students_id,
            'staff_id' => $request->staff_id,
            'books_id' => $request->books_id
        ]);

        if($borrow) {
            return redirect()
                ->route('borrow.index')
                ->with([
                    'success' => 'Borrow has been updated successfully'
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
        $borrow = Borrow::findOrFail($id);
        $borrow->delete();

        if($borrow) {
            return redirect()
                ->route('borrow.index')
                ->with([
                    'success' => 'Borrow has been deleted successfully'
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
