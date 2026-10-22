<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="d-flex flex-column min-vh-100">
    {{-- Header --}}
    <h1>Selamat Datang di Web Personalku!</h1>
    {{-- Navigasi --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Web Personal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/beranda">Beranda</a>
                    <a class="nav-link" href="/profil">Profil</a>
                    <a class="nav-link" href="/biodata">Biodata</a>
                </div>
            </div>
        </div>
    </nav>
    {{-- Content --}}
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Hello Guyss!</h1>
                        <img src="{{ asset('images/imyut.jpg') }}" class="img-thumbnail float-start me-3 mb-2"
                            alt="..." width="200" height="200">
                        <p>
                            Setiap karya memiliki cerita, dan di sinilah tempat di mana ide-ide saya hidup. Sebagai
                            seorang yang
                            berdedikasi di bidang kreatif, saya percaya bahwa sebuah karya yang baik lahir dari gabungan
                            rasa
                            ingin tahu, detail yang presisi, dan eksekusi yang matang.Melalui website personal ini, saya
                            mengundang Anda untuk melihat bagaimana saya :
                        </p><br><br><br><br>
                        <ul>
                            <li>Merancang Konsep : Mengubah pemikiran abstrak menjadi rencana yang terstruktur.</li>
                            <li>Mengeksekusi Ide : Membangun solusi visual dan fungsional yang berdampak.</li>
                            <li>Berbagi Cerita : Mendokumentasikan proses belajar dan pengalaman berharga.</li>
                        </ul>
                    </div>
                    <div class="col-md-4 ps-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <h4>Link Terkait</h4>
                                <br><br>
                                <a class="icon-link icon-link-hover"
                                    style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);"
                                    href="https://s.id/Profil-Risma">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="bi" viewBox="0 0 16 16"
                                        aria-hidden="true">
                                        <path
                                            d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                        <path
                                            d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                    </svg>
                                    Profil Risma
                                </a><br><br><br>
                                <a class="icon-link icon-link-hover"
                                    style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);"
                                    href="https://youtu.be/gS9o1FAszdk?si=Oplkq35r2LUmepFT">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="bi" viewBox="0 0 16 16"
                                        aria-hidden="true">
                                        <path
                                            d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                        <path
                                            d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                    </svg>
                                    Lagu
                                </a><br><br><br>

                                <a class="icon-link icon-link-hover"
                                    style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);"
                                    href="https://sikabar.smkpgriwlingi.sch.id/index.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="bi" viewBox="0 0 16 16"
                                        aria-hidden="true">
                                        <path
                                            d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                        <path
                                            d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                    </svg>
                                    Sikabar
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- Footer --}}
    <nav class="navbar fixed-bottom bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Web Personal &copy; 2026</a>
            <a class="navbar-brand" href="#">&copy; Dikembangkan oleh Kharisma dan Nikita</a>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
