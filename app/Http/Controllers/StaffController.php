<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::orderby('nama', 'ASC')
        ->paginate(5);

        return view('staff.index', compact('staff'));
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:155',
            'hp' => 'required|string|max:15'
        ]);

        $staff = Staff::create([
            'nama' => $request->nama,
            'hp' => $request->hp
        ]);

        if($staff) {
            return redirect()
                ->route('staff.index')
                ->with([
                    'success' => 'New staff has been created successfully'
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
        $staff = Staff::findOrFail($id);
        return view('staff.edit', compact('staff'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:155',
            'hp' => 'required|string|max:15'
        ]);

        $staff = Staff::findOrFail($id);
        $staff->update([
            'nama' => $request->nama,
            'hp' => $request->hp
        ]);

        if($staff) {
            return redirect()
                ->route('staff.index')
                ->with([
                    'success' => 'Staff has been updated successfully'
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
        $staff = Staff::findOrFail($id);
        $staff->delete();

        if($staff) {
            return redirect()
                ->route('staff.index')
                ->with([
                    'success' => 'staff has been deleted successfully'
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
