<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMKN 4 Bogor</title>

        <!-- Fonts & Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }

            /* Hero Section */
            .hero-section {
                background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                            url('{{ asset('images/kepsek.jpg') }}') center/cover;
                color: white;
                padding: 100px 0;
                margin-bottom: 0;
            }

            .hero-section h1 {
                font-size: 2.5rem;
                font-weight: 600;
            }

            .hero-section p {
                font-size: 1.2rem;
                font-weight: 300;
            }

            .hero-section .btn {
                padding: 10px 30px;
                font-weight: 500;
            }

            /* Card Styles */
            .card {
                border: 1px solid #ddd;
                margin-bottom: 20px;
            }

            .card img {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }

            /* Navbar */
            .navbar {
                background: #1B2B4B;
            }

            .navbar-brand, .nav-link {
                color: white !important;
            }

            /* Footer */
            footer {
                background: #1B2B4B;
                color: white;
                padding: 30px 0;
            }

            /* Section Spacing */
            section {
                padding: 50px 0;
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        @include('partials.navbar')

        <!-- Content -->
        @yield('content')

        <!-- Footer -->
        @include('partials.footer')

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html> 