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
                        <h4 class="header-title">Halaman</h4>
                        <a href="{{ route('cms.halaman.create') }}" class="btn btn-primary btn-flat">Tambah Halaman</a>
                    </div>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-left">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @php
                                      $no=1
                                  @endphp
                                  @foreach ($halaman as $item)
                                      <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->slug }}</td>
                                        <td>
                                          aksi
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
