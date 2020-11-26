<div class="header-area header-bottom">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-9  d-none d-lg-block">
              <div class="horizontal-menu">
                  <nav>
                      <ul id="nav_menu">
                          <li>
                              <a href="#">
                                  <i class="ti-dashboard"></i>
                                  <span>Beranda</span>
                              </a>
                              {{-- <ul class="submenu">
                                  <li><a href="index.html">ICO dashboard</a></li>
                                  <li><a href="index2.html">Ecommerce dashboard</a></li>
                                  <li><a href="index3.html">SEO dashboard</a></li>
                              </ul> --}}
                          </li>
                          <li class="active">
                              <a href="javascript:void(0)">
                                  <i class="ti-layout-sidebar-left"></i>
                                  <span>Berita</span>
                              </a>
                              <ul class="submenu">
                                  <li class="active"><a href="{{ route('cms.berita.index') }}">Semua Berita</a></li>
                                  <li><a href="#">Pengumuman</a></li>
                                  <li><a href="{{ route('cms.kategori-berita.index') }}">Kategori Berita</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href="javascript:void(0)"><i class="ti-pie-chart"></i><span>Halaman</span></a>
                              <ul class="submenu">
                                  <li><a href="#">Semua Halaman</a></li>
                                  <li><a href="#">Tambah Halaman</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href="javascript:void(0)"><i class="ti-pie-chart"></i><span>Pengguna</span></a>
                              <ul class="submenu">
                                  <li><a href="#">Semua Pengguna</a></li>
                                  <li><a href="#">Tambah Pengguna</a></li>
                                  <li><a href="#">Profil Saya</a></li>
                              </ul>
                          </li>
                          <li>
                            <a href="javascript:void(0)"><i class="ti-pie-chart"></i><span>Pengaturan Web</span></a>
                            <ul class="submenu">
                                <li><a href="#">Slider</a></li>
                                <li><a href="#">Logo</a></li>
                                <li><a href="#">Section</a></li>
                                <li><a href="#">Sosial Media</a></li>
                                <li><a href="#">Footer</a></li>
                            </ul>
                        </li>
                          <li>
                              <a href="javascript:void(0)"><i class="ti-pie-chart"></i><span>Pengaturan</span></a>
                              <ul class="submenu">
                                  <li><a href="#">Semua Pengguna</a></li>
                                  <li><a href="#">Tambah Pengguna</a></li>
                                  <li><a href="#">Profil Saya</a></li>
                              </ul>
                          </li>

                          {{-- <li class="mega-menu">
                              <a href="javascript:void(0)"><i class="ti-palette"></i><span>UI
                                      Features</span></a>
                              <ul class="submenu">
                                  <li><a href="accordion.html">Accordion</a></li>
                                  <li><a href="alert.html">Alert</a></li>
                                  <li><a href="badge.html">Badge</a></li>
                                  <li><a href="button.html">Button</a></li>
                                  <li><a href="button-group.html">Button Group</a></li>
                                  <li><a href="cards.html">Cards</a></li>
                                  <li><a href="dropdown.html">Dropdown</a></li>
                                  <li><a href="list-group.html">List Group</a></li>
                                  <li><a href="media-object.html">Media Object</a></li>
                                  <li><a href="modal.html">Modal</a></li>
                                  <li><a href="pagination.html">Pagination</a></li>
                                  <li><a href="popovers.html">Popover</a></li>
                                  <li><a href="progressbar.html">Progressbar</a></li>
                                  <li><a href="tab.html">Tab</a></li>
                                  <li><a href="typography.html">Typography</a></li>
                                  <li><a href="form.html">Form</a></li>
                                  <li><a href="grid.html">grid system</a></li>
                              </ul>
                          </li> --}}
                        
                          {{-- <li>
                              <a href="javascript:void(0)"><i class="ti-slice"></i><span>icons</span></a>
                              <ul class="submenu">
                                  <li><a href="fontawesome.html">fontawesome icons</a></li>
                                  <li><a href="themify.html">themify icons</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href="javascript:void(0)"><i class="fa fa-table"></i>
                                  <span>Tables</span></a>
                              <ul class="submenu">
                                  <li><a href="table-basic.html">basic table</a></li>
                                  <li><a href="table-layout.html">table layout</a></li>
                                  <li><a href="datatable.html">datatable</a></li>
                              </ul>
                          </li> --}}
                          {{-- <li>
                              <a href="#">
                                  <i class="ti-map-alt"></i> 
                                  <span>teks</span>
                              </a>
                          </li> --}}
                      </ul>
                  </nav>
              </div>
          </div>
          <!-- nav and search button -->
          <div class="col-lg-3 clearfix">
              {{-- <div class="search-box">
                  <form action="#">
                      <input type="text" name="search" placeholder="Search..." required>
                      <i class="ti-search"></i>
                  </form>
              </div> --}}
              <div class="float-right">
                  <a href="#" class="btn btn-primary btn-large btn-flat">Logout</a>
              </div>
          </div>
          <!-- mobile_menu -->
          <div class="col-12 d-block d-lg-none">
              <div id="mobile_menu"></div>
          </div>
      </div>
  </div>
</div>