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
            height: 195vh;
            z-index: 1;
        }

        .logo img {
            margin-left: 40px;
        }

        .bg-cover {
            background: url('../image/salad.jpg');
            background-size: cover;
            min-height: 100vh;
        }

        .bg-gradient-cover {
            position: relative;
            min-height: 100vh;
        }

        .bg-gradient-cover::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('../image/gradient.png');
            background-size: cover;
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
            margin-top: 400px;
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
            margin-left: 200px;
            margin-top: 100px;
            color: green;
            font-weight: bold;
            border-top: 100px;
            width: 80%;
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
            /* Mengatur radius sudut kanan */
            color: #ffffff;
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
            <div class="d-flex bg-cover">
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
                                        <a class="nav-link active text-white mx-5" aria-current="page"
                                            href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white mx-5" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white mx-5" href="#">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled text-white mx-5" aria-disabled="true">Artikel</a>
                                    </li>
                                    <div class="d-flex login">
                                        <li class="nav-item mx-1 mt-2">
                                            <img src="../icon/iconsearch.png" alt="">
                                        </li>
                                        <li class="nav-item mx-1 dropdown -mb-3">
                                            <a class="nav-link" href="#" id="profileDropdown" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="../icon/iconprofile.png" alt="">
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

                    <div class="text-white text-cover mb-4">
                        <div class="border-text">
                            <h1>Lorem Ipsum Dolor</h1>
                            <h1>Adipiscing Elit Sit Amet</h1>
                            <p>20 June 2021 • By Minako</p>
                        </div>
                        <a href=""
                            class="btn bg-transparent border border-3 rounded-0 text-white py-3 px-5 mt-4 ">Read
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="d-flex">
            <div class="bg-white article">
                <h1>THE LATEST_____</h1>
                <div class="mt-5">
                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-md-6">
                                <a href="{{ route('article.detail', $article->id) }}" class="d-flex">
                                    <div class="article-date me-3">
                                        <p class="vertical-text text-black">{{ $article->created_at }}</p>
                                    </div>
                                    <div class="">
                                        @if ($article->thumbnail_artikel)
                                            <img src="{{ asset('storage/' . $article->thumbnail_artikel) }}"
                                                class="img-thumbnail mb-4" alt="Thumbnail">
                                        @endif
                                        <h3>{{ $article->judul_artikel }}</h3>
                                        <div class="d-flex">
                                            <h1>____</h1>
                                            <div class="mx-3 text-black text-article">{!! $article->isi_artikel !!}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="bg-white article-trending">
                <div class="mt-5">
                    <div class="">
                        <div class="">
                            <div class="vertical-line">
                                <div class="">
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

    <section style="mt-4">
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
