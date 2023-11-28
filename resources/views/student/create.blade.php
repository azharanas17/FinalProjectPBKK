@extends('welcome')
@section('title', 'Tambah Siswa')

@section('isihalaman')

    <div class="my-5">
        <form name="formtambahsiswa" id="formtambahsiswa" action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Siswa</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Siswa">
                </div>
            </div>

            <p>
            <div class="form-group row">
                <label for="nrp" class="col-sm-4 col-form-label">Nomer Register Pokok</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Masukan Nomer Register Pokok">
                </div>
            </div>

            <p>
            <div class="form-group row">
                <label for="kelas" class="col-sm-4 col-form-label">Kelas</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukan Kelas">
                </div>
            </div>

            <p>
            <div class="form-group row">
                <label for="hp" class="col-sm-4 col-form-label">No HP</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="hp" name="hp" placeholder="Masukan No HP">
                </div>
            </div>

            <p>
            <div class="modal-footer">
                <a href="{{ route('student.index') }}" class="btn btn-primary">Tutup</a>
                <button type="submit" name="studenttambah" class="btn btn-success">Tambah</button>
            </div>
        </form>
    </div>
@endsection