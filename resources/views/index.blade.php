@extends('laymas')
@extends('wa')
@section('content')

    <style>
        .keunggulan {
    background-size: cover;
    position: relative;
    color: #000;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
}

.keunggulan-wrapper {
    padding-top: 45px;
    padding-bottom: 45px;
}

.color-overlay-keunggulan {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(234, 234, 234, 0.7); /* Membuat latar belakang transparan */
    display: flex;
    justify-content: center;
    align-items: center;
}

.img-keunggulan img {
    max-width: 100%;
    height: auto;
    border-radius: 15px; /* Opsi untuk menambahkan sudut melengkung pada gambar */
}

.text-box-keunggulan {
    background-color: white;
    padding: 10px;
    border-radius: 10px;
    margin-bottom: 10px;
    width: auto;
}


/* Penyesuaian untuk layar kecil */
@media (max-width: 768px) {
    .img-keunggulan {
        margin-bottom: 20px; /* Menambahkan margin di bawah gambar */
    }

    .icon-keunggulan {
        width: 24px; /* Mengurangi ukuran ikon */
        height: 24px;
    }

    .text-box-keunggulan {
        padding: 5px; /* Mengurangi padding pada kotak teks */
    }
}

        @media (max-width: 768px) {
            .judul-type-rumah h2 {
                font-size: 18px;
            }

            .card {
                width: 100%;
            }

            @media (max-width: 768px) {
                .card {
                    margin-bottom: 20px;
                }

                .judul-type-rumah h2,
                .keunggulan h3,
                .pilihan .judul-pilihan p {
                    font-size: 16px;
                    /* Adjust the font size on smaller screens */
                }

                .card-body p,
                .judul-lokasi h6,
                .text-card p {
                    font-size: 12px;
                    /* Smaller text in cards and titles */
                }
            }
        }

        /* Base styles for the utama section */


        @media (max-width: 768px) {
            .container-fasilitas {
                background-image: url('img/Rawa Kopi/rawakopi-3.jpg');
                height: 120vh;
            }

            .konten-fasilitas {
                padding: 2rem;
            }

            .judul-type-rumah h2 {
                font-size: 28px
            }

            .judul-type-rumah p {
                font-size: 14px
            }

            .judul-type-rumah {
                border-left: 15px solid rgb(255, 165, 0);
            }

        }


        #utama {
        position: relative;
        height: 100vh;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover; /* Cover ensures the entire viewport is filled */
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center; /* Ensures text content is centered */
        color: white; /* Adjust the text color to improve contrast against the background */
        margin-top: 90px;
    }

    /* Background images for different devices */
    @media (min-width: 1025px) { /* Desktop and larger screens */
        #utama {
            background-image: url('img/1024x576.png');
        }
    }

    @media (max-width: 1024px) { /* Tablets and mobile devices */
        #utama {
            background-image: url('img/portrait.png');
        }
    }
    .img-responsive {
    width: 100%; 
    height: auto;
    object-fit: contain;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: contain;
    
}

@media (max-width: 768px) {
    .img-responsive {
        background-image: url('img/portrait.png');
    }
}

@media (min-width: 769px) {
    .img-responsive {
        background-image: url('img/1024x576.png');
    }
}

