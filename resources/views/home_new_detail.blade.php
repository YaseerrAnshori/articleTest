<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Tambahkan kode CSS di sini */
        @import url('https://fonts.googleapis.com/css?family=Roboto:400,700');

        /* Gunakan font Roboto pada elemen body dan atur ketebalan teks */
        body {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            /* Reguler (normal) */
        }

        /* Atur ketebalan teks untuk teks yang harus tebal (misalnya judul) */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 700;
            /* Bold (tebal) */
        }

        .logo {
            position: absolute;
            background: url('../image/BG 1.jpg');
            width: 160px;
            height: 194vh;
            z-index: 1;
        }

        .logo img {
            margin-left: 40px;
        }

        .bar_atas {
            margin-left: 200px;
            width: 100vh;
        }

        .login {
            margin-left: 700px;
        }

        .text-cover {
            margin-left: 70px;
            margin-top: 300px;
            background: url('../image/sayur.jpeg');
        }

        .text-cover h1 {
            font-size: 70px;
        }

        .text-cover p {
            font-size: 20px;
        }

        .text-cover a {
            font-size: 30px;
        }

        .text-cover .border-text {
            border-left: 4px solid white;
            /* Menambahkan border kiri biru pada elemen h1 dan p */
            padding-left: 10px;
        }

        .dropdown-menu.bg-transparent .dropdown-item:hover {
            background-color: rgba(0, 0, 0, 0.1);
            /* Atur warna latar belakang saat hover di sini */
        }

        .article {
            margin-left: 270px;
            margin-top: 100px;
            color: green;
            border-top: 100px;
        }

        .article-trending {
            margin-top: 100px;
            margin-left: 100px;
            padding: 20px;
        }

        .text-article {
            font-weight: 100;
            font-size: 18px;
            margin-top: 40px;
        }

        .vertical-line {
            border-left: 2px solid lightgray;
            height: 100%;
            padding-left: 20px;
        }

        .vertical-line {
            font-size:
        }

        .text-trending {
            font-size: 20px;
            margin-left: 30px;
            font-weight: 900;
        }

        a {
            text-decoration: none;
            color: inherit;
            /* Menggunakan warna default yang sesuai */
        }

        .vertical-text {
            writing-mode: vertical-lr;
            transform: rotate(180deg);
            transform-origin: right bottom;
            white-space: nowrap;
            font-weight: 100;
            margin-bottom: 30px;
        }

        .btn-custom {
            background-color: #8BC53F;
            color: #fff;
            border: none;
            border-top-right-radius: 25px;
            /* Mengatur radius sudut kanan atas */
            border-bottom-right-radius: 25px;
            /* Mengatur radius sudut kanan bawah */
            padding: 10px;
        }

        .btn-custom:hover {
            background-color: #99ca59;
            /* Warna saat tombol dihover */
        }

        .input-group {
            position: relative;
        }

        .input-group .form-control {
            padding-right: 90px;
        }

        .custom-input {
            background: transparent;
            border: 1px solid #ffffff;
            border-radius: 50px 0 0 50px;
            S color: #ffffff;
            outline: none;
            padding: 10px 20px;
            transition: border-color 0.2s;
        }

        .custom-input::placeholder {
            color: #ffffff;
            /* Mengatur warna placeholder (teks yang muncul saat input kosong) menjadi putih */
        }

        .custom-input:focus {
            border-color: #8BC53F;
            /* Mengubah warna border saat input dalam keadaan fokus (focus) */
        }
    </style>
</head>


