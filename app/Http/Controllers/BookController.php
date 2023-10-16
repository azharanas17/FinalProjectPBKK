<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::latest()->get();
        return view('book.index', compact('books'));
    }

    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_buku' => 'required|string|max:155',
            'penulis' => 'required|string|max:155',
            'tahun_terbit' => 'required|numeric',
            'jumlah_buku' => 'required|numeric'
        ]);

        $book = Book::create([
            'judul_buku' => $request->judul_buku,
            'penulis' => $request->penulis,
            'tahun_terbit' => $request->tahun_terbit,
            'jumlah_buku' => $request->jumlah_buku
        ]);

        if($book) {
            return redirect()
                ->route('book.index')
                ->with([
                    'success' => 'New book has been created successfully'
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

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('book.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul_buku' => 'required|string|max:155',
            'penulis' => 'required|string|max:155',
            'tahun_terbit' => 'required|numeric',
            'jumlah_buku' => 'required|numeric'
        ]);

        $book = Book::findOrFail($id);

        $book->update([
            'judul_buku' => $request->judul_buku,
            'penulis' => $request->penulis,
            'tahun_terbit' => $request->tahun_terbit,
            'jumlah_buku' => $request->jumlah_buku
        ]);

        if($book) {
            return redirect()
                ->route('book.index')
                ->with([
                    'success' => 'Book has been updated successfully'
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
        $book = Book::findOrFail($id);
        $book->delete();

        if($book) {
            return redirect()
                ->route('book.index')
                ->with([
                    'success' => 'Book has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('book.index')
                ->back()
                ->with([
                    'error' => 'Some problem occured, Please try again'
                ]);
        }
    }
}
