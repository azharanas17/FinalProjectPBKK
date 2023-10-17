<?php

namespace App\Http\Module\Book\Domain\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Book
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

