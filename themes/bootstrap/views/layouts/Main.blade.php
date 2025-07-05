<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
        }

        main {
            flex: 1;
        }

        footer {
            background-color: #343a40;
        }

        .card {
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .navbar-brand {
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .greeting {
            margin-left: 1.5rem;
            font-size: 1rem;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.9);
        }

        .nav-buttons {
            display: flex;
            gap: 0.75rem;
            align-items: center;
        }

        @media (max-width: 991.98px) {
            .greeting {
                margin-left: 0;
                margin-top: 0.5rem;
                margin-bottom: 0.5rem;
            }

            .nav-buttons {
                margin-top: 1rem;
                padding-top: 1rem;
                border-top: 1px solid rgba(255, 255, 255, 0.1);
                width: 100%;
                justify-content: flex-start;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center">
            <a class="navbar-brand fw-bold" href="{{route('welcome')}}">📝 MyBlog</a>

            @if(Auth()->check())
                <div class="greeting">Hello, {{Auth::user()->name}}</div>
            @else
                <div class="greeting">Hello, Guest</div>
            @endif
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible Navbar Content -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto">
                <!-- Add other nav items here if needed -->
            </ul>

            <div class="nav-buttons">
                @guest
                    <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm px-3">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-light btn-sm px-3">Sign Up</a>
                @endguest

                @auth
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-light btn-sm px-3">Logout</button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</nav>

<main class="container my-4">
    @yield('content')
</main>

<!-- Footer -->
<footer class="text-white text-center py-3 mt-auto">
    <div class="container">
        &copy; 2025 MyBlog. All rights reserved.
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
