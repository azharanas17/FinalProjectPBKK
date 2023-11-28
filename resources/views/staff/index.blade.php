@extends('welcome')
@section('title', 'Staff')

@section('isihalaman')
    <h3><center>Daftar Staff Perpustakaan</center></h3>

    <a href="{{ route('staff.create') }}" class="btn btn-primary">Tambah Data Staff</a>

    <p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td align="center">No</td>
                <td align="center">Nama Staff</td>
                <td align="center">No HP</td>
                <td align="center">Aksi</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($staff as $index=>$st)
                <tr>
                    <td align="center" scope="row">{{ $index + $staff->firstItem() }}</td>
                    <td>{{$st->nama}}</td>
                    <td>{{$st->hp}}</td>
                    <td align="center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('staff.destroy', $st->id) }}" method="POST">
                            <a href="{{ route('staff.edit', $st->id) }}"
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

    Halaman : {{ $staff->currentPage() }} <br />
    Jumlah Data : {{ $staff->total() }} <br />
    Data Per Halaman : {{ $staff->perPage() }} <br />

    {{ $staff->links() }}
    
@endsection