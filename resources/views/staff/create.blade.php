@extends('welcome')
@section('title', 'Tambah Staff')

@section('isihalaman')

    <div class="my-5">
        <form name="formstafftambah" id="formstafftambah" action="{{ route('staff.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Staff</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Staff">
                </div>
            </div>

            <p>
            <div class="form-group row">
                <label for="hp" class="col-sm-4 col-form-label">No HP</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="hp" name="hp" placeholder="Masukan Nomer HP">
                </div>
            </div>

            <p>
            <div class="modal-footer">
                <a href="{{ route('staff.index') }}" class="btn btn-primary">Tutup</a>
                <button type="submit" name="stafftambah" class="btn btn-success">Tambah</button>
            </div>
        </form>
    </div>
@endsection