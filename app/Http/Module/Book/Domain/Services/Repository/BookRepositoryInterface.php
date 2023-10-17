<?php

namespace App\Http\Module\Book\Domain\Services\Repository;

use App\Http\Module\Book\Domain\Model\Book;

interface BookRepositoryInterface
{
    public function save(Book $book);

}
