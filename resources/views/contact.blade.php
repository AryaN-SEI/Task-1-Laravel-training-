@extends('layouts.app')

@section('title', 'AGENCY - Contact')

@section('content')

<section class="page-section" id="contact">

    <div class="container">

        <div class="text-center">

            <h2 class="section-heading text-uppercase">
                Contact Us
            </h2>

            <h3 class="section-subheading text-muted">
                We'd love to hear from you.
            </h3>

        </div>

        <div class="row">

            <!-- Contact Information -->
            <div class="col-lg-5 mb-5 mb-lg-0">

                <h4 class="text-uppercase mb-4">
                    Get In Touch
                </h4>

                <p class="text-muted">
                    Have a project in mind or want to learn more about our
                    services? Send us a message and our team will get back
                    to you as soon as possible.
                </p>

                <div class="d-flex align-items-center mb-4">

                    <span class="fa-stack fa-2x me-3">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-map-marker-alt fa-stack-1x fa-inverse"></i>
                    </span>

                    <div>
                        <strong>Address</strong>
                        <br>
                        <span class="text-muted">
                            123 Agency Street, City
                        </span>
                    </div>

                </div>

                <div class="d-flex align-items-center mb-4">

                    <span class="fa-stack fa-2x me-3">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-phone fa-stack-1x fa-inverse"></i>
                    </span>

                    <div>
                        <strong>Phone</strong>
                        <br>
                        <span class="text-muted">
                            +1 234 567 890
                        </span>
                    </div>

                </div>

                <div class="d-flex align-items-center">

                    <span class="fa-stack fa-2x me-3">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>

                    <div>
                        <strong>Email</strong>
                        <br>
                        <span class="text-muted">
                            hello@agency.com
                        </span>
                    </div>

                </div>

            </div>

            <!-- Contact Form -->
            <div class="col-lg-7">

                <form>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-floating mb-3">

                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    placeholder="Your Name"
                                >

                                <label for="name">
                                    Your Name
                                </label>

                            </div>

                            <div class="form-floating mb-3">

                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    placeholder="Your Email"
                                >

                                <label for="email">
                                    Your Email
                                </label>

                            </div>

                            <div class="form-floating mb-3">

                                <input
                                    type="tel"
                                    class="form-control"
                                    id="phone"
                                    placeholder="Your Phone"
                                >

                                <label for="phone">
                                    Your Phone
                                </label>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-floating mb-3">

                                <textarea
                                    class="form-control"
                                    id="message"
                                    placeholder="Your Message"
                                    style="height: 205px"
                                ></textarea>

                                <label for="message">
                                    Your Message
                                </label>

                            </div>

                        </div>

                    </div>

                    <div class="text-center">

                        <button
                            type="submit"
                            class="btn btn-primary btn-xl text-uppercase"
                        >
                            Send Message
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</section>

@endsection