<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 1 Ciamis - @yield('title', 'Beranda')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .searchBox {
            display: flex;
            width: 500px;
            height: 50px;
            align-items: center;
            justify-content: space-between;
            background: #fcfdff;
            border-radius: 25px;
            position: relative;
            border: 1px solid #e0e0e0;
        }

        .searchInput {
            border: none;
            background: none;
            outline: none;
            color: black;
            font-size: 15px;
            padding: 16px 46px 16px 20px;
            flex: 1;
        }

        .searchButton {
            position: absolute;
            right: 8px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(90deg, #e8e9e8 0%, #009EFD 100%);
            border: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        button:hover {
            background-color: #1A1A1A;
            box-shadow: rgba(0, 0, 0, 0.5) 0 10px 20px;
            transform: translateY(-3px);
        }

        button:active {
            box-shadow: none;
            transform: translateY(0);
        }

        .dark-toggle {
            margin-top: 10px;
            margin-left: 15px;
            background-color: white;
            border: 1px solid #6ec1ff;
            border-radius: 50%;
            padding: 10px 10px 5px 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
            border: none
        }

        .dark-toggle:hover {
            background-color: #f0f8ff;
        }

        .active-link {
            border-bottom: 3px solid #6ec1ff;
            color: #009EFD !important;
            font-weight: 600;
        }

        .nav>.nav-item {
            margin-right: 1.5rem;
        }

        .nav>.nav-item:last-child {
            margin-right: 0;
        }

        .nav-link {
            position: relative;
            padding-bottom: 6px;
            transition: all 0.2s ease-in-out;
        }

        /* Hanya garis bawah untuk link aktif */
        .nav-link.active-link {
            border-bottom: 2px solid #6ec1ff;
            font-weight: 600;
        }

        /* Hover effect untuk selain link aktif */
        .nav-link:not(.active-link):hover {
            border-bottom: 2px solid #6ec1ff;
            background-color: rgba(110, 193, 255, 0.15);
            border-radius: 8px 8px 0 0;

        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-white shadow-sm">
        <div class="container d-flex flex-column align-items-start">

            <!-- Baris 1: Logo + Brand + Input + Icon -->
            <div class="w-100 d-flex flex-lg-row flex-column justify-content-between align-items-center gap-3">

                <!-- Logo + Brand -->
                <div class="d-flex align-items-center">
                    <img src="{{ asset('image/logosmk.jpg') }}" alt="Logo Sekolah" width="50" height="50"
                        class="me-2">
                    <a class="navbar-brand fw-bold m-0" href="javascript:void(0)">
                        SMK Negeri<br>1 Ciamis
                    </a>
                </div>

                <!-- Search Box di Tengah -->
                <div class="mx-auto">
                    <form class="m-0">
                        <div class="searchBox">
                            <input class="searchInput" type="text" placeholder="Search something">
                            <button class="searchButton" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                    stroke="white" stroke-width="2" viewBox="0 0 24 24">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Moon Icon -->
                <div class="dark-toggle" onclick="toggleDarkMode()" title="Toggle Dark Mode">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="none"
                        stroke="#6ec1ff" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M21 12.79A9 9 0 0 1 12.21 3 7 7 0 1 0 21 12.79z" />
                    </svg>
                </div>
            </div>

            <!-- Garis Horizontal -->
            <hr class="w-100 my-3">

            <!-- Menu Navigasi -->
            <ul class="w-100 d-flex justify-content-center nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active-link' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('tentang') ? 'active-link' : '' }}" href="/tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kompetensi') ? 'active-link' : '' }}"
                        href="/kompetensi">Kompetensi Keahlian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('berita') ? 'active-link' : '' }}" href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kontak') ? 'active-link' : '' }}" href="/kontak">Kontak</a>
                </li>
            </ul>

        </div>
    </nav>


    <!-- Konten -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <small>© {{ date('Y') }} SMKN 1 Ciamis. All rights reserved.</small>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Optional JS for Dark Mode -->
    <script>
        function toggleDarkMode() {
            document.body.classList.toggle('bg-dark');
            document.body.classList.toggle('text-white');
        }
    </script>
</body>

</html>
