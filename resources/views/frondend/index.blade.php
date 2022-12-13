@extends('Layouts.page')
@section('content')
    <!-- ===== LOADING START ===== -->
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
        <div class="dot3"></div>
    </div>
    <!-- ===== LOADING END ===== -->

    <!-- ===== COVER START ===== -->
    <div class="cover" id="home">
        <nav>
            <a class="penaku" href="#home"><img src="assets/image/PENA.png" alt=""><span>PENA BAZAR</span></a>
            <i class="fa-solid fa-bars text-white font-25 nav-icon" onclick="showMiniNavbar()"></i>
            <ul>
                <li><a class="active" href="#home">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#menu">menu</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>

        <div class="hero">
            <img src="assets/image/cover-food-1.jpg" class="cover-1">
            <img src="assets/image/cover-food-1.jpg" class="cover-2">
            <div class="filter-shadow"></div>
        </div>

        <div class="text-cover" id="coverSubTitle">
            <span>
                programing, engineering, & networking adhi guna
            </span>
            <h1 id="coverHeadTitle">PENA</h1>
        </div>
    </div>
    <!-- ===== COVER END ===== -->


    <!-- ===== STICKY NAVBAR START ===== -->
    <div class="sticky-navbar">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a class="penaku" href="#home"><img src="assets/image/PENA.png" alt=""><span>PENAKU</span></a>
                <i class="fa-solid fa-bars text-white font-25 nav-icon" onclick="showMiniNavbar()"></i>
                <ul>
                    <li><a href="#home">home</a></li>
                    <li><a href="#about">about</a></li>
                    <li><a href="#menu">menu</a></li>
                    <li><a href="#contact">contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ===== STICKY NAVBAR END ===== -->


    <!-- ===== MINI NAVBAR START ===== -->
    <div class="shadow-mini-navbar">
        <div class="mini-navbar">
            <div>
                <ul>
                    <li><a href="#home" onclick="hideMiniNavbar()">home</a></li>
                    <li><a href="#about" onclick="hideMiniNavbar()">about</a></li>
                    <li><a href="#menu" onclick="hideMiniNavbar()">menu</a></li>
                    <li><a href="#contact" onclick="hideMiniNavbar()">contact</a></li>
                    <li><i class="fa-solid fa-xmark text-white font-30 mt-5 pointer" onclick="hideMiniNavbar()"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ===== MINI NAVBAR END ===== -->

    <div class="content">
        <div class="content-area">
            <!-- ===== ABOUT START ===== -->
            <section id="about" class="container gap-5" data-aos="fade-up" data-aos-duration="1000">
                <div class="pt-5 mt-5 mb-5 pb-3 obj-1"></div>
                <div class="about-group">
                    <div class="w-50-100">
                        <img src="assets/element/food.svg" alt="">
                    </div>
                    <div class="w-50-100">
                        <h1 class="fw-700">ABOUT PENA BAZAR</h1>
                        <p class="about-pena-desc">
                            Pena Bazar adalah Website yang dibuat dan dikelola oleh organisasi Pena untuk menjadi platform
                            pembelian dan pemesanan berbagai macam jenis makanan & minuman.
                        </p>
                    </div>
                </div>
            </section>
            <br> <br> <br>
            <!-- <div class="about-bottom"></div> -->
            <!-- ===== ABOUT END ===== -->

            <div class="pena">
                <div class="container pena-group">
                    <div class="card my-card pena-card">
                        <div class="card-body text-center">
                            <i class="fas fa-hamburger font-40"></i>
                            <br> <br>
                            <h3>Makanan</h3>
                            <p>Tersedia berbagai jenis makanan yang enak, mengenyangkan, bergizi dan murah dengan harga yang
                                bersahabat bagi mahasiswa dan dijamin hati senang perut kenyang.</p>
                        </div>
                    </div>
                    <div class="card my-card pena-card">
                        <div class="card-body text-center">
                            <i class="fas fa-wine-glass-alt font-40"></i>
                            <br> <br>
                            <h3>Minuman</h3>
                            <p>Haus? berbagai macam minuman yang tersedia di pena bazar dijamin akan menyegarkan dan
                                melegakan dahaga kamu dengan harga dan kualitas yang tentunya sangat bersahabat.</p>
                        </div>
                    </div>
                    <div class="card my-card pena-card">
                        <div class="card-body text-center">
                            <i class="fas fa-box-tissue font-40"></i>
                            <br> <br>
                            <h3>Paket</h3>
                            <p>Berbagai macam pilihan paket menu yang berisi berbagai jenis makanan dan minuman di dalamnya,
                                dengan keuntungan yang lebih murah. </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ===== EVENT START ===== -->
            <section class="join text-center" id="event">
                <div class="my-shadow d-flex align-items-center justify-content-center">
                    <div class="text-white">
                        <h3 class="font-60 fw-700 join-head" data-aos="fade-up" data-aos-duration="1000">Want to know more
                            about Pena?</h3>
                        <p class="font-25 fw-500 join-subtitle" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="100">
                            come visit PENA official website.
                        </p>
                        <a href="http://penaku.tech">
                            <button class="button btn-blue" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="200">Klik Here</button>
                        </a>
                    </div>
                </div>
            </section>
            <!-- ===== EVENT END ===== -->


            <!-- ===== MENU ===== -->

            <div class="member">
                <main class="menu">
                    <div class="container pena-group" id="menu">
                        <div class="row justify-content-center">
                            @foreach ($menu as $menus)
                                <div class="card m-3" style="width: 18rem;">
                                    <div class="card-body text-justify">
                                        <img src="{{ asset('uploads\menu') }}/{{ $menus->gambar }}" class="img-fluid">
                                        <h5 class="card-title mt-3"><strong>Menu:</strong> {{ $menus->nama_menu }}</h5>
                                        <p class="card-text">
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <h5><strong>Harga:</strong> Rp.{{ number_format($menus->harga) }}</h5>
                                                <h5><strong>Deskripsi :</strong></h5>
                                                <p>{{ $menus->description }}</p>
                                            </div>
                                        </div>
                                        </p>

                                    </div>
                                    <a href="{{ url('pesan') }}/{{ $menus->id }}" class="btn btn-primary mb-4"><i
                                            class="fa fa-shopping-cart"></i> Pesan</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </main>
            </div>

            <!-- ===== FOOTER START ===== -->
            <footer>
                <section id="contact" class="container">
                    <div class="footer-group">
                        <div class="w-100">
                            <div class="footer-logo-name">
                                <div class="logo">
                                    <img src="assets/image/PENA.png" alt="">
                                </div>
                                <h3 class="mt-2">PENA</h3>
                            </div>
                            <div class="font-14 footer-text">
                                Tetap jaga kesehatan, jangan lupa makan tiga kali sehari dan jangan lupa Titik Koma
                            </div>
                        </div>
                        <div class="w-100 d-flex justify-content-center">
                            <div>
                                <span class="fw-bold letter-1">Social Media</span>
                                <div class="sosmed fw-light font-25 mt-2">
                                    <span>
                                        <a href="https://facebook.com">
                                            <i class="fa-brands fa-square-facebook"></i>
                                        </a>
                                    </span>
                                    <span>
                                        <a href="https://instagram.com">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </span>
                                    <span>
                                        <a href="https://youtube.com">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    </span>
                                    <span style="margin-right: 0px;">
                                        <a href="https://tiktok.com">
                                            <i class="fa-brands fa-tiktok"></i>
                                        </a>
                                    </span>
                                </div>
                                <br>
                                <span class="fw-bold letter-1">Contact</span>
                                <div class="fw-light sosmed contact">
                                    <span>
                                        <a href="">
                                            <i class="fa-brands fa-whatsapp"></i>
                                            <span class="klik-me">Click Me!</span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 footer-nav">
                            <div>
                                <span class="fw-bold letter-1">Navigation</span>
                                <div class="fw-light d-flex flex-column mt-2">
                                    <span><a href="#home">Home</a></span>
                                    <span><a href="#about">About</a></span>
                                    <span><a href="#menu">Menu</a></span>
                                    <span><a href="#contact">Contact</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </footer>
            <!-- ===== FOOTER END ===== -->


        </div>
    </div>
@endsection
