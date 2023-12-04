<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\Book;
use App\Models\Borrow;

class CountBooks implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $books = Book::all()->count();
        $borrows = Borrow::all()->count();

        \Log::info('Jumlah Buku yang ada saat ini: ' . $books);
        dump('Jumlah Buku yang ada saat ini: ' . $books);
        \Log::info('Jumlah buku yang dipinjam saat ini: ' . $borrows);
        dump('Jumlah buku yang dipinjam saat ini: ' . $borrows);
    }
}
