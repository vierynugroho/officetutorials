<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office Tutorial</title>
    <!-- Bootstrap Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Bootstrap End -->
    <!-- Boxicons Start -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Boxicons End -->
    <!-- CSS start -->
    <link rel="stylesheet" href="./src/styles/about.css">
    <!-- CSS end -->
    <link rel="shortcut icon" href="./assets/logo 2.png" type="image/x-icon">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid navbar-container">
            <a class="navbar-brand" href="index.php">
                <img src="./assets/logo 2.png" alt="Office Tutorial" width="80" height="80">
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

    <!-- main start -->
    <main>
        <img src="./assets/logo.png" class="rounded mx-auto d-block logo img-fluid" alt="Office Tutorial">
        <p>
            Sebuah website yang memberikan tutorial<br>
            dalam penggunaan aplikasi microsoft office
        </p>

        <div class="chatBox" id="chatBox">

            <box-icon name='chat' type='solid' color='#ffffff'></box-icon>

        </div>
    </main>
    <!-- main end -->


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
    <script src="./src/script/index.js"></script>
    <!-- MyJavascript End -->
</body>

</html>