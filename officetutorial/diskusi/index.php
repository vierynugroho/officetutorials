<?php
//Mengirimkan Token Keamanan Ajax Request (Csrf Token)
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!-- Csrf Token -->
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>" />
    <!-- Bootstrap Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Bootstrap End -->
    <!-- Boxicons Start -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Boxicons End -->
    <link rel="stylesheet" href="../src/styles/diskusi.css" />
    <link rel="shortcut icon" href="../assets/logo 2.png" type="image/x-icon">
    <title>Office Tutorial</title>
</head>

<body>
    <!-- Main Body -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid navbar-container">
            <a class="navbar-brand" href="/">
                <img src="../assets/logo 2.png" alt="Office Tutorial" width="80" height="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="../index.php"
                        onclick="localStorage.removeItem('kategori')">Tutorial</a>
                    <a class="nav-link" href="./index.php" onclick="localStorage.removeItem('kategori')">Diskusi</a>
                    <a class="nav-link"
                        href="https://support.microsoft.com/en-us/office/download-and-install-or-reinstall-microsoft-365-or-office-2021-on-a-pc-or-mac-4414eaaf-0478-48be-9c42-23adc4716658"
                        target="_blank" onclick="localStorage.removeItem('kategori')">Unduh</a>
                    <a class="nav-link" href="../about.php" onclick="localStorage.removeItem('kategori')">Tentang</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-md-6 col-12 pb-4" id="wrapper-diskusi">
                    <h1 id="title-diskusi">DISKUSI</h1>
                    <span id="message"></span>

                    <div id="display_comment"></div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-4 offset-md-1 offset-sm-12 col-12 mt-4" id="pertanyaan">
                    <form method="POST" id="form_komen">
                        <div class="form-group">
                            <h4>Bertanya di Forum Diskusi</h4>
                            <hr>
                            <label for="message">Pertanyaan</label>
                            <textarea name="komen" id="komen" msg cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class=" form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="nama_pengirim" id="nama_pengirim" class="form-control" />
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <input type="hidden" name="komentar_id" id="komentar_id" value="0" />
                                <button type="submit" name="submit" id="submit" class="btn btn-submit">
                                    Kirim Pertanyaan
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        </section>

        <script src="../src/script/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
        <script>
        $(document).ready(function() {
            //Mengirimkan Token Keamanan
            $.ajaxSetup({
                headers: {
                    'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#form_komen').on('submit', function(event) {
                event.preventDefault();
                var form_data = $(this).serialize();
                $.ajax({
                    url: "tambah_komentar.php",
                    method: "POST",
                    data: form_data,
                    success: function(data) {
                        $('#form_komen')[0].reset();
                        $('#komentar_id').val('0');
                        load_comment();
                    },
                    error: function(data) {
                        console.log(data.responseText)
                    }
                })
            });

            load_comment();

            function load_comment() {
                $.ajax({
                    url: "ambil_komentar.php",
                    method: "POST",
                    success: function(data) {
                        $('#display_comment').html(data);
                    },
                    error: function(data) {
                        console.log(data.responseText)
                    }
                })
            }

            $(document).on('click', '.reply', function() {
                var komentar_id = $(this).attr("id");
                $('#komentar_id').val(komentar_id);
                $('#nama_pengirim').focus();
            });
        });
        </script>
</body>

</html>