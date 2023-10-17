<?php

namespace App\Http\Module\Book\Application\Services\CreateBook;

use App\Http\Module\Book\Domain\Model\Book;
use App\Http\Module\Book\Infrastructure\Repository\BookRepository;

class CreateBookService
{

    public function __construct(
        private BookRepository $book_repository
    )
    {
    }

    public function execute(CreateBookRequest $request){
        $book = new Book(
            $request->judul_buku,
            $request->penulis,
            $request->tahun_terbit,
            $request->jumlah_buku,
        );

        $this->book_repository->save($book);
    }
}
