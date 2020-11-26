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
                      <h4 class="header-title">Berita</h4>
                      <a href="{{ route('cms.berita.create') }}" class="btn btn-primary btn-flat">Tambah Berita</a>
                  </div>
                  <div class="single-table">
                      <div class="table-responsive">
                          <table class="table table-hover progress-table text-left">
                              <thead class="text-uppercase">
                                  <tr>
                                      <th scope="col">ID</th>
                                      <th scope="col">Judul</th>
                                      <th scope="col">Kategori</th>
                                      <th scope="col">Author</th>
                                      <th scope="col">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @php
                                    $no=1
                                @endphp
                                @foreach ($berita as $item)    
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->kategori->kategori }}</td>
                                    <td>{{ $item->author->name }}</td>
                                    <td>
                                        <a href="#">Edit</a> |
                                        <a href="#">View</a> |
                                        <a href="#" class="text-danger">Delete</a>
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