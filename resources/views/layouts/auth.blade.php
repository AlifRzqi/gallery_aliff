<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Login') - SMKN 4 Bogor</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body {
            min-height: 100vh;
            background: radial-gradient(circle, #243b55 0%, #141e30 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
        }

        .login-container {
            display: flex;
            flex-wrap: wrap;
            max-width: 960px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
            background: #1c2331;
        }

        .login-left {
            flex: 1;
            padding: 40px;
            background: #243b55;
            position: relative;
            color: #ffffff;
        }

        .login-right {
            flex: 1;
            background: url('{{ asset("images/school-bg.jpg") }}');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 30px;
            color: #ffffff;
        }

        .btn-primary {
            background: #3b5998;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: 500;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: #4e73df;
        }

        .form-control {
            background: #2c3e50;
            border: none;
            color: #ffffff;
        }

        .form-control:focus {
            background: #34495e;
            color: #ffffff;
            border-color: #4e73df;
            box-shadow: 0 0 5px #4e73df;
        }

        .form-floating label {
            color: #b0c4de;
        }

        .alert-danger {
            background: rgba(231, 76, 60, 0.2);
            color: #e74c3c;
            border: 1px solid #e74c3c;
        }
    </style>

    @stack('styles')
</head>
<body>
    <div class="login-container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
