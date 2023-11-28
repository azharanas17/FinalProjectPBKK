@extends('welcome')
@section('title', 'Siswa')

@section('isihalaman')
    <h3><center>Daftar Siswa</center></h3>

    <a href="{{ route('student.create') }}" class="btn btn-primary">Tambah Data Siswa</a>

    <p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td align="center">No</td>
                <td align="center">Nama Siswa</td>
                <td align="center">NRP</td>
                <td align="center">Kelas</td>
                <td align="center">No HP</td>
                <td align="center">Aksi</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($student as $index=>$sd)
                <tr>
                    <td align="center" scope="row">{{ $index + $student->firstItem() }}</td>
                    <td>{{$sd->nama}}</td>
                    <td>{{$sd->nrp}}</td>
                    <td>{{$sd->kelas}}</td>
                    <td>{{$sd->hp}}</td>
                    <td align="center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('student.destroy', $sd->id) }}" method="POST">
                            <a href="{{ route('student.edit', $sd->id) }}"
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

    Halaman : {{ $student->currentPage() }} <br />
    Jumlah Data : {{ $student->total() }} <br />
    Data Per Halaman : {{ $student->perPage() }} <br />

    {{ $student->links() }}
    
@endsection