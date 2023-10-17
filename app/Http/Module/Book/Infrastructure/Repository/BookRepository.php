<?php

namespace App\Http\Module\Book\Infrastructure\Repository;

use App\Http\Module\Book\Domain\Model\Book;
use App\Http\Module\Book\Domain\Services\Repository\BookRepositoryInterface;
use Illuminate\Support\Facades\DB;

class BookRepository implements BookRepositoryInterface
{
    public function save(Book $book)
    {
        DB::table('books')->upsert(
            [
                'judul_buku' => $book->judul_buku,
                'penulis' => $book->penulis,
                'tahun_terbit' => $book->tahun_terbit,
                'jumlah_buku' => $book->jumlah_buku,
            ],'judul_buku'
        );
    }
}