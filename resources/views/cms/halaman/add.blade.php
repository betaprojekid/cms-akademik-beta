@extends('cms.layout')

@section('contents')
<div class="container">
    <div class="row">
        <div class="col-8 col-md-8 col-xl-8 offset-2 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <h4 class="header-title">Tambah Halaman</h4>
                    </div>
                    <form action="{{ route('cms.halaman.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div for='judul'>Judul Halaman</div>
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
                            <label for="thumbnail">thumbnail</label>
                            <input type="file" name="thumbnail" id="thumbnail" class="form-control-file" accept="image/*">
                            <img src="" id="img-preview" width="512px" class="my-2 border shadow">
                            @error('thumbnail')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="halaman">halaman</label>
                            <textarea name="halaman" id="halaman" cols="30" rows="10"
                                class="form-control @error('halaman') is-invalid @enderror"></textarea>
                            @error('halaman')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-flat btn-primary">Simpan</button>
                            <a href="{{ route('cms.halaman.index') }}" class="btn btn-flat btn-warning">Batal</a>
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
        selector: '#halaman',
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
    $('#thumbnail').change(function(){
        readUrl(this)
    })
</script>
@endpush
