@extends('cms.layout')

@section('contents')
<div class="container">
    <div class="row">
        <div class="col-8 col-md-8 col-xl-8 offset-2 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <h4 class="header-title">Tambah Berita</h4>
                    </div>
                    <form action="{{ route('berita.store') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <div for='judul'>Judul Berita</div>
                            <input type="text" name="judul" id="judul"
                                class="form-control @error('judul') is-invalid @enderror"
                                placeholder="Masukkan Judul Berita">
                            @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" id="kategori"
                                class="custom-select @error('kategori') is-invalid @enderror">
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategori as $item)
                                <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                                @endforeach
                            </select>
                            @error('kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="berita">Berita</label>
                          <textarea name="berita" id="berita" cols="30" rows="10" class="form-control @error('berita') is-invalid @enderror"></textarea>
                          @error('berita')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <a href="{{ route('berita.index') }}" class="btn btn-flat btn-warning">Batal</a>
                            <button type="submit" class="btn btn-flat btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
