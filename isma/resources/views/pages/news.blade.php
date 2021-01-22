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
                        <a class="nav-link text-danger" href="#">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="#">Bisnis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="#">Tentang Indosat Ooredoo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="#">Investor Relations</a>
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
                                    <a class="nav-link text-danger" href="#">Produk</a>
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

        </div>
    </section>
    <section>
        <div class="container">
            <div class="row py-5">
                <h2 class="pb-5">Article Terbaru</h2>
                @foreach ($items as $item)
                <div class="col-sm-4 mb-5">
                    <img src="{{Storage::url($item->image)}}" alt="image" class="img-thumbnail " />
                </div>
                <div class="col-sm-8 mb-5">
                    <h6>{{$item->categories}} . {{$item->date}}</h6>
                    <h3>{{$item->title}}</h3>
                    <p>{{$item->text}}</p>
                </div>
                @endforeach
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
                    <li>News</li>
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
