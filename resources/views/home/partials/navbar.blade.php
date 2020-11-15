<header class="fixed-top header">
    <!-- top header -->
    <div class="top-header py-2 bg-white">
        <div class="container">
            <div class="row no-gutters">

                <div class="col-lg-4 text-center text-lg-left">
                    <a class="text-color mr-3" href="callto:#"><strong>CALL</strong>061 12345678</a>
                    <ul class="list-inline d-inline">
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>

                <div class="col-lg-8 text-center text-lg-right">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#">Pendaftaran Mahasiswa Baru</a></li>
                        <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#">Kontak</a></li>
                        <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#">Masuk Akademik</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar -->
    <div class="navigation w-100">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a class="navbar-brand" href="#">
                    {{-- <img src="home/images/logo.png" alt="logo"> --}}
                    STAIS Hikmatul Fadhillah
                </a>
                <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Beranda</a>
                        </li>
{{--                        <li class="nav-item @@about">--}}
{{--                            <a class="nav-link" href="about.html">Tentang Kami</a>--}}
{{--                        </li>--}}
                        <li class="nav-item dropdown view">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTentang" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Tentang Kami
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownTentang">
                                <a class="dropdown-item" href="#">Sejarah</a>
                                <a class="dropdown-item" href="#">Visi Misi</a>
                                <a class="dropdown-item" href="#">Struktur</a>
                                <a class="dropdown-item" href="#">Sertifikasi</a>
                                <a class="dropdown-item" href="#">Lokasi</a>
                            </div>
                        </li>
                        <li class="nav-item @@courses">
                            <a class="nav-link" href="courses.html">Jurusan</a>
                        </li>
                        <li class="nav-item @@blog">
                            <a class="nav-link" href="{{ route('berita.index') }}">Berita</a>
                        </li>
                        <li class="nav-item dropdown view">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Layanan
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="teacher.html">E-Learning</a>
                                <a class="dropdown-item" href="teacher-single.html">Perpustakaan</a>
                                <a class="dropdown-item" href="notice.html">Akademik</a>
                                <a class="dropdown-item" href="notice-single.html">Karir</a>
                                <a class="dropdown-item" href="research.html">Kepegawaian</a>
                                <a class="dropdown-item" href="scholarship.html">Jurnal</a>
{{--                                <a class="dropdown-item" href="course-single.html">Course Details</a>--}}
{{--                                <a class="dropdown-item" href="event-single.html">Event Details</a>--}}
{{--                                <a class="dropdown-item" href="blog-single.html">Blog Details</a>--}}
                            </div>
                        </li>
                        <li class="nav-item @@contact">
                            <a class="nav-link" href="contact.html">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Galeri</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
