<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office Tutorials</title>
    <!-- Bootstrap Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Bootstrap End -->
    <!-- Boxicons Start -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Boxicons End -->
    <!-- CSS start -->
    <link rel="stylesheet" href="./src/styles/tutorial.css">
    <!-- CSS end -->

    <link rel="shortcut icon" href="./assets/logo 2.png" type="image/x-icon">

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- JQUERY -->
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid navbar-container">
            <a class="navbar-brand" href="./index.php" onclick="localStorage.removeItem('kategori');">
                <img src="./assets/logo 2.png" alt="Office Tutorials" width="80" height="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="index.php"
                        onclick="localStorage.removeItem('kategori')">Tutorial</a>
                    <a class="nav-link" href="./diskusi/index.php"
                        onclick="localStorage.removeItem('kategori')">Diskusi</a>
                    <a class="nav-link"
                        href="https://support.microsoft.com/en-us/office/download-and-install-or-reinstall-microsoft-365-or-office-2021-on-a-pc-or-mac-4414eaaf-0478-48be-9c42-23adc4716658"
                        target="_blank" onclick="localStorage.removeItem('kategori')">Unduh</a>
                    <a class="nav-link" href="about.php" onclick="localStorage.removeItem('kategori')">Tentang</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Container start -->
    <div class="container-body">
        <aside>
            <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">
                <box-icon name='dialpad-alt' color="#ffffff"></box-icon>
            </a>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="title-sidebar"></h5>

                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <hr>
                <div class="offcanvas-body">
                    <ul id="data-sidebar"></ul>
                </div>
            </div>
        </aside>
        <main>
            <div class="logo">
                <img src="./assets/welcome.svg" class="rounded mx-auto d-block img-fluid logo-img"
                    alt="Office Tutorial">
                <h3>Selamat Datang Di Office Tutorials</h3>
                <br>
                <marquee>
                    <sub>
                        <h6 style="color: red; font-size: .9em;">Tekan Tombol Pada Sisi Kiri Website Untuk Menjelajah
                            Tutorial
                        </h6>
                    </sub>
                </marquee>
            </div>

            <div class="dataShow"></div>
        </main>

        <footer>
            <h5><a href="./index.php">Office Tutorials</a></h5>
        </footer>
    </div>
    <!-- Container end -->


    <!-- Boxicons Start -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- Boxicons End -->
    <!-- JQUERY start -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- JQUERY end -->
    <!-- Bootstrap Start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <!-- Bootstrap End -->

    <!-- MyJavascript Start -->
    <script src="./src/script/tutorial.js"></script>
    <script src="./src/script/index.js"></script>
    <!-- MyJavascript End -->
</body>

</html>