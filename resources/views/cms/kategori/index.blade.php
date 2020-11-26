@extends('cms.layout')

@section('contents')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12 col-sm-12 mt-4">
            @include('components.alert')
        </div>
        <div class="col-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <h4 class="header-title">Kategori Berita</h4>
                        <a href="{{ route('cms.kategori-berita.create') }}" class="btn btn-primary btn-flat">Tambah Kategori Berita</a>
                    </div>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-left">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @php
                                      $no=1
                                  @endphp
                                  @foreach ($categories as $category)    
                                  <tr>
                                      <th scope="row">{{ $no++ }}</th>
                                      <td>{{ $category->kategori }}</td>
                                      <td>{{ $category->slug }}</td>
                                      <td>
                                          <ul class="d-flex">
                                              <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i> Ubah</a></li>
                                              <li>
                                                  <a href="{{ route('cms.kategori-berita.destroy', $category->id) }}" class="text-danger mr-1">
                                                      <i class="ti-trash"></i>Hapus
                                                    </a>
                                            </li>
                                          </ul>
                                      </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('plugins') }}/sweetalert2/sweetalert2.min.css">
@endsection

@push('scripts')
    <script src="{{ asset('plugins') }}/sweetalert2/sweetalert2.all.min.js"></script>
@endpush
