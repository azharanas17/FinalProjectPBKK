<?php

namespace App\Http\Controllers;

use App\Jobs\CountBooks;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BookController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $book = Book::where('judul', 'LIKE', "%$query%")
                    ->orWhere('kode', 'LIKE', "%$query%")
                    ->orWhere('pengarang', 'LIKE', "%$query%")
                    ->orWhere('penerbit', 'LIKE', "%$query%")
                    ->paginate(10);

        return view('book.index', compact('book'));
    }
    public function index()
    {
        $key = "index-book";

        if (Cache::has($key)) {
            \Log::info('Data retrieved from cache:', ['key' => $key]);
            // dump('Data retrieved from cache:', Cache::get($key));
            
            $book = Cache::get($key);
        } else {
            $book = Book::orderby('kode', 'ASC')->paginate(10);

            Cache::put($key, $book, 1);

            \Log::info('Data stored in cache:', ['key' => $key]);
            // dump('Data stored in cache:', $book);
        }
        CountBooks::dispatch();

        return view('book.index', compact('book'));
    }

    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode' => 'required|string|max:155',
            'judul' => 'required|string|max:155',
            'pengarang' => 'required|string|max:155',
            'penerbit' => 'required|string|max:155'
        ]);

        $book = Book::create([
            'kode' => $request->kode,
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit
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
            'kode' => 'required|string|max:155',
            'judul' => 'required|string|max:155',
            'pengarang' => 'required|string|max:155',
            'penerbit' => 'required|string|max:155'
        ]);

        $book = Book::findOrFail($id);

        $book->update([
            'kode' => $request->kode,
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit
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