.carousel-inner {
    border-radius: 15px; /* Menambahkan border radius */
    overflow: hidden; /* Menjaga konten agar tetap dalam border yang dibuat */
}
.carousel-item img {
    width: 100%; /* Memastikan gambar mengisi lebar penuh dari container carousel */
    height: 250px; /* Tinggi gambar yang tetap, sesuaikan sesuai dengan kebutuhan Anda */
    object-fit: cover; /* Memastikan gambar menutupi area yang tersedia tanpa mengubah rasio aspeknya */
}
    </style>
    <section id="utama">
        
    </section>
    <div class="img-responsive" style="background-image: url('img/1024x576.png');">
        <!-- Ini akan menampilkan gambar latar belakang yang responsif -->
      </div>

    
        <section id="fasilitas">
            <div class="container-fasilitas container-fluid" style="background-image: url('./img/img-fasilitas.png');">
                <div class="color-overlay-fasilitas container-fluid">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
                            <div class="fasilitas-item">
                                <img src="{{ asset('img/fasilitas-text.png') }}" class="img-fluid w-100 mb-3" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
                            <div class="fasilitas-item">
                                <img src="{{ asset('img/icon-cctv.png') }}" class="img-fluid w-100" alt="">
                                <p class="d-flex justify-content-center">CCTV</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
                            <div class="fasilitas-item">
                                <img src="{{ asset('img/icon-taman.png') }}" class="img-fluid w-100" alt="">
                                <p class="d-flex justify-content-center">Taman Anak</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
                            <div class="fasilitas-item">
                                <img src="{{ asset('img/icon-security.png') }}" class="img-fluid w-100" alt="">
                                <p class="d-flex justify-content-center">Keamanan 24 Jam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

    <section id="type-rumah">
        <div class="container-fluid" style="background-color: #092947">
            <div class="row mb-2">
                <div class="judul-type-rumah p-2">
                    <div class="row">
                        <h2>MUTIARA RESIDENCE</h2>
                    </div>
                    <div class="row">
                        <p>Jalan Kunir Raya No. 48A Kel. Pondok Cabe Udik, Kec. Pamulang, Tangerang Selatan</p>
                    </div>
                </div>
            </div>

            <div class="box-card p-3">
                <div class="row">
                    <div class="col-lg-5 p-2 d-flex justify-content-lg-center justify-content-center align-items-lg-center">
                        <div class="card" style="width: 20rem;">
                            {{-- <img src="{{ asset('img/home-1.jpg') }}" class="card-img-top" alt=""> --}}
                            <div class="card-img-top">
                                <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators1"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators1"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators1"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators1"
                                            data-bs-slide-to="3" aria-label="Slide 4"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators1"
                                            data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 1/Lantai 1.png') }}" class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item active">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 1/Living Room.png') }}" class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item active">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 1/Backyard.png') }}" class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 1/Bath Room.png') }}" class="d-block w-100"
                                                alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 1/Bedroom.png') }}" class="d-block w-100"
                                                alt="">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body" style="background-color: #eaeaea">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="box-type">
                                            <h4 class="p-1" style="font-size: 12px">Tipe Lantai 1</h4>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <p><b>Luas Bangunan (72 m2)</b></p>
                                        <p><b>Luas Tanah (84 m2)</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-2 p-2 d-flex justify-content-lg-center justify-content-center align-items-lg-center">
                        <img src="{{ asset('img/harga1m.png') }}" class="img-fluid" alt="">
                    </div>
                    <div
                        class="col-lg-5 p-2 d-flex justify-content-lg-center justify-content-center align-items-lg-center">
                        <div class="card" style="width: 20rem;">
                            {{-- <img src="{{ asset('img/home-1.jpg') }}" class="card-img-top" alt=""> --}}
                            <div class="card-img-top">
                                <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="3" aria-label="Slide 4"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="4" aria-label="Slide 5"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="5" aria-label="Slide 6"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="6" aria-label="Slide 7"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 2/Lantai 2.png') }}" class="d-block w-100"
                                                alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 2/Bath Room.png') }}" class="d-block w-100"
                                                alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 2/Backyard 2.png') }}" class="d-block w-100"
                                                alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 2/Kitchen.png') }}" class="d-block w-100"
                                                alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 2/Bedroom 1.png') }}" class="d-block w-100"
                                                alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 2/Bedroom 2.png') }}" class="d-block w-100"
                                                alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 2/Bedroom 3.png') }}" class="d-block w-100"
                                                alt="">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                            </div>
                            <div class="card-body" style="background-color: #eaeaea">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="box-type">
                                            <h4 class="p-1" style="font-size: 12px">Tipe Lantai 2</h4>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <p><b>Luas Bangunan (154 m2)</b></p>
                                        <p><b>Luas Tanah (84 m2)</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="keunggulan-wrapper" style="background-color: rgba(234, 234, 234, 0.7);">
    <section id="keunggulan">
        <div class="keunggulan">
            <div class="color-overlay-keunggulan d-flex flex-column flex-lg-row">
                <div class="img-keunggulan col-12 col-lg-6 d-flex justify-content-center align-items-center my-3">
                    <img src="img/img-keunggulan.png" class="img-fluid" alt="Keunggulan" style="max-width: 350px; max-height: 400px;">
                </div>
                <div class="deskripsi-keunggulan col-12 col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="centered-text-box text-center text-lg-start">
                        <h3 style="color: #FFA500"><b>Keunggulan</b></h3>
                        <h5 style="color: #2173C0">Pelayanan yang Kami Berikan untuk Anda</h5>
                        <p class="mb-3" style="color: #8C8B8B">Kami selalu siap membantu dengan memberikan layanan terbaik untuk Anda.</p>
                        <!-- Repeated for each feature, adjust col-2 to col-3 or col-4 if needed -->
                        <div class="text-box-keunggulan mb-2">
                            <div class="row d-flex align-items-center">
                                <div class="col-3 col-md-2">
                                    <img src="/img/icon-keunggulan.png" class="icon-keunggulan img-fluid" alt="Penawaran dan Pelayanan Terbaik">
                                </div>
                                <div class="col-9 col-md-10">
                                    <p>Penawaran dan Pelayanan Terbaik</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-box-keunggulan mb-2">
                            <div class="row d-flex align-items-center">
                                <div class="col-3 col-md-2">
                                    <img src="/img/icon-keamanan.png" class="icon-keunggulan img-fluid" alt="Keamanan 24 Jam">
                                </div>
                                <div class="col-9 col-md-10">
                                    <p>Keamanan 24 Jam</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-box-keunggulan">
                            <div class="row d-flex align-items-center">
                                <div class="col-3 col-md-2">
                                    <img src="/img/icon-3.png" class="icon-keunggulan img-fluid" alt="Harga Terbaik">
                                </div>
                                <div class="col-9 col-md-10">
                                    <p>Harga terbaik di pasaran</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

    <section id="artikel">
        <div class="pt-3" style="background-color: #092947;">
            <div class="container">
                <h4 class="text-white text-center mb-4">Artikel</h4>
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-8 col-md-4 mb-3 d-flex justify-content-center">
                        <div class="card" style="background-color: transparent; width: auto;">
                            <img src="{{ asset('img/artikel-1.png') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="{{ url('/artikel/perumahan-elit') }}">
                                    <h5 class="card-title">Perumahan Elite Terjangkau Jakarta, Mutiara Residance!</h5>
                                </a>
                                <p class="card-text" style="color: #eaeaea">09 Maret 2024</p>
                                <a href="{{ url('/artikel/perumahan-elit') }}" class="btn btn-primary">Selanjutnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-8 col-md-4 mb-3 d-flex justify-content-center">
                        <div class="card" style="background-color: transparent; width: auto;">
                            <img src="{{ asset('img/artikel-2.png') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="{{ url('/artikel/masih-ragu') }}">
                                    <h5 class="card-title">Masih Ragu? Ini Keuntungan Memiliki Rumah Cluster</h5>
                                </a>
                                <p class="card-text" style="color: #eaeaea">09 Maret 2024</p>
                                <a href="{{ url('/artikel/masih-ragu') }}" class="btn btn-primary">Selanjutnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-8 col-md-4 mb-3 d-flex justify-content-center">
                        <div class="card" style="background-color: transparent; width: auto;">
                            <img src="{{ asset('img/artikel-3.png') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="{{ url('/artikel/inspirasi-cat') }}">
                                    <h5 class="card-title">Inspirasi Warna Cat Rumah yang Cantik nan Populer</h5>
                                </a>
                                <p class="card-text" style="color: #eaeaea">09 Maret 2024</p>
                                <a href="{{ url('/artikel/inspirasi-cat') }}" class="btn btn-primary">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container-fluid p-2 d-flex justify-content-center" style="background-color: #092947;">
            <style>
                .embed-responsive {
                    position: relative;
                    width: 100%; /* Setengah dari lebar viewport */
                    padding-top:35%; /* Memperbarui ini untuk mempertahankan rasio aspek */
                    margin: auto; /* Memusatkan iframe secara horizontal */
                }
    
                .embed-responsive iframe {
                    position: absolute;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    border: none;
                    border-radius: 10px;
                }
            </style>
    
            <div class="embed-responsive">
                <iframe src="https://www.youtube.com/embed/93frsSIUNeU" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    <section id="pilihan" style="background-color: #eaeaea;">
        <div class="container-fluid">
            <div class="p-3">
                <h4 style="color: #FFA500;">Pilihan Terbaik</h4>
                <h5 style="color: black;">Residence Populer</h5>
            </div>
            <div class="row justify-content-center">
                <!-- Column setup for responsive behavior -->
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
                    <div class="card w-100">
                        <img src="{{ asset('img/pilihan-1.png') }}" class="card-img-top img-fluid" alt="Matoa 1">
                        <div class="card-body">
                            <h5 class="card-title"><b>Matoa 1</b></h5>
                            <p class="card-text" style="color: black;">Jl. Aselih No.85, Cipedak, Kec. Jagakarsa, Kota
                                Jakarta Selatan</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
                    <div class="card w-100">
                        <img src="{{ asset('img/pilihan-2.png') }}" class="card-img-top img-fluid" alt="Matoa 2">
                        <div class="card-body">
                            <h5 class="card-title"><b>Matoa 2</b></h5>
                            <p class="card-text" style="color: black;">Jl. Aselih No.111, Cipedak, Kec. Jagakarsa, Kota
                                Jakarta Selatan</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
                    <div class="card w-100">
                        <img src="{{ asset('img/pilihan-3.png') }}" class="card-img-top img-fluid" alt="Jagakarsa">
                        <div class="card-body">
                            <h5 class="card-title"><b>Jagakarsa</b></h5>
                            <p class="card-text" style="color: black;">Jl. Panjang No.24 Cipedak, Kec. Jagakarsa, Kota
                                Jakarta Selatan</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
                    <div class="card w-100">
                        <img src="{{ asset('img/pilihan-4.png') }}" class="card-img-top img-fluid" alt="Rawa Kopi">
                        <div class="card-body">
                            <h5 class="card-title"><b>Rawa Kopi</b></h5>
                            <p class="card-text" style="color: black;">Jl. Rw. Kopi, Pangkalan Jati, Cinere, Depok City,
                                West Java</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
                    <div class="card w-100">
                        <img src="{{ asset('img/pilihan-5.png') }}" class="card-img-top img-fluid" alt="Pondok Cabe">
                        <div class="card-body">
                            <h5 class="card-title"><b>Pondok Cabe</b></h5>
                            <p class="card-text" style="color: black;">Jl. Kunir No.48A, Pd. Cabe Udik, Kec. Pamulang,
                                Kota Tangerang Selatan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="lokasi-fasilitas">
        <div class="container-fluid" style="background-color: #092947">
            <div class="box-fasilitas py-3">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="judul-lokasi mb-3">
                            <h5>Lokasi dan Fasilitas Terdekat</h5>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-hospital"></i>
                                    <span class="ms-2" style="font-size: 10px;">Rs: Hermina, Mitra Keluarga, Brawijaya,
                                        Sari Asih, Puri Cinere.</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-cart"></i>
                                    <span class="ms-2" style="font-size: 10px;">Supermarket: Superindo, Tiptop,
                                        Indogrosir</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-bag"></i>
                                    <span class="ms-2" style="font-size: 10px;">Mall: The Park Sawangan, Cinere
                                        Mall</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-backpack"></i>
                                    <span class="ms-2" style="font-size: 10px;">Sekolah: Universitas Terbuka, UnPam,
                                        UPN, Kharisma Bangsa, Harapan Bangsa, MumTaza, SMUN 8, SMPN 2 Dll</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-bus-front"></i>
                                    <span class="ms-2" style="font-size: 10px;">Terminal Pondok Cabe</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-house-door"></i>
                                    <span class="ms-2" style="font-size: 10px;">Tempat ibadah: Mesjid, Gereja,
                                        Vihara</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-airplane"></i>
                                    <span class="ms-2" style="font-size: 10px;">Lapangan Terbang pondok cabe</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-bicycle"></i>
                                    <span class="ms-2" style="font-size: 10px;">Sport: lapangan golf pondok cabe, lap
                                        Tenis, Gor Badminton.</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-egg-fried"></i>
                                    <span class="ms-2" style="font-size: 10px;">Restaurant: Mc'D, KFC, Solaria, Burger
                                        King dll</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-shop"></i>
                                    <span class="ms-2" style="font-size: 10px;">Pasar Tradisional: Ps Ciputat, Ps
                                        Parung, Ps.Pondok Labu</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="100%" height="300" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=mutiara%20residence%20pondok%20cabe&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <footer
    class="text-center text-lg-start text-white"
    style="background-color: #0f1925;"
    >
