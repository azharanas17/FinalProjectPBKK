<?php

namespace App\Http\Module\Product\Domain\Services\Repository;

use App\Http\Module\Product\Domain\Model\Book;

interface BookRepositoryInterface
{
    public function save(Book $product);

}
