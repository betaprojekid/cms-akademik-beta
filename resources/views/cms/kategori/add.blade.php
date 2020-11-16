@extends('cms.layout')

@section('contents')
<div class="container">
  <div class="row">
      <div class="col-6 col-md-6 col-xl-6 offset-4 mt-5">
          <div class="card">
              <div class="card-body">
                  <div class="d-flex justify-content-between mb-2">
                      <h4 class="header-title">Tambah Kategori Berita</h4>
                  </div>
                  <form action="{{ route('kategori-berita.store') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="form-group">
                      <label for="kategori">Kategori</label>
                      <input type="text" class="form-control @error('kategori') is-invalid @enderror"" name="kategori" id="kategori" placeholder="masukkan nama kategori">
                      @error('kategori')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <a href="{{ route('kategori-berita.index') }}" class="btn btn-flat btn-warning">Batal</a>
                      <button type="submit" class="btn btn-flat btn-primary">Simpan</button>
                    </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection

