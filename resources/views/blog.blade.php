<!-- default layout -->
@extends('layouts.default')

@section('assets')
    <link rel="stylesheet" href="path/to/asset.css">
@endsection

@section('content')
        <header class="masterhead">
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
        <main class="main">

            <!-- Page Title -->
            <div class="page-title" data-aos="fade">
              <div class="heading">
                <div class="container">
                  <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                      <h1>Blog Details</h1>
                      <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                    </div>
                  </div>
                </div>
              </div>
              <nav class="breadcrumbs">
                <div class="container">
                  <ol>
                    <li><a href="{{ url('/events')}}">Home</a></li>
                    <li class="current">Events Details</li>
                  </ol>
                </div>
              </nav>
            </div><!-- End Page Title -->

            <div class="container">
              <div class="row">

                <div class="col-lg-8">

                @foreach ($events as $event )


                        <!-- Blog Details Section -->
                        <div id="blog-details" class="blog-details section">
                            <div class="container">

                            <article class="article">

                                <div class="post-img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlD8f_S5FaibMuB0UdrJ-mwR8zY_8VdX6ISA&s" alt="" class="img-fluid">
                                </div>

                                <h2 class="title">{{$event->title}}</h2>

                                <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-geo-alt"></i> <a href="#">{{$event->location}}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01">{{$event->date}}</time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">{{$event->time}}</a></li>
                                </ul>
                                </div><!-- End meta top -->

                                <div class="content">
                                <p>
                                   {{$event->description}}
                                </p>

                                {{-- <p>
                                    Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                                </p> --}}

                                <blockquote>
                                    <p>

                                    </p>
                                </blockquote>


                                </div><!-- End post content -->


                            </article>

                            </div>
                        </div><!-- /Blog Details Section -->
                  @endforeach

                  <!-- Blog Author Section -->
                  <section id="blog-author" class="blog-author section">

                    <div class="container">
                      <div class="author-container d-flex align-items-center">
                        <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
                        <div>
                          <h4>True Church</h4>
                          <div class="social-links">
                            <a href="https://x.com/#"><i class="bi bi-twitter-x"></i></a>
                            <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                            <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                          </div>
                          <p>
                            Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                          </p>
                        </div>
                      </div>
                    </div>

                  </section><!-- /Blog Author Section -->



                  <!-- Comment Form Section -->
                  <section id="comment-form" class="comment-form section">
                    <div class="container">



                    </div>
                  </section><!-- /Comment Form Section -->

                </div>

                <div class="col-lg-4 sidebar">





                  </div>

                </div>

              </div>
            </div>

          </main>

@stop