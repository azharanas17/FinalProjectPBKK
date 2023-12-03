@extends('welcome')
@section('title', 'Buku')

@section('isihalaman')
    <h3><center>Daftar Peminjaman Buku</center></h3>

    <a href="{{ route('borrow.create') }}" class="btn btn-primary">Tambah Data Peminjaman</a>

    <p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td align="center">No</td>
                <td align="center">ID Pinjam</td>
                <td align="center">Nama Petugas</td>
                <td align="center">Nama Siswa</td>
                <td align="center">Judul Buku</td>
                <td align="center">Aksi</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($borrow as $index=>$br)
                <tr>
                    <td align="center" scope="row">{{ $index + $borrow->firstItem() }}</td>
                    <td>{{$br->id}}</td>
                    <td>{{$br->staff->nama}}</td>
                    <td>{{$br->students->nama}}</td>
                    <td>{{$br->books->judul}}</td>
                    <td align="center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('borrow.destroy', $br->id) }}" method="POST">
                            <a href="{{ route('borrow.edit', $br->id) }}"
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

    Halaman : {{ $borrow->currentPage() }} <br />
    Jumlah Data : {{ $borrow->total() }} <br />
    Data Per Halaman : {{ $borrow->perPage() }} <br />

    {{ $borrow->links() }}
    
@endsection