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
                    <form action="{{ route('cms.berita.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
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
                            <label for="gambar_berita">Gambar Berita</label>
                            <input type="file" name="gambar_berita" id="gambar_berita" class="form-control-file" accept="image/*">
                            <img src="" id="img-preview" width="512px" class="my-2 border shadow">
                            @error('gambar_berita')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="berita">Berita</label>
                            <textarea name="berita" id="berita" cols="30" rows="10"
                                class="form-control @error('berita') is-invalid @enderror"></textarea>
                            @error('berita')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-flat btn-primary">Simpan</button>
                            <a href="{{ route('cms.berita.index') }}" class="btn btn-flat btn-warning">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('plugins') }}/tinymce/jquery.tinymce.min.js"></script>
<script src="{{ asset('plugins') }}/tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: '#berita',
        plugins: 'advlist link image lists',
        // width: 600,
        height: 500,
    });

</script>
{{-- image preview --}}
<script>
    function readUrl(input){
        if(input.files && input.files[0]){
            let reader = new FileReader()

            reader.onload = function(e){
                $('#img-preview').attr('src', e.target.result)
            }
            reader.readAsDataURL(input.files[0])
        }
    }
    $('#gambar_berita').change(function(){
        readUrl(this)
    })
</script>
@endpush
