@extends('layouts.app')

@section('title', 'AGENCY - Home')

@section('content')

<!-- =========================
     HERO
     ========================= -->
<header class="masthead">

    <div class="container">

        <div class="masthead-subheading">
            Welcome To AGENCY
        </div>

        <div class="masthead-heading text-uppercase">
            We Build Digital Experiences
        </div>

        <p class="lead text-white mb-5">
            Creative design, powerful development and digital solutions
            that help your business stand out.
        </p>

        <a
            class="btn btn-primary btn-xl text-uppercase me-2"
            href="{{ route('services') }}"
        >
            Our Services
        </a>

        <a
            class="btn btn-outline-light btn-xl text-uppercase"
            href="{{ route('contact') }}"
        >
            Contact Us
        </a>

    </div>

</header>


<!-- =========================
     INTRODUCTION
     ========================= -->
<section class="page-section">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6 mb-5 mb-lg-0">

                <h2 class="section-heading text-uppercase">
                    We Create. We Build. We Grow.
                </h2>

                <p class="text-muted">
                    AGENCY is a creative digital agency focused on building
                    modern websites and digital experiences for businesses.
                </p>

                <p class="text-muted">
                    From creative ideas to development and marketing, our
                    team works together to turn your vision into reality.
                </p>

                <a
                    href="{{ route('about') }}"
                    class="btn btn-primary text-uppercase mt-3"
                >
                    Learn More
                </a>

            </div>

            <div class="col-lg-6">

                <div class="bg-dark text-white rounded-3 p-5 text-center shadow">

                    <span class="fa-stack fa-5x mb-3">

                        <i class="fas fa-circle fa-stack-2x text-primary"></i>

                        <i class="fas fa-laptop-code fa-stack-1x fa-inverse"></i>

                    </span>

                    <h3 class="text-uppercase">
                        Digital Excellence
                    </h3>

                    <p class="text-white-50 mb-0">
                        Innovative solutions designed for modern businesses.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     WHY CHOOSE US
     ========================= -->
<section class="page-section bg-light">

    <div class="container">

        <div class="text-center">

            <h2 class="section-heading text-uppercase">
                Why Choose AGENCY?
            </h2>

            <h3 class="section-subheading text-muted">
                Everything you need to build a strong digital presence.
            </h3>

        </div>

        <div class="row text-center">

            <!-- Creative -->
            <div class="col-md-4 mb-5 mb-md-0">

                <span class="fa-stack fa-4x">

                    <i class="fas fa-circle fa-stack-2x text-primary"></i>

                    <i class="fas fa-lightbulb fa-stack-1x fa-inverse"></i>

                </span>

                <h4 class="my-3">
                    Creative Thinking
                </h4>

                <p class="text-muted">
                    We bring fresh ideas and creative thinking to every
                    project we work on.
                </p>

            </div>


            <!-- Technology -->
            <div class="col-md-4 mb-5 mb-md-0">

                <span class="fa-stack fa-4x">

                    <i class="fas fa-circle fa-stack-2x text-primary"></i>

                    <i class="fas fa-code fa-stack-1x fa-inverse"></i>

                </span>

                <h4 class="my-3">
                    Modern Technology
                </h4>

                <p class="text-muted">
                    We use modern technologies to create fast, responsive
                    and reliable digital solutions.
                </p>

            </div>


            <!-- Results -->
            <div class="col-md-4">

                <span class="fa-stack fa-4x">

                    <i class="fas fa-circle fa-stack-2x text-primary"></i>

                    <i class="fas fa-chart-line fa-stack-1x fa-inverse"></i>

                </span>

                <h4 class="my-3">
                    Real Results
                </h4>

                <p class="text-muted">
                    Our goal is to create solutions that deliver real value
                    and help your business grow.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     CALL TO ACTION
     ========================= -->
<section class="page-section bg-dark text-white">

    <div class="container text-center">

        <h2 class="section-heading text-uppercase text-white">
            Have A Project In Mind?
        </h2>

        <p class="lead text-white-50 mb-4">
            Let's work together and turn your idea into something amazing.
        </p>

        <a
            href="{{ route('contact') }}"
            class="btn btn-primary btn-xl text-uppercase"
        >
            Let's Talk
        </a>

    </div>

</section>

@endsection