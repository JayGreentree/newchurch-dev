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

                           <!-- Features Section -->
                           <section id="features" class="features section">

                            <!-- Section Title -->
                            <div class="container section-title" data-aos="fade-up">
                            <h2></h2>
                            <p></p>
                            </div><!-- End Section Title -->

                            <div class="container">



                                    @foreach ($add_pastors as $add_pastor)


                                            <div class="row gy-4 align-items-stretch justify-content-between features-item ">
                                                <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                                                <img src="https://media.gettyimages.com/id/1284922366/photo/portrait-of-a-happy-pastor-in-church.jpg?s=612x612&w=gi&k=20&c=uBZ_7UOtijOAmlpjQ8wc3496_pLhSIcXTHiTpNRgo6s=" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                                                <h3>{{$add_pastor->name}}</h3>
                                                <p>Pastor {{$add_pastor->name}} is a dedicated servant of God who has been faithfully leading our congregation for the past years. With a heart for the Lord and a passion for His people, tirelessly works to build up the body of Christ and spread the good news of the gospel.</p>
                                                <ul>
                                                    <li><i class="bi bi-check"></i> <span>{{$add_pastor->name}} is known for his dynamic and Spirit-filled preaching, drawing from the deep wells of Scripture to nourish and challenge the hearts of our church family.</span></li>

                                                </ul>
                                                <a href="#" class="btn btn-get-started align-self-start">Click to view more</a>
                                                </div>
                                            </div><!-- Features Item -->
                                     @endforeach

                            </div>

                        </section><!-- /Features Section -->
        <!-- About-->

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Our Pastors</h2>
                <hr class="divider" />
{{--
                                                    <!-- Features Section -->
                                <section id="features" class="features section">

                                    <!-- Section Title -->
                                    <div class="container section-title" data-aos="fade-up">
                                    <h2 class="pastor">Pastor</h2>
                                    <p class="pastor">Message</p>
                                    </div><!-- End Section Title -->

                                    <div class="container">

                                    <div class="row gy-4 align-items-center features-item">
                                        <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                                        <h3>Role</h3>
                                        <p>
                                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                                        </p>
                                        <a href="#" class="btn btn-get-started">Get Started</a>
                                        </div>
                                        <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                                        <div class="image-stack">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE-nfA9jB57Oz5XpxraurfhidVDSYBfBx6kwe1QHfbpbq80ZJhCgyuMe8aymVLwO3Tr6s&usqp=CAU" alt="" class="stack-front">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE-nfA9jB57Oz5XpxraurfhidVDSYBfBx6kwe1QHfbpbq80ZJhCgyuMe8aymVLwO3Tr6s&usqp=CAU" alt="" class="stack-back">
                                        </div>
                                        </div>
                                    </div><!-- Features Item --> --}}


                                             <!-- Team Section -->
                    <section id="team" class="team section">

                        <!-- Section Title -->
                        <div class="container section-title" data-aos="fade-up">
                        <h2>Team</h2>
                        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                        </div><!-- End Section Title -->

                        <div class="container">




                        <div class="row gy-5">
                            @foreach ($add_pastors as $add_pastor )
                                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">



                                <div class="member-img">
                                    <img src="https://www.shutterstock.com/image-photo/confident-african-american-man-pastor-600nw-2177616767.jpg" class="img-fluid" alt="">
                                    <div class="social">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info text-center">
                                    <h4>{{$add_pastor->name}}</h4>
                                    <span>{{$add_pastor->role}}</span>
                                    <p>{{$add_pastor->message}}</p>
                                </div>
                                </div><!-- End Team Member -->
                            @endforeach

                            {{-- <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="https://www.shutterstock.com/image-photo/confident-african-american-man-pastor-600nw-2177616767.jpg" class="img-fluid" alt="">
                                <div class="social">
                                <a href="#"><i class="bi bi-twitter-x"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores exercitationem ut</p>
                            </div>
                            </div><!-- End Team Member -->

                            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="https://www.shutterstock.com/image-photo/confident-african-american-man-pastor-600nw-2177616767.jpg" class="img-fluid" alt="">
                                <div class="social">
                                <a href="#"><i class="bi bi-twitter-x"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed facilis at qui</p>
                            </div>
                            </div><!-- End Team Member -->

                            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="https://www.shutterstock.com/image-photo/confident-african-american-man-pastor-600nw-2177616767.jpg" class="img-fluid" alt="">
                                <div class="social">
                                <a href="#"><i class="bi bi-twitter-x"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam consectetur</p>
                            </div>
                            </div><!-- End Team Member -->

                            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
                            <div class="member-img">
                                <img src="https://www.shutterstock.com/image-photo/confident-african-american-man-pastor-600nw-2177616767.jpg" class="img-fluid" alt="">
                                <div class="social">
                                <a href="#"><i class="bi bi-twitter-x"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Brian Doe</h4>
                                <span>Marketing</span>
                                <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia impedit laborum velit</p>
                            </div>
                            </div><!-- End Team Member -->

                            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
                            <div class="member-img">
                                <img src="https://www.shutterstock.com/image-photo/confident-african-american-man-pastor-600nw-2177616767.jpg" class="img-fluid" alt="">
                                <div class="social">
                                <a href="#"><i class="bi bi-twitter-x"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Josepha Palas</h4>
                                <span>Operation</span>
                                <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel</p>
                            </div>
                            </div><!-- End Team Member --> --}}

                        </div>

                        </div>



                    </section><!-- /Team Section -->



    </section>

@stop