@extends('welcome')
@section('title', 'Edit Siswa')

@section('isihalaman')

    <div class="my-5">
        <form name="formsiswaedit" id="formsiswaedit" action="{{ route('student.update', $student->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Siswa</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Siswa"
                    value="{{ $student->nama ?? old('nama') }}">
                </div>
            </div>

            <p>
            <div class="form-group row">
                <label for="nrp" class="col-sm-4 col-form-label">Nomer Register Pokok</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Masukan Nomer Register Pokok"
                    value="{{ $student->nrp ?? old('nrp') }}">
                </div>
            </div>

            <p>
            <div class="form-group row">
                <label for="kelas" class="col-sm-4 col-form-label">Kelas</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukan Kelas"
                    value="{{ $student->kelas ?? old('kelas') }}">
                </div>
            </div>

            <p>
            <div class="form-group row">
                <label for="hp" class="col-sm-4 col-form-label">No HP</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="hp" name="hp" placeholder="Masukan No HP"
                    value="{{ $student->hp ?? old('hp') }}">
                </div>
            </div>

            <p>
            <div class="modal-footer">
                <a href="{{ route('student.index') }}" class="btn btn-primary">Tutup</a>
                <button type="submit" name="bstudenttambah" class="btn btn-success">Edit</button>
            </div>
        </form>
    </div>
@endsection