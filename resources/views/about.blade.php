<!-- default layout -->
@extends('layouts.default')

@section('assets')
    <link rel="stylesheet" href="path/to/asset.css">
@endsection

@section('content')



        <!-- About-->

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0"></h2>
                <hr class="divider" />


                                <!-- About Section -->
                    <section id="about" class="about section">

                        <div class="container" data-aos="fade-up" data-aos-delay="100">
                        <div class="row align-items-xl-center gy-5">

                            <div class="col-xl-5 content">
                            <h3>About Us</h3>
                            <h2>History of the Church</h2>
                            <p>True Church was founded in 1985 by a small group of believers who desired to establish a gospel-centered church in our community. Starting with just 20 members, the church has grown steadily over the past 35 years, now serving over 500 families.</p>
                            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                            </div>

                            <div class="col-xl-7">
                            <div class="row gy-4 icon-boxes">

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box">
                                    <i class="bi bi-buildings"></i>
                                    <h3>Vision</h3>
                                    <p>Our vision is to be a vibrant, Christ-centered community that impacts our local neighborhood and the world for the Kingdom of God.</p>
                                </div>
                                </div> <!-- End Icon Box -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-clipboard-pulse"></i>
                                    <h3>Mission</h3>
                                    <p>True Church is committed to glorifying God and making disciples of Jesus Christ. Our mission is to lead people into a transformative relationship with Christ.</p>
                                </div>
                                </div> <!-- End Icon Box -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-command"></i>
                                    <h3>What We Believe</h3>
                                    <p>True Church holds firmly to the essential doctrines of the Christian faith as revealed in Scripture. We believe in the triune nature of God, the full deity and humanity of Jesus Christ, the authority and inspiration of the Bible, salvation by grace through faith, and the power of the Holy Spirit to transform lives.</p>
                                </div>
                                </div> <!-- End Icon Box -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    <h3>Ministries and Programs</h3>
                                    <p>At True Church, we offer a wide range of ministries and programs to serve people of all ages and stages of life. Some of our key ministries include:

                                        Dynamic worship services with relevant and Bible-based teaching.
                                        </p>
                                </div>
                                </div> <!-- End Icon Box -->

                            </div>
                            </div>

                        </div>
                        </div>

                    </section><!-- /About Section -->






        </section>


                    <!-- Faq Section -->
                <section id="faq" class="faq section">

                    <div class="container">

                    <div class="row gy-4">

                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="content px-xl-5">
                            <h3>
                                <span>Frequently Asked </span>
                                <strong>Questions</strong>
                            </h3>
                            <p>
                             Heres a list of the frequently asked quiz
                            </p>
                        </div>
                        </div>

                        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                        <div class="faq-container">
                            <div class="faq-item faq-active">
                            <h3 data-bs-toggle="collapse" href="#faq1" aria-expanded="false" aria-controls="faq1">
                                <span>What do you believe?</span>
                            </h3>
                            <div class="faq-content" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                <p>At True Church, we hold firmly to the essential doctrines of the Christian faith as revealed in Scripture. We believe in the triune nature of God - Father, Son, and Holy Spirit. We affirm the full deity and humanity of Jesus Christ, and the authority and inspiration of the Bible as God's inerrant Word.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                            <h3 data-bs-toggle="collapse" href="#faq2" aria-expanded="false" aria-controls="faq2">
                                <span>What are your worship services like?</span>
                            </h3>
                            <div class="faq-content" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                <p>Our Sunday worship services are a blend of traditional and contemporary elements. You can expect a warm, welcoming atmosphere with vibrant, Spirit-filled worship led by our talented music team.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                            <h3 data-bs-toggle="collapse" href="#faq3" aria-expanded="false" aria-controls="faq3">
                                <span>Do you have programs for kids and youth?</span>
                            </h3>
                            <div class="faq-content" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                <p>Absolutely! We have robust children's and youth ministries to disciple the next generation. On Sundays, kids from birth through 5th grade enjoy age-appropriate Bible lessons, worship, and activities in a safe, nurturing environment.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                            <h3 data-bs-toggle="collapse" href="#faq4" aria-expanded="false" aria-controls="faq4">
                                <span>How can I get involved?</span>
                            </h3>
                            <div class="faq-content" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                <p>There are many ways to get plugged into the life of True Church! We encourage everyone to join a small group, where you can build deeper relationships and experience biblical community. </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                            <h3 data-bs-toggle="collapse" href="#faq5" aria-expanded="false" aria-controls="faq5">
                                <span>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</span>
                            </h3>
                            <div class="faq-content" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                        </div>
                    </div>

                    </div>

                </section><!-- /Faq Section -->




@stop