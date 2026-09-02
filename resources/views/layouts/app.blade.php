<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'AGENCY')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">

    <div class="container">

        <a class="navbar-brand" href="{{ route('home') }}">
            <span class="fw-bold">AGENCY</span>
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">

                <!-- Home -->
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}"
                    >
                        Home
                    </a>
                </li>

                <!-- About -->
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                        href="{{ route('about') }}"
                    >
                        About
                    </a>
                </li>

                <!-- Services -->
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}"
                        href="{{ route('services') }}"
                    >
                        Services
                    </a>
                </li>

                <!-- Departments -->
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('departments') ? 'active' : '' }}"
                        href="{{ route('departments') }}"
                    >
                        Departments
                    </a>
                </li>

                <!-- Team -->
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('team') ? 'active' : '' }}"
                        href="{{ route('team') }}"
                    >
                        Team
                    </a>
                </li>

                <!-- Contact -->
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}"
                    >
                        Contact
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>

    <!-- Main Content -->
    <main id="main">
        @yield('content')
    </main>


    <!-- Footer -->
    <footer class="footer py-4">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-4 text-lg-start">
                    Copyright © AGENCY 2026
                </div>

                <div class="col-lg-4 my-3 my-lg-0 text-center">

                    <a
                        class="btn btn-dark btn-social mx-1"
                        href="#!"
                        aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>

                    <a
                        class="btn btn-dark btn-social mx-1"
                        href="#!"
                        aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a
                        class="btn btn-dark btn-social mx-1"
                        href="#!"
                        aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                </div>

                <div class="col-lg-4 text-lg-end">

                    <a
                        class="link-dark text-decoration-none me-3"
                        href="#!">
                        Privacy Policy
                    </a>

                    <a
                        class="link-dark text-decoration-none"
                        href="#!">
                        Terms of Use
                    </a>

                </div>

            </div>

        </div>

    </footer>

</body>

</html>