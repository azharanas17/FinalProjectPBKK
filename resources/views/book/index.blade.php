@extends('welcome')
@section('title', 'Buku')

@section('isihalaman')
    <h3><center>Daftar Buku Perpustakaan</center></h3>

    <a href="{{ route('book.create') }}" class="btn btn-primary">Tambah Data Buku</a>

    <p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td align="center">No</td>
                <td align="center">ID Buku</td>
                <td align="center">Kode Buku</td>
                <td align="center">Judul Buku</td>
                <td align="center">Pengarang</td>
                <td align="center">Penerbit</td>
                <td align="center">Aksi</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($book as $index=>$bk)
                <tr>
                    <td align="center" scope="row">{{ $index + 1 }}</td>
                    <td>{{$bk->id}}</td>
                    <td>{{$bk->kode}}</td>
                    <td>{{$bk->judul}}</td>
                    <td>{{$bk->pengarang}}</td>
                    <td>{{$bk->penerbit}}</td>
                    <td align="center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('book.destroy', $bk->id) }}" method="POST">
                            <a href="{{ route('book.edit', $bk->id) }}"
                                class="btn btn-sm btn-primary">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Halaman : {{ $book->currentPage() }} <br />
    Jumlah Data : {{ $book->total() }} <br />
    Data Per Halaman : {{ $book->perPage() }} <br /> --}}

    {{-- {{ $book->links() }} --}}
    
@endsection