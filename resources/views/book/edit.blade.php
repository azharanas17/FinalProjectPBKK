@extends('welcome')
@section('title', 'Edit Buku')

@section('isihalaman')

    <div class="my-5">
        <form name="formbukuedit" id="formbukuedit" action="{{ route('book.update', $book->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="kode" class="col-sm-4 col-form-label">Kode Buku</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukan Kode Buku"
                    value="{{ $book->kode ?? old('kode') }}">
                </div>
            </div>

            <p>
            <div class="form-group row">
                <label for="judul" class="col-sm-4 col-form-label">Judul Buku</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul Buku"
                    value="{{ $book->judul ?? old('judul') }}">
                </div>
            </div>

            <p>
            <div class="form-group row">
                <label for="pengarang" class="col-sm-4 col-form-label">Nama Pengarang</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Masukan Nama Pengarang"
                    value="{{ $book->pengarang ?? old('pengarang') }}">
                </div>
            </div>

            <p>
            <div class="form-group row">
                <label for="penerbit" class="col-sm-4 col-form-label">Penerbit</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukan Nama Penerbit"
                    value="{{ $book->penerbit ?? old('penerbit') }}">
                </div>
            </div>

            <p>
            <div class="modal-footer">
                <a href="{{ route('book.index') }}" class="btn btn-primary">Tutup</a>
                <button type="submit" name="bukutambah" class="btn btn-success">Edit</button>
            </div>
        </form>
    </div>
@endsection