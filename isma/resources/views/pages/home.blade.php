<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <header class="header">
        <div class="container">
            <div class="navbar d-flex justify-content-between">
            <ul class="nav text-danger">
                    <li class="nav-item ">
                        <a class="nav-link text-danger" href="{{url('/')}}">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="{{url('/bisnis')}}">Bisnis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="{{url('/about')}}">Tentang Indosat Ooredoo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="{{url('/investor')}}">Investor Relations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="{{url('/news')}}">News</a>
                    </li>
                </ul>
                <ul class="nav text-danger">
                    <li class="nav-item ">
                        <a class="nav-link text-danger" href="#">English</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="#">Bahasa Indonesia</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <section class="satu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="navigasi d-flex justify-content-between">
                        <img src="assets/img/logo.svg" alt="" width="100px">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse mr-auto" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link text-danger" href="{{url('/product')}}">Produk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-danger href=" #">Kenapa IM3 Ooredoo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-danger" href="#">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-danger href=" #">MyIM3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-danger href=" #">Entertainment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-danger href=" #">Pesen Kartu Perdana</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav menu-kanan l-5 me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link text-danger href=" #">Cek Pulsa dan Kuota Kamu Masuk Ke MyIM3</a>
                                </li>
                                <li class="nav-item rounded-circle">
                                    <img src="assets/img/3.2.png" class="rounded-circle" alt="" width="30px">
                                </li>
                                <li class="nav-item">
                                    <img src="assets/img/searchthumb.png" alt="" width="30px">
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/banner2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/banner2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/banner2.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>

    </section>
    <section class="dua bg-light">
        <div class="container pt-5">
            <div class="row pt-5">
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/img/2.1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Beli Kartu Perdana dan Dapatkan Bonusnya</h5>
                            <p class="card-text">Fitur baru menawarkan membeli Kartu Perdana secara online dan
                                dikirim
                                langsung ke pelanggan.</p>
                            <a href="#" class="btn btn-danger ">Cari Tahu</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/img/2.2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Promo Universitas Nexford</h5>
                            <p class="card-text">Potongan 20% biaya kuliah + Bonus 20GB/bulan</p>
                            <a href="#" class="btn btn-danger">Cari Tahu</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/img/2.3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Freedom Combo</h5>
                            <p class="card-text">Dengan kuota besar hingga 60GB dan nelpon GRATIS ke semua operator
                                bikin komunikasi dengan sahabat tetap lancar di mana aja, kapan aja!</p>
                            <a href="#" class="btn btn-danger">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/img/2.4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Freedom U</h5>
                            <p class="card-text">Kini, paket Unlimited berganti nama menjadi Freedom U.</p>
                            <a href="#" class="btn btn-danger">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dua bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img src="assets/img/2.3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">#FreedominHarimu dengan #FreedomInternet</h5>
                            <p class="card-text">Kamu. IYA KAMU! Siapa pun kamu yang nonton video ini, saatnya bebasin
                                harimu untuk internetan dengan kuota Freedom Internet!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="assets/img/2.3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Prime Paket Pascabayar dengan Kuota Besar</h5>
                            <p class="card-text">Prime memberikan kuota besar internet dan nelpon sepuasnya, bisa
                                bebaskan dirimu dari rutinitas yang menghambat aktivitas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="assets/img/2.3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Dapatkan Uang Tambahan dengan Kios myIM3</h5>
                            <p class="card-text">Buka peluangmu dengan Kios myIM3 untuk dapatkan uang tambahan dari
                                berjualan pulsa & Paket Data untuk orang sekitar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tiga pt-5 bg-light">
        <div class="container bg-white py-5 ">
            <div class="row">
                <div class="col-sm-3">
                    <img src="assets/img/3.1.png" alt="" width="100px">
                </div>
                <div class="col-sm-6">
                    <h1>Belum Pakai IM3 Ooredoo?</h1>
                    <p>Pulsa Safe, bebas internetan pulsa aman</p>
                </div>
                <div class="col-sm-3">
                    <a href="" class="btn btn-danger">Cari Tahu</a>
                    <a href="" class="btn btn-danger">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        <div class="container bg-white py-5 mt-5">
            <div class="row">
                <div class="col-sm-3">
                    <img src="assets/img/3.2.png" alt="" width="100px">
                </div>
                <div class="col-sm-4">
                    <h1>Semuanya jadi simpel</h1>
                    <p>Download Sekarang</p>
                </div>
                <div class="col-sm-4">
                    <p>Dapatkan Sekarang</p>
                    <img src="assets/img/3.2.1.png" alt="" width="100px">
                    <img src="assets/img/3.2.2.png" alt="" width="100px">
                    <img src="assets/img/3.3.3.png" alt="" width="100px">
                </div>
            </div>
        </div>
        <div class="container py-5 mt-5">
            <div class="row">
                <div class="col-sm-4">
                    <h2>Jangkauan jaringan</h2>
                    <p>Jaringan 4G terbaik di Indonesia dalam genggaman.</p>
                    <a href="#">Lihat Jangkauannya</a>
                </div>
                <div class="col-sm-4">
                    <h2>Lokasi gerai</h2>
                    <p>Mari berbincang dengan kami di gerai terdekat.</p>
                    <a href="#">Temukan Grai</a>
                </div>
                <div class="col-sm-4">
                    <h2>Bantuan & dukungan</h2>
                    <a href="#">Kontak Kami</a>
                </div>
            </div>
        </div>
        <div class="daftar">
            <div class="container-fluid text-center py-3">
                <span>Daftar untuk tetap ter-update</span>
                <input type="text">
            </div>
        </div>
        <div class="container pt-5">
            <h5>IM3 Ooredoo Membebaskan Internet Untuk Kamu</h5>
            <p>Di IM3 Ooredoo, kami percaya perubahan. Perubahan untuk membebaskan internet sehingga semua orang bisa
                online dengan akses cepat, terjangkau, punya banyak kuota dan tanpa cemas. IM3 Ooredoo menawarkan paket
                Freedom Combo dan Freedom Mini. Dengan Freedom Combo kamu akan mendapatkan paket komplit dengan banyak
                benefit. Freedom Combo adalah paket lengkap terbaik, tanpa batasan waktu, kuota besar di semua jaringan.
                Sedangkan Freedom Mini memberikan kamu UNLIMITED Internetan, Nelpon dan SMS ke sesama pelanggan IM3
                Ooredoo.</p>
            <a href="" class="text-center d-block text-danger">Selengkapnya </a>
        </div>
        <div class="medsos bg-danger">
            <div class="container-fluid text-center py-3">
                <p>Media Sosial</p>
            </div>
        </div>
    </section>
    <footer class="footer bg-dark text-light">
        <div class="row">
            <div class="col-sm-4">
                <ul>
                    <li>Bantuan</li>
                    <li>Promo</li>
                    <li>Tanya-Jawab</li>
                    <li>Syarat dan Ketentuan</li>
                    <li>Kebijakan Privasi</li>
                    <li>Peta Cakupan Jaringan</li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul>
                    <li>Hubungan Investor</li>
                    <li>Indosat Ooredoo</li>
                    <li>Ideabox</li>
                    <li>Rilis Personal</li>
                    <li>Karir</li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul>
                    <li>Kontak Kami</li>
                    <li>Informasi Kontak</li>
                    <li>Temukan Gerai</li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>