<!-- Grid container -->
<div class="container p-4 pb-0">
<!-- Section: Links -->
<section class="">
  <!--Grid row-->
  <div class="row">
    <!-- Grid column -->
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">
        Mutiara Residence
      </h6>
      <p>
        Tempat Impian Hidup Bermakna, 
        di Mana Setiap Sudut Mencerminkan 
        Elegansi dan Kehangatan Rumah Anda.
      </p>
    </div>

    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p><i class="fas fa-home mr-3"></i> Jl. Kunir No.48A, Pd. Cabe Udik</p>
        <p><i class="fas fa-envelope mr-3"></i> sales@mutiaraproperty.com</p>
        <p><i class="fas fa-phone mr-3"></i> (+62) 812 1333 4441</p>
    </div>
        <!-- Grid column -->
    </div>
    <!--Grid row-->
</section>
<!-- Section: Links -->

<hr class="my-3">

<!-- Section: Copyright -->
<section class="p-3 pt-0">
  <div class="row d-flex align-items-center">
    <!-- Grid column -->
    <div class="col-md-7 col-lg-8 text-center text-md-start">
      <!-- Copyright -->
      <div class="p-3">
        © 2024 Copyright:
        <a class="text-white" href="/"
           >Mutiara Property</a
          >
      </div>
      <!-- Copyright -->
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
        <style>
            .btn-floating {
        width: 40px; /* Atur lebar */
        height: 40px; /* Atur tinggi */
        line-height: 40px; /* Atur line-height agar icon terpusat */
        padding: 0; /* Hilangkan padding default */
        text-align: center; /* Teks/icon terpusat */
        }
        </style>
      <a
         class="btn btn-outline-light btn-floating m-1 rounded-circle"
         class="text-white"
         role="button"
         href="https://fb.watch/qY2ik0avOQ/"

         ><i class="fab fa-facebook-f"></i
        ></a>

      <a
         class="btn btn-outline-light btn-floating m-1 rounded-circle"
         class="text-white"
         role="button"
         href="https://www.youtube.com/@mutiararesidence-je4hq"
         ><i class="fab fa-youtube"></i
        ></a>

      <a
         class="btn btn-outline-light btn-floating m-1 rounded-circle"
         class="text-white"
         role="button"
         href="https://www.instagram.com/mutiararesidence.id?igsh=ZDlvZzFybnpvdXlt"
         ><i class="fab fa-instagram"></i
        ></a>
    </div>
    <!-- Grid column -->
  </div>
</section>
<!-- Section: Copyright -->
</div>
<!-- Grid container -->
</footer>
@endsection
