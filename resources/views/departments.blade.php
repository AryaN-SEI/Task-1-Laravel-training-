@extends('layouts.app')

@section('title', 'AGENCY - Departments')

@section('content')

<section class="page-section bg-light" id="departments">

    <div class="container">

        <div class="text-center">

            <h2 class="section-heading text-uppercase">
                Departments
            </h2>

            <h3 class="section-subheading text-muted">
                Explore the different areas of our agency.
            </h3>

        </div>

        <div class="row text-center">

            <!-- Design -->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="card h-100 border-0 shadow-sm">

                    <div class="card-body py-5">

                        <span class="fa-stack fa-3x mb-3">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-palette fa-stack-1x fa-inverse"></i>
                        </span>

                        <h4 class="my-3">
                            Creative Design
                        </h4>

                        <p class="text-muted">
                            Our creative team creates modern, attractive and
                            user-friendly designs for digital experiences.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Development -->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="card h-100 border-0 shadow-sm">

                    <div class="card-body py-5">

                        <span class="fa-stack fa-3x mb-3">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-code fa-stack-1x fa-inverse"></i>
                        </span>

                        <h4 class="my-3">
                            Web Development
                        </h4>

                        <p class="text-muted">
                            Our development team builds reliable, responsive
                            and scalable websites and web applications.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Marketing -->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="card h-100 border-0 shadow-sm">

                    <div class="card-body py-5">

                        <span class="fa-stack fa-3x mb-3">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-bullhorn fa-stack-1x fa-inverse"></i>
                        </span>

                        <h4 class="my-3">
                            Digital Marketing
                        </h4>

                        <p class="text-muted">
                            We help businesses grow through effective digital
                            marketing and online communication strategies.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Mobile -->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="card h-100 border-0 shadow-sm">

                    <div class="card-body py-5">

                        <span class="fa-stack fa-3x mb-3">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-mobile-alt fa-stack-1x fa-inverse"></i>
                        </span>

                        <h4 class="my-3">
                            Mobile Solutions
                        </h4>

                        <p class="text-muted">
                            We create mobile-friendly experiences that work
                            smoothly across different devices and screen sizes.
                        </p>

                    </div>

                </div>

            </div>

            <!-- E-Commerce -->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="card h-100 border-0 shadow-sm">

                    <div class="card-body py-5">

                        <span class="fa-stack fa-3x mb-3">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>

                        <h4 class="my-3">
                            E-Commerce
                        </h4>

                        <p class="text-muted">
                            We develop engaging online stores designed to
                            provide customers with a smooth shopping experience.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Security -->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="card h-100 border-0 shadow-sm">

                    <div class="card-body py-5">

                        <span class="fa-stack fa-3x mb-3">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shield-alt fa-stack-1x fa-inverse"></i>
                        </span>

                        <h4 class="my-3">
                            Web Security
                        </h4>

                        <p class="text-muted">
                            Our team focuses on secure development practices
                            to help protect websites and applications.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection