@extends('cms.layout')

@section('contents')
<div class="container">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <h4 class="header-title">Kategori Berita</h4>
                        <a href="#" class="btn btn-primary btn-flat">Tambah Kategori Berita</a>
                    </div>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Kagegori</th>
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
                                      <td>
                                          <ul class="d-flex justify-content-center">
                                              <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i> Ubah</a></li>
                                              <li><a href="#" class="text-danger"><i class="ti-trash"></i>Hapus</a></li>
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
