<?php

namespace App\Http\Module\Book\Application\Services\CreateBook;

class CreateBookRequest
{
    public function __construct(
        public string $judul_buku,
        public string $penulis,
        public int $tahun_terbit,
        public int $jumlah_buku,
    )
    {
    }
}