<body>
    <section>
        <div class="bg-gradient-cover">
            <div class="d-flex">
                <div class="logo pl-5">
                    <img src="../icon/logo.png" alt="" class="mt-3">
                </div>
                <div class="bar_atas">
                    <nav class="navbar navbar-expand-lg bg-transparent mt-5 ml-5"
                        style="font-size: 25px; color: white;">
                        <div class="container">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active text-black mx-5" aria-current="page"
                                            href="/">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-black mx-5" href="/">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-black mx-5" href="/">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled text-black mx-5" aria-disabled="true">Artikel</a>
                                    </li>
                                    <div class="d-flex login">
                                        <li class="nav-item mx-1 mt-2">
                                            <img src="../icon/icon - search green.png" alt="">
                                        </li>
                                        <li class="nav-item mx-1 dropdown -mb-3">
                                            <a class="nav-link" href="#" id="profileDropdown" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="../icon/icon - profile green.png" alt="">
                                            </a>
                                            <ul class="dropdown-menu bg-transparent" aria-labelledby="profileDropdown">
                                                @if (Route::has('login'))
                                                    @auth
                                                        <li><a class="dropdown-item text-white"
                                                                href="{{ route('home') }}">Dashboard</a></li>
                                                    @else
                                                        <li><a class="dropdown-item text-white"
                                                                href="{{ route('login') }}">Log
                                                                in</a></li>
                                                        @if (Route::has('register'))
                                                            <li><a class="dropdown-item text-white"
                                                                    href="{{ route('login') }}">Register</a></li>
                                                        @endif
                                                    @endauth

                                                @endif
                                            </ul>
                                        </li>




                                    </div>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div>
            <div class="bg-white article">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
                <img src="{{ asset('storage/' . $articles->thumbnail_artikel) }}" alt="" class="img-thumbnail mb-5"
                    style="width: 80%; height: 50%;">
                <h1>{{ $articles->judul_artikel }}</h1>
                <p class="text-black">{{ $articles->created_at }}</p>
                <div class="row">
                    <div class="col-md-7 d-flex">
                        <h2 style="margin-top: -20px;" class="mx-3">____</h2>
                        <div class="text-black">{!! $articles->isi_artikel !!}.</div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-white article-trending">
                            <div class="vertical-line">
                                <div style="margin-top: -130px;">
                                    <h3 class="mb-2 text-success">Trending</h3>
                                    <div class="trending">
                                        <div class="d-flex p-2">
                                            <h3 class="text-black">01</h3>
                                            <p class="text-trending text-secondary font-weight-normal">Lorem ipsum
                                                dolor sit
                                                amet
                                                consectetur adipisicing.</p>
                                        </div>
                                        <hr class="w-75">
                                    </div>
                                    <div class="trending">
                                        <div class="d-flex p-2">
                                            <h3 class="text-black">02</h3>
                                            <p class="text-trending text-secondary font-weight-normal">Lorem ipsum
                                                dolor sit
                                                amet
                                                consectetur adipisicing.</p>
                                        </div>
                                        <hr class="w-75">
                                    </div>
                                    <div class="trending">
                                        <div class="d-flex p-2">
                                            <h3 class="text-black">03</h3>
                                            <p class="text-trending text-secondary font-weight-normal">Lorem ipsum
                                                dolor sit
                                                amet
                                                consectetur adipisicing.</p>
                                        </div>
                                        <hr class="w-75">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="mt-5">
        <footer class="py-5" style="background-color:#998675">
            <div class="container">
                <div class="row text-white">
                    <div class="col-md-4" style="font-size: 25px">
                        <ul class="list-unstyled">
                            <li><a href="#">News</a></li>
                            <li><a href="#">E-shop</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4" style="font-size: 25px">
                        <ul class="list-unstyled">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Guideline</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact Us!</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h1>THE LATEST FROM US</h1>
                        <p style="font-size: 17px">Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                        <div class="input-group mt-3">
                            <input type="text" class="form-control custom-input" placeholder="Search...">
                            <button class="btn btn-custom px-4 " type="button">Sign in</button>
                        </div>



                    </div>

                </div>
            </div>
        </footer>

    </section>
    <section style="background-color: #8BC53F; padding: 1rem;">
        <div class="text-white text-center">Copyright© Lorem ipsum</div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
