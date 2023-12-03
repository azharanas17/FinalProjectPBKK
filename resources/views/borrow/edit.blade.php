@extends('welcome')
@section('title', 'Edit Peminjaman')

@section('isihalaman')

    <div class="my-5">
        <form name="formpinjamedit" id="formpinjamedit" action="{{ route('borrow.update', $borrow->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="staff_id" class="col-sm-4 col-form-label">Nama Staff</label>
                <div class="col-sm-8">
                    <select type="text" class="form-control" id="staff_id" name="staff_id" placeholder="Pilih Nama staff">
                        <option value={{ $borrow->staff->id ?? old('staff_id') }}>{{ $borrow->staff->nama }}</option>
                        @foreach($staff as $st)
                            <option value="{{ $st->id }}">{{ $st->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <p>
            <div class="form-group row">
                <label for="students_id" class="col-sm-4 col-form-label">Nama Siswa</label>
                <div class="col-sm-8">
                    <select type="text" class="form-control" id="students_id" name="students_id" placeholder="Pilih Nama Siswa">
                        <option value={{ $borrow->students->id ?? old('students_id') }}>{{ $borrow->students->nama }}</option>
                        @foreach($student as $s)
                            <option value="{{ $s->id }}">{{ $s->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <p>
            <div class="form-group row">
                <label for="books_id" class="col-sm-4 col-form-label">Judul Buku</label>
                <div class="col-sm-8">
                    <select type="text" class="form-control" id="books_id" name="books_id" placeholder="Pilih Judul Buku">
                        <option value={{ $borrow->books->id ?? old('books_id') }}>{{ $borrow->books->judul }}</option>
                        @foreach($book as $bk)
                            <option value="{{ $bk->id }}">{{ $bk->judul }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <p>
            <div class="modal-footer">
                <a href="{{ route('borrow.index') }}" class="btn btn-primary">Tutup</a>
                <button type="submit" name="pinjamedit" class="btn btn-success">Edit</button>
            </div>
        </form>
    </div>
@endsection