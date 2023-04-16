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
    <link rel="stylesheet" href="./src/styles/index.css">
    <!-- CSS end -->
    <link rel="shortcut icon" href="./assets/logo 2.png" type="image/x-icon">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid navbar-container">
            <a class="navbar-brand" href="./index.php">
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
        <div class="container">
            <img src="./assets/logo.png" class="rounded mx-auto d-block logo img-fluid" alt="Office Tutorials">
            <form class="d-flex search-area" role="search">
                <input class="form-control me-2 search-bar" type="search" placeholder="Search" aria-label="Search"
                    id="search">
                <button type="button" class="btn btn-search" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    id="btn-search">
                    <box-icon name='search' color='#fbfbfb'></box-icon>
                </button>
            </form>
            <!-- ChatBox Start -->
            <div class="chatBox" id="chatBox">
                <box-icon name='chat' type='solid' color='#ffffff'></box-icon>
            </div>
            <!-- ChatBox End -->
            <!-- Result Search Area -->
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Search | ....</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body modal-body-searching">
                            <ul id="isi-modal-body"> </ul>
                            <div class="data-modal">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-close2"
                                data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Result Search Area -->

            <div class="apps-area">
                <div class="apps">
                    <div class="app" onclick="localStorage.setItem('kategori', 'access'); category()">
                        <a href="tutorial.php">
                            <img src="./assets/Access.png" alt="Mircorosft Access">
                        </a>
                        <p>Access</p>
                    </div>
                    <div class="app" onclick="localStorage.setItem('kategori', 'defender'); category()">
                        <a href="tutorial.php">
                            <img src="./assets/defender.png" alt="Mircorosft Defender">
                        </a>
                        <p>Defender</p>
                    </div>
                    <div class="app" onclick="localStorage.setItem('kategori', 'delve'); category()">
                        <a href="tutorial.php">
                            <img src="./assets/Delve.png" alt="Mircorosft Delve">
                        </a>
                        <p>Delve</p>
                    </div>
                    <div class="app" onclick="localStorage.setItem('kategori', 'excel'); category()">
                        <a href="tutorial.php">
                            <img src="./assets/excel.png" alt="Mircorosft Excel">
                        </a>
                        <p>Excel</p>
                    </div>
                    <div class="app">
                        <a href=" tutorial.php" onclick="localStorage.setItem('kategori', 'word'); category()">
                            <img src="./assets/word.png" alt="Mircorosft Word">
                        </a>
                        <p>Word</p>
                    </div>
                    <div class="app" onclick="localStorage.setItem('kategori', 'powerpoint'); category()">
                        <a href="tutorial.php">
                            <img src="./assets/powerpoint.png" alt="Mircorosft Power Point">
                        </a>
                        <p>Power Point</p>
                    </div>
                    <div class="app" onclick="localStorage.setItem('kategori', 'visio'); category()">
                        <a href="tutorial.php">
                            <img src="./assets/visio.png" alt="Mircorosft Visio">
                        </a>
                        <p>Visio</p>
                    </div>
                    <div class="app" onclick="localStorage.setItem('kategori', 'form'); category()">
                        <a href="tutorial.php">
                            <img src="./assets/form.png" alt="Mircorosft Form">
                        </a>
                        <p>Form</p>
                    </div>
                    <div class="app" onclick="localStorage.setItem('kategori', 'onedrive'); category()">
                        <a href="tutorial.php">
                            <img src="./assets/oneDrive.png" alt="Mircorosft One Drive">
                        </a>
                        <p>OneDrive</p>
                    </div>
                    <div class="app" onclick="localStorage.setItem('kategori', 'onenote'); category()">
                        <a href="tutorial.php">
                            <img src="./assets/oneNote.png" alt="Mircorosft One Note">
                        </a>
                        <p>OneNote</p>
                    </div>
                </div>
                <!-- Canvas More Apps Start -->
                <div class="showAllAppsArea">
                    <button class="btn btn-semuaAplikasi" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        Semua Aplikasi
                    </button>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-check-update position-relative" data-bs-toggle="modal"
                        data-bs-target="#checkUpdate">
                        <i class='bx bxs-news'></i><span
                            class="badge text-bg-danger rounded-circle position-absolute top-0 start-100 translate-middle">1</span>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="checkUpdate" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">What's new</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul>
                                        <li>button for check updates</li>
                                        <li>-</li>
                                        <li>-</li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                        aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel"
                                onclick="localStorage.removeItem('kategori')">Semua Aplikasi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="semuaAplikasi">
                                <div class="app" onclick="localStorage.setItem('kategori', 'access'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/Access.png" alt="Mircorosft Access">
                                    </a>
                                    <p>Access</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'defender'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/defender.png" alt="Mircorosft Defender">
                                    </a>
                                    <p>Defender</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'delve'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/Delve.png" alt="Mircorosft Delve">
                                    </a>
                                    <p>Delve</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'excel'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/excel.png" alt="Mircorosft Excel">
                                    </a>
                                    <p>Excel</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'form'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/form.png" alt="Mircorosft Form">
                                    </a>
                                    <p>Form</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'kaizala'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/kaizala.png" alt="Mircorosft Kaizala">
                                    </a>
                                    <p>Kaizala</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'lists'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/list.png" alt="Mircorosft List">
                                    </a>
                                    <p>Lists</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'onedrive'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/oneDrive.png" alt="Mircorosft One Drive">
                                    </a>
                                    <p>OneDrive</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'onenote'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/oneNote.png" alt="Mircorosft One Note">
                                    </a>
                                    <p>OneNote</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'outlook'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/outlook.png" alt="Mircorosft Outlook">
                                    </a>
                                    <p>Outlook</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'planner'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/planner.png" alt="Mircorosft Planner">
                                    </a>
                                    <p>Planner</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'powerpoint'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/powerpoint.png" alt="Mircorosft Power Point">
                                    </a>
                                    <p>Power Point</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'project'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/project.png" alt="Mircorosft Project">
                                    </a>
                                    <p>Project</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'publisher'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/publisher.png" alt="Mircorosft Publisher">
                                    </a>
                                    <p>Publisher</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'sharepoint'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/sharepoint.png" alt="Mircorosft SharePoint">
                                    </a>
                                    <p>Share Point</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'skype'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/skypeForBusiness.png" alt="Mircorosft Skype Business">
                                    </a>
                                    <p>Skype</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'stream'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/stream.png" alt="Mircorosft Stream">
                                    </a>
                                    <p>Stream</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'sway'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/sway.png" alt="Mircorosft Sway">
                                    </a>
                                    <p>Sway</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'teams'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/teams.png" alt="Mircorosft Teams">
                                    </a>
                                    <p>Teams</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'todo'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/todo.png" alt="Mircorosft To-Do">
                                    </a>
                                    <p>To-Do</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'visio'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/visio.png" alt="Mircorosft Visio">
                                    </a>
                                    <p>Visio</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'whiteboard'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/whiteboard.png" alt="Mircorosft WhiteBoard">
                                    </a>
                                    <p>WhiteBoard</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'word'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/word.png" alt="Mircorosft Word">
                                    </a>
                                    <p>Word</p>
                                </div>
                                <div class="app" onclick="localStorage.setItem('kategori', 'yammer'); category()">
                                    <a href="tutorial.php">
                                        <img src="./assets/yammer.png" alt="Mircorosft Yammer">
                                    </a>
                                    <p>Yammer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Canvas More Apps End -->
            </div>
        </div>
        <div class="wave">
            <img src="./assets/wave_copy.png" alt="wave" class="img-fluid">
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
    <script src="./src/script/tutorial.js"></script>
    <!-- MyJavascript End -->


</body>

</html>