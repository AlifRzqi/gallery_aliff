<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 4 Bogor</title>
    <!-- Link ke CSS Anda (jika ada) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --navy-primary: #1B2B4B;
            --navy-secondary: #2A4270;
            --navy-light: #3B5998;
            --accent-gold: #D4AF37;
            --text-light: #E8EBF2;
        }

        .navbar {
            padding: 1.5rem 0;
            transition: all 0.3s ease-in-out;
            background-color: transparent;
            z-index: 1030;
        }

        .navbar-scrolled {
            padding: 1rem 0;
            background-color: var(--navy-primary);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            color: var(--text-light) !important;
            font-weight: 700;
        }

        .navbar-brand img {
            transition: all 0.3s ease;
            height: 40px;
        }

        .nav-link {
            color: var(--text-light) !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            right: 50%;
            height: 2px;
            background: var(--accent-gold);
            transition: all 0.3s ease;
            opacity: 0;
        }

        .nav-link:hover:after,
        .nav-link.active:after {
            left: 1rem;
            right: 1rem;
            opacity: 1;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--accent-gold) !important;
        }

        .navbar-toggler {
            border-color: var(--text-light);
            padding: 0.5rem;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        @media (max-width: 991.98px) {
            .navbar-collapse {
                background: var(--navy-primary);
                padding: 1rem;
                border-radius: 10px;
                margin-top: 1rem;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            }

            .nav-link {
                padding: 0.75rem 1rem !important;
                border-radius: 5px;
            }

            .nav-link:hover {
                background: rgba(255, 255, 255, 0.1);
            }
        }
    </style>
</head>
<body class="{{ Request::is('/') ? 'home-page' : 'other-page' }}">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('images/logo-sekolah.svg') }}" alt="Logo" height="40">
                <span class="ms-2 fw-bold">SMKN 4 Bogor</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('profil') ? 'active' : '' }}" href="/profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('program-keahlian') ? 'active' : '' }}" href="/program-keahlian">Program Keahlian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('galeri') ? 'active' : '' }}" href="/galeri">Galeri</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Script untuk Bootstrap (jika belum ada) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });
    </script>

</body>
</html>
