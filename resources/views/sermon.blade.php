<!-- default layout -->
@extends('layouts.default')

@section('assets')
    <link rel="stylesheet" href="path/to/asset.css">
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
                <h2 class="text-center mt-0">Our Latest Sermons</h2>
                <hr class="divider" />


                                        <!-- Services Section -->
                            <section id="services" class="services section">

                                <!-- Section Title -->
                                <div class="container section-title" data-aos="fade-up">
                                <h2>Sermons</h2>

                                </div><!-- End Section Title -->

                                <div class="container">

                                <div class="row gy-4">
                                        @foreach ($add_sermons as $add_sermon )


                                            <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                                            <div class="service-item d-flex">
                                                <div class="icon flex-shrink-0"><i class="bi bi-book"></i></div>
                                                <div>
                                                <h4 class="title"><a href="#" class="stretched-link">{{$add_sermon->title}}</a></h4>
                                                <p class="description">{{$add_sermon->date}}</p>
                                                <p class="description">{{$add_sermon->text}}</p>
                                                <p class="description">{{$add_sermon->notes}}</p>

                                                </div>
                                            </div>
                                            </div>
                                            <!-- End Service Item -->

                                        @endforeach

                                    {{-- <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                                    <div class="service-item d-flex">
                                        <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                                        <div>
                                        <h4 class="title"><a href="services-details.html" class="stretched-link">Dolor Sitema</a></h4>
                                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                                        </div>
                                    </div>
                                    </div><!-- End Service Item -->

                                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
                                    <div class="service-item d-flex">
                                        <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                                        <div>
                                        <h4 class="title"><a href="services-details.html" class="stretched-link">Sed ut perspiciatis</a></h4>
                                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                        </div>
                                    </div>
                                    </div><!-- End Service Item -->

                                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
                                    <div class="service-item d-flex">
                                        <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                                        <div>
                                        <h4 class="title"><a href="services-details.html" class="stretched-link">Magni Dolores</a></h4>
                                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                        </div>
                                    </div>
                                    </div><!-- End Service Item -->

                                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
                                    <div class="service-item d-flex">
                                        <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                                        <div>
                                        <h4 class="title"><a href="services-details.html" class="stretched-link">Nemo Enim</a></h4>
                                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                                        </div>
                                    </div>
                                    </div><!-- End Service Item -->

                                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
                                    <div class="service-item d-flex">
                                        <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                                        <div>
                                        <h4 class="title"><a href="services-details.html" class="stretched-link">Eiusmod Tempor</a></h4>
                                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                                        </div>
                                    </div>
                                    </div><!-- End Service Item --> --}}

                                </div>

                                </div>

                            </section><!-- /Services Section -->




        </section>



@stop