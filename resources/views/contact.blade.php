<!-- default layout -->
@extends('layouts.default')

@section('assets')
    <link rel="stylesheet" href="path/to/asset.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
        function onSubmit(token) {
            document.getElementById("contact").submit();
        }
    </script>
        <script type="text/javascript">
        var onloadCallback = function() {
            alert("grecaptcha is ready!");
        };
    </script>

@endsection

@section('content')



    <!-- Masthead-->
    <header class="masterhead1">
        {{-- <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Welcome to True Church We're thrilled to have you join our family!</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Welcome to True Church, a welcoming and inclusive community for spiritual growth, connection, and support, where everyone can find their place and purpose.</p>
                        <a class="btn btn-primary btn-xl" href="#about">Contact us.</a>
                    </div>
                </div>
            </div> --}}




    </header>
    <!-- About-->

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">

            <!-- Contact Section -->
            <section id="contact" class="contact section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                    <p>You can reach us, using the Contacts Provided Below😉.</p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                        <div class="col-lg-6">

                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="200">
                                        <i class="bi bi-geo-alt"></i>
                                        <h3>Address</h3>
                                        <p>A106 Holy Family Basilica</p>
                                        <p>Nairobi, NRB 10100</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="300">
                                        <i class="bi bi-telephone"></i>
                                        <h3>Call Us</h3>
                                        <p>+254712345678</p>
                                        <p>+254709876543</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="400">
                                        <i class="bi bi-envelope"></i>
                                        <h3>Email Us</h3>
                                        <p>info@truechurch.com</p>
                                        <p>contact@truechurch.com</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="500">
                                        <i class="bi bi-clock"></i>
                                        <h3>Open Hours</h3>
                                        <p>Monday - Friday</p>
                                        <p>9:00AM - 05:00PM</p>
                                    </div>
                                </div><!-- End Info Item -->

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <form action="/contact/store" id="contact" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                                @csrf
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Your Name" required="">
                                    </div>

                                    <div class="col-md-6 ">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Your Email" required="">
                                    </div>

                                    <div class="col-md-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                        <div class="cf-turnstile" data-sitekey="0x4AAAAAAADXBQPw75XUttBX" data-callback="javascriptCallback" required=""></div>
                                        <br />

                                    <button class="" type="submit">Send Message</button>
                                    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
                                    </div>


                                </div>

                                @if (session('success'))
                                    <div class="bg-green-200 text-green-900 p-3 mb-5 rounded-lg">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if (session('error'))
                                    <div class="bg-red-200 text-red-900 p-3 mb-5 rounded-lg">
                                        {{ session('error') }}
                                    </div>
                                @endif
                            </form>
                        </div><!-- End Contact Form -->

                    </div>

                </div>

            </section><!-- /Contact Section -->





    </section>



@stop