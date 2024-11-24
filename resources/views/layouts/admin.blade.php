<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Admin SMKN 4 Bogor</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

    <style>
        :root {
            --navy-primary: #1B2B4B;
            --navy-secondary: #2A4270;
            --navy-light: #3B5998;
            --accent-gold: #D4AF37;
            --text-light: #E8EBF2;
            --gradient-dark: linear-gradient(135deg, var(--navy-primary) 0%, var(--navy-secondary) 100%);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        /* Admin Sidebar */
        .admin-wrapper {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 280px;
            background: var(--gradient-dark);
            color: var(--text-light);
            transition: all 0.3s ease;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 1000;
            overflow-y: auto;
        }

        .sidebar-brand {
            padding: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 1rem;
        }

        .sidebar-brand img {
            height: 40px;
        }

        .sidebar-brand span {
            font-weight: 700;
            font-size: 1.2rem;
            color: var(--text-light);
        }

        .sidebar-menu {
            padding: 1rem 0;
        }

        .menu-item {
            padding: 0.75rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            color: var(--text-light);
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .menu-item:hover,
        .menu-item.active {
            background: rgba(255,255,255,0.1);
            border-left-color: var(--accent-gold);
            color: var(--accent-gold);
        }

        .menu-item i {
            width: 20px;
            text-align: center;
            font-size: 1.1rem;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 280px;
            padding: 2rem;
            transition: all 0.3s ease;
        }

        /* Admin Navbar */
        .admin-navbar {
            background: white;
            padding: 1rem 2rem;
            margin: -2rem -2rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .admin-navbar .nav-right {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .admin-navbar .btn-logout {
            background: var(--navy-primary);
            color: var(--text-light);
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .admin-navbar .btn-logout:hover {
            background: var(--navy-secondary);
            transform: translateY(-2px);
        }

        /* Responsive */
        @media (max-width: 991.98px) {
            .sidebar {
                margin-left: -280px;
            }

            .sidebar.active {
                margin-left: 0;
            }

            .main-content {
                margin-left: 0;
            }

            .main-content.active {
                margin-left: 280px;
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--navy-light);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--navy-primary);
        }

        /* Add these styles */
        .menu-section {
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .menu-header {
            display: block;
            padding: 0.5rem 1.5rem;
            font-size: 0.8rem;
            text-transform: uppercase;
            color: var(--accent-gold);
            font-weight: 600;
            letter-spacing: 1px;
        }
    </style>

    @stack('styles')
</head>
<body>
    <div class="admin-wrapper">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-brand">
                <img src="{{ asset('images/logo-sekolah.svg') }}" alt="Logo">
                <span>SMKN 4 Bogor</span>
            </div>
            <div class="sidebar-menu">
                <a href="{{ route('admin.dashboard') }}" class="menu-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>

                <!-- Web Content Section -->
                <div class="menu-section">
                    <span class="menu-header">Web Content</span>
                    
                    <!-- Informasi -->
                    <a href="{{ route('admin.informasi.index', ['kategori' => 'informasi']) }}" 
                       class="menu-item {{ Request::is('admin/posts*') && request('kategori') == 'informasi' ? 'active' : '' }}">
                        <i class="fas fa-info-circle"></i>
                        <span>Informasi</span>
                    </a>

                    <!-- Agenda -->
                    <a href="{{ route('admin.agenda.index', ['kategori' => 'agenda']) }}" 
                       class="menu-item {{ Request::is('admin/posts*') && request('kategori') == 'agenda' ? 'active' : '' }}">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Agenda</span>
                    </a>

                    <!-- Galeri -->
                    <a href="{{ route('admin.galeri.index') }}" 
                       class="menu-item {{ Request::is('admin/galeri*') ? 'active' : '' }}">
                        <i class="fas fa-images"></i>
                        <span>Galeri</span>
                    </a>

                    <a href="{{ route('admin.foto.index') }}" 
                       class="menu-item {{ Request::is('admin/galeri*') ? 'active' : '' }}">
                        <i class="fas fa-images"></i>
                        <span>Foto</span>
                    </a>
                </div>

                <!-- Web Preview Section -->
                <div class="menu-section">
                    <span class="menu-header">Web Preview</span>
                    
                    <a href="{{ route('admin.web-preview') }}" class="menu-item">
                        <i class="fas fa-home"></i>
                        <span>Web Preview</span>
                    </a>

                <!-- Settings Section -->
                <div class="menu-section">
                    <span class="menu-header">Settings</span>
                    <a href="{{ route('admin.posts.index') }}" class="menu-item">
                        <i class="fas fa-cog"></i>
                        <span>Post</span>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Navbar -->
            <nav class="admin-navbar">
                <button class="btn btn-link sidebar-toggler d-lg-none">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="nav-right">
                    <span>Admin</span>
                    <a href="/" class="btn-logout">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </nav>

            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Sidebar Toggle
        document.querySelector('.sidebar-toggler')?.addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
            document.querySelector('.main-content').classList.toggle('active');
        });

        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });
    </script>

    @stack('scripts')
</body>
</html> 