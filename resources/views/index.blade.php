@extends('layouts.app')

@section('content')
    <!-- / Hero Section -->
    <section class="vh-100 position-relative bg-overlay-dark ">
        <div class="container d-flex h-100 justify-content-center align-items-center position-relative z-index-10">
            <div class="d-flex justify-content-center align-items-center h-100 position-relative z-index-10 text-white">
                <div>
                    <h1 class="display-1 fw-bold px-2 px-md-5 text-center mx-auto col-lg-8 mt-md-0" data-aos="fade-up" data-aos-delay="1000">Capture Your Perfect Moments!</h1>
                </div>
            </div>
        </div>
        <div class="position-absolute z-index-1 top-0 bottom-0 start-0 end-0">
            <!-- Swiper Info -->
            <div class="swiper-container overflow-hidden bg-light w-100 h-100" data-swiper data-options='{"slidesPerView": 1, "speed": 1500, "loop": true, "effect": "fade", "autoplay": {"delay": 5000}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide position-relative">
                        <div class="w-100 h-100 bg-img-cover animation-move bg-pos-center-center" style="background-image: url('{{ asset('assets/images/slideshows/slideshow-1.jpg') }}');"></div>
                    </div>
                    <div class="swiper-slide position-relative">
                        <div class="w-100 h-100 bg-img-cover animation-move bg-pos-center-center" style="background-image: url('{{ asset('assets/images/slideshows/slideshow-2.jpg') }}');"></div>
                    </div>
                    <div class="swiper-slide position-relative">
                        <div class="w-100 h-100 bg-img-cover animation-move bg-pos-center-center" style="background-image: url('{{ asset('assets/images/slideshows/slideshow-3.jpg') }}');"></div>
                    </div>
                </div>
            </div>
            <!-- / Swiper Info-->
        </div>
    </section>
    <!--/ Hero Section-->

  

    <!-- Staff Picks-->
    <section class="mb-9 mt-5" data-aos="fade-up">
        <div class="container">
            <div class="w-md-50 mb-5">
                <p class="small fw-bolder text-uppercase tracking-wider mb-2 text-muted">Capture Your Perfect Moments</p>
                <h2 class="display-5 fw-bold mb-3">Featured Products</h2>
                <p class="lead">Explore our top-rated cameras, perfect for capturing every occasion with stunning clarity and detail.</p>
            </div>
            <!-- Swiper Latest -->
            <div class="swiper-container overflow-visible" data-swiper data-options='{"spaceBetween": 25, "cssMode": true, "roundLengths": true, "scrollbar": {"el": ".swiper-scrollbar", "hide": false, "draggable": true}, "navigation": {"nextEl": ".swiper-next", "prevEl": ".swiper-prev"}, "breakpoints": {"576": {"slidesPerView": 1}, "768": {"slidesPerView": 2}, "992": {"slidesPerView": 3}, "1200": {"slidesPerView": 4}}}'>
                <div class="swiper-wrapper pb-5 pe-1">
                    <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/images/products/product-1.jpg') }}" alt="">
                                </picture>
                                <div class="card-actions">
                                    <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                </div>
                            </div>
                            <div class="card-body px-0 text-center">
                                <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                    <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">
                                        <div class="position-absolute stars" style="width: 90%">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                        </div>
                                        <div class="stars">
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div>
                                    <span class="small fw-bolder ms-2 text-muted"> 4.7 (456)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center" href="{{ url('product') }}">Sony Alpha a7R III Mirrorless</a>
                                <p class="fw-bolder m-0 mt-2">28-70mm Lens </p>
                                <p class="fw-bolder m-0 mt-2">Rs:20,000.00</p>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <span class="badge card-badge bg-secondary">-10%</span>
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/images/products/product-2.jpg') }}" alt="">
                                </picture>
                                <div class="card-actions">
                                    <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                </div>
                            </div>
                            <div class="card-body px-0 text-center">
                                <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                    <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">
                                        <div class="position-absolute stars" style="width: 90%">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                        </div>
                                        <div class="stars">
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div>
                                    <span class="small fw-bolder ms-2 text-muted"> 4.7 (456)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center" href="{{ url('product') }}">Canon EOS 850D DSLR Camera</a>
                                <p class="fw-bolder m-0 mt-2">18-55mm Lens</p>
                                <div class="d-flex justify-content-center align-items-center mt-2">
                                    <p class="mb-0 me-2 text-danger fw-bolder">Rs:<span>18,000.00</span></p>
                                    <p class="mb-0 text-muted fw-bolder"><s>Rs<span>20,000.00</span></s></p>
                                </div>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <span class="badge card-badge bg-secondary">-10%</span>
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/images/products/product-3.jpg') }}" alt="">
                                </picture>
                                <div class="card-actions">
                                    <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                </div>
                            </div>
                            <div class="card-body px-0 text-center">
                                <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                    <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">
                                        <div class="position-absolute stars" style="width: 20%">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                        </div>
                                        <div class="stars">
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div>
                                    <span class="small fw-bolder ms-2 text-muted"> 4.7 (754)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center" href="{{ url('product') }}">Canon PowerShot SX740 HS</a>
                                <div class="d-flex justify-content-center align-items-center mt-2">
                                    <p class="mb-0 me-2 text-danger fw-bolder">Rs:<span>18,000.00</span></p>
                                    <p class="mb-0 text-muted fw-bolder"><s>Rs<span>20,000.00</span></s></p>
                                </div>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="swiper-slide d-flex h-auto">
                        <!-- Card Product-->
                        <div class="card position-relative h-100 card-listing hover-trigger">
                            <div class="card-header">
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{ asset('assets/images/products/product-4.jpg') }}" alt="">
                                </picture>
                                <div class="card-actions">
                                    <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                </div>
                            </div>
                            <div class="card-body px-0 text-center">
                                <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                    <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">
                                        <div class="position-absolute stars" style="width: 70%">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                        </div>
                                        <div class="stars">
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div>
                                    <span class="small fw-bolder ms-2 text-muted"> 4.4 (1289)</span>
                                </div>
                                <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center" href="{{ url('product') }}">Sony Cyber-shot DSC-RX10 IV</a>
                                <p class="fw-bolder m-0 mt-2">Rs:30,000.00</p>
                            </div>
                        </div>
                        <!--/ Card Product-->
                    </div>
                    <div class="swiper-slide d-flex h-auto justify-content-center align-items-center">
                        <a href="{{ url('category') }}" class="d-flex text-decoration-none flex-column justify-content-center align-items-center">
                            <span class="btn btn-dark btn-icon mb-3"><i class="ri-arrow-right-line ri-lg lh-1"></i></span>
                            <span class="lead fw-bolder">See All</span>
                        </a>
                    </div>
                </div>
                <!-- Buttons-->
                <div class="swiper-btn swiper-disabled-hide swiper-prev swiper-btn-side btn-icon bg-dark text-white ms-3 shadow-lg mt-n5 ms-n4"><i class="ri-arrow-left-s-line ri-lg"></i></div>
                <div class="swiper-btn swiper-disabled-hide swiper-next swiper-btn-side swiper-btn-side-right btn-icon bg-dark text-white me-n4 shadow-lg mt-n5"><i class="ri-arrow-right-s-line ri-lg"></i></div>
                <!-- Add Scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
            <!-- / Swiper Latest-->
        </div>
    </section>
    <!-- / Staff Picks-->

    <!-- Reviews-->
    <section>
        <div class="container" data-aos="fade-in">
            <h2 class="fs-1 fw-bold mb-3 text-center mb-5">Customer Reviews</h2>
            <div class="row g-3">
                <div class="col-12 col-lg-4" data-aos="fade-left">
                    <div class="bg-light p-4 d-flex h-100 justify-content-start align-items-center flex-column text-center">
                        <p class="fw-bolder lead">Excellent Service and Quality"!</p>
                        <p class="mb-3">I rented a DSLR for a weekend trip, and the experience was fantastic. The camera was in pristine condition, and the rental process was smooth and hassle-free. Highly recommend!</p>
                        <small class="text-muted d-block mb-2 fw-bolder">Nipuni</small>
                        <!-- Review Stars Small-->
                        <div class="rating position-relative d-table">
                            <div class="position-absolute stars" style="width: 75%">
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                            </div>
                            <div class="stars">
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4" data-aos="fade-left" data-aos-delay="150">
                    <div class="bg-light p-4 d-flex h-100 justify-content-start align-items-center flex-column text-center">
                        <p class="fw-bolder lead">Great Selection and Prices"</p>
                        <p class="mb-3">I was impressed by the wide range of cameras available for rent. I found exactly what I needed for my photography project, and the rental rates were very reasonable. Will definitely rent again!</p>
                        <small class="text-muted d-block mb-2 fw-bolder">Nipuni</small>
                        <!-- Review Stars Small-->
                        <div class="rating position-relative d-table">
                            <div class="position-absolute stars" style="width: 75%">
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                            </div>
                            <div class="stars">
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4" data-aos="fade-left" data-aos-delay="300">
                    <div class="bg-light p-4 d-flex h-100 justify-content-start align-items-center flex-column text-center">
                        <p class="fw-bolder lead">Highly Satisfied</p>
                        <p class="mb-3">The camera I rented exceeded my expectations in terms of quality and performance. The customer service was exceptional, and they even gave me some tips on how to use the camera effectively. A wonderful experience overall!</p>
                        <small class="text-muted d-block mb-2 fw-bolder">Nipuni</small>
                        <!-- Review Stars Small-->
                        <div class="rating position-relative d-table">
                            <div class="position-absolute stars" style="width: 75%">
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                                <i class="ri-star-fill text-dark mr-1"></i>
                            </div>
                            <div class="stars">
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center flex-column mt-7 align-items-center">
                <h3 class="mb-4 fw-bold fs-4">See what others have said</h3>
                <div class="d-flex justify-content-center align-items-center">
                    <span class="fs-3 fw-bold me-4">4.85 / 5</span>
                    <!-- Review Stars Medium-->
                    <div class="rating position-relative d-table">
                        <div class="position-absolute stars" style="width: 88%">
                            <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                            <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                            <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                            <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                            <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                        </div>
                        <div class="stars">
                            <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                            <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                            <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                            <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                            <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-dark rounded-0 mt-4">Read 100 more reviews</a>
            </div>
        </div>
    </section>
    <!-- /Reviews-->
       <!-- Featured Brands-->
    <div class="mt-lg-7 bg-light py-4" data-aos="fade-in">
        <div class="container">
            <div class="row gx-3 align-items-center">
                <div class="col-12 justify-content-center justify-content-md-between align-items-center d-flex flex-wrap">
                    <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                        <a class="d-block" href="{{ url('category') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Sony">
                            <img class="img-fluid d-table mx-auto" src="{{ asset('assets/images/logos/logo-1.svg') }}" alt="Sony logo">
                        </a>
                    </div>
                    <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                        <a class="d-block" href="{{ url('category') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Nikon">
                            <img class="img-fluid d-table mx-auto" src="{{ asset('assets/images/logos/logo-2.svg') }}" alt="Nikon logo">
                        </a>
                    </div>
                    <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                        <a class="d-block" href="{{ url('category') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Panasonic">
                            <img class="img-fluid d-table mx-auto" src="{{ asset('assets/images/logos/logo-3.svg') }}" alt="Panasonic logo">
                        </a>
                    </div>
                    <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                        <a class="d-block" href="{{ url('category') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Fujifilm">
                            <img class="img-fluid d-table mx-auto" src="{{ asset('assets/images/logos/logo-4.svg') }}" alt="Fujifilm logo">
                        </a>
                    </div>
                    <div class="me-2 f-w-20 m-4 ms-md-0 mt-md-0 mb-md-0">
                        <a class="d-block" href="{{ url('category') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Pentax">
                            <img class="img-fluid d-table mx-auto" src="{{ asset('assets/images/logos/logo-5.svg') }}" alt="Pentax logo">
                        </a>
                    </div>
                    <a href="{{ url('category') }}" class="btn btn-link fw-bolder">Explore All Brands <i class="ri-arrow-right-line align-bottom fw-bold"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--/ Featured Brands-->
@endsection
