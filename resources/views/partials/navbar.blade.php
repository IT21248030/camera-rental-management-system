<div class="position-relative z-index-30">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom mx-0 p-0 flex-column  border-0 position-absolute w-100 z-index-30 bg-transparent navbar-dark navbar-transparent bg-white-hover transition-all">
        <div class="w-100 pb-lg-0 pt-lg-0 pt-4 pb-3">
            <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">

                <!-- Logo-->
                <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0" href="{{ url('/') }}">
                    <!-- Start of Logo-->
                    <div class="d-flex align-items-center">
                        <div class="f-w-6 d-flex align-items-center me-2 lh-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 487 487">
                                <g>
                                    <g>
                                        <path d="M308.1,277.95c0,35.7-28.9,64.6-64.6,64.6s-64.6-28.9-64.6-64.6s28.9-64.6,64.6-64.6S308.1,242.25,308.1,277.95z
                                                M440.3,116.05c25.8,0,46.7,20.9,46.7,46.7v122.4v103.8c0,27.5-22.3,49.8-49.8,49.8H49.8c-27.5,0-49.8-22.3-49.8-49.8v-103.9
                                                v-122.3l0,0c0-25.8,20.9-46.7,46.7-46.7h93.4l4.4-18.6c6.7-28.8,32.4-49.2,62-49.2h74.1c29.6,0,55.3,20.4,62,49.2l4.3,18.6H440.3z
                                                M97.4,183.45c0-12.9-10.5-23.4-23.4-23.4c-13,0-23.5,10.5-23.5,23.4s10.5,23.4,23.4,23.4C86.9,206.95,97.4,196.45,97.4,183.45z
                                                M358.7,277.95c0-63.6-51.6-115.2-115.2-115.2s-115.2,51.6-115.2,115.2s51.6,115.2,115.2,115.2S358.7,341.55,358.7,277.95z"
                                                fill="gray"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="fs-5">CamGuardian</span>
                    </div>
                    <!-- / Logo-->
                </a>
                <!-- / Logo-->

                <!-- Main Navigation-->
                <div class="ms-5 flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1" id="navbarNavDropdown">

                    <!-- Mobile Nav Toggler-->
                    <button class="btn btn-link px-2 text-decoration-none navbar-toggler border-0 position-absolute top-0 end-0 mt-3 me-2" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ri-close-circle-line ri-2x"></i>
                    </button>
                    <!-- / Mobile Nav Toggler-->

                    <ul class="navbar-nav py-lg-2 mx-auto">
                        <li class="nav-item me-lg-4 dropdown position-static">
                            <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Photography
                            </a>
                            <div class="dropdown-menu dropdown-megamenu">
                                <div class="container">
                                    <div class="row g-0">
                                        <!-- Dropdown Menu Links Section-->
                                        <div class="col-12 col-lg-7">
                                            <div class="row py-lg-5">

                                                <!-- menu row-->
                                                <div class="col col-lg-6 mb-5 mb-sm-0">
                                                    <h6 class="dropdown-heading">Products</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Digital Cameras</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Lenses</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Drones & Aerial Imaging</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Dry Cabinets & Dehumidifiers</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Action Cameras & Accessories</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="{{ url('category') }}">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /menu row-->
                                            </div>
                                        </div>
                                        <!-- /Dropdown Menu Links Section-->

                                        <!-- Dropdown Menu Images Section-->
                                        <div class="d-none d-lg-block col-lg-5">
                                            <div class="vw-50 h-100 bg-img-cover bg-pos-center-center position-absolute" style="background-image: url('{{ asset('assets/images/banners/banner-2.jpg') }}');"></div>
                                        </div>
                                        <!-- Dropdown Menu Images Section-->
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item me-lg-4 dropdown position-static">
                            <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pro Video
                            </a>
                            <div class="dropdown-menu dropdown-megamenu">
                                <div class="container">
                                    <div class="row g-0">
                                        <!-- Dropdown Menu Links Section-->
                                        <div class="col-12 col-lg-7">
                                            <div class="row py-lg-5">
                                                <!-- menu row-->
                                                <div class="col col-lg-6 mb-5 mb-sm-0">
                                                    <h6 class="dropdown-heading">Products</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Camcorders</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Digital cine cameras</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Drones & Aerial Imaging</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Action Cameras & Accessories</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Tripods, Supports & Rigs</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Stabilizers & gimbals</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="{{ url('category') }}">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /menu row-->
                                            </div>
                                        </div>
                                        <!-- /Dropdown Menu Links Section-->

                                        <!-- Dropdown Menu Images Section-->
                                        <div class="d-none d-lg-block col-lg-5">
                                            <div class="vw-50 h-100 bg-img-cover bg-pos-center-center position-absolute" style="background-image: url('{{ asset('assets/images/banners/banner-4.jpg') }}');"></div>
                                        </div>
                                        <!-- Dropdown Menu Images Section-->
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item me-lg-4">
                            <a class="nav-link fw-bolder py-lg-4" href="#">
                                Lighting
                            </a>
                        </li>
                        <li class="nav-item me-lg-4">
                            <a class="nav-link fw-bolder py-lg-4" href="#">
                                Audio
                            </a>
                        </li>
                        <li class="nav-item me-lg-4">
                            <a class="nav-link fw-bolder py-lg-4" href="#">
                                Drones
                            </a>
                        </li>
                        <li class="nav-item dropdown me-lg-4">
                            <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Other
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('category') }}">Binoculars</a></li>
                                <li><a class="dropdown-item" href="{{ url('product') }}">Spotting Scopes</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- / Main Navigation-->

                <!-- Navbar Icons-->
                <ul class="list-unstyled mb-0 d-flex align-items-center">

                    <!-- Navbar Toggle Icon-->
                    <li class="d-inline-block d-lg-none">
                        <button class="btn btn-link px-2 text-decoration-none navbar-toggler border-0 d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ri-menu-line ri-lg align-middle"></i>
                        </button>
                    </li>
                    <!-- /Navbar Toggle Icon-->

                    <!-- Navbar Search-->
                    <li class="ms-1 d-inline-block">
                        <button class="btn btn-link px-2 text-decoration-none d-flex align-items-center" data-pr-search>
                            <i class="ri-search-2-line ri-lg align-middle"></i>
                        </button>
                    </li>
                    <!-- /Navbar Search-->

                    <!-- Navbar Wishlist-->
                    <li class="ms-1 d-none d-lg-inline-block">
                        <a class="btn btn-link px-2 py-0 text-decoration-none d-flex align-items-center" href="#">
                            <i class="ri-heart-line ri-lg align-middle"></i>
                        </a>
                    </li>
                    <!-- /Navbar Wishlist-->

                    <!-- Navbar Login-->
                    <li class="ms-1 d-none d-lg-inline-block">
                        <a class="btn btn-link px-2 text-decoration-none d-flex align-items-center"href="{{ route('login') }}">
                            <i class="ri-user-line ri-lg align-middle"></i>
                        </a>
                    </li>
                    <!-- /Navbar Login-->

                    <!-- Navbar Cart-->
                    <li class="ms-1 d-inline-block position-relative">
                        <button class="btn btn-link px-2 text-decoration-none d-flex align-items-center disable-child-pointer" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                            <i class="ri-shopping-cart-2-line ri-lg align-middle position-relative z-index-10"></i>
                            <!-- <span class="fs-xs fw-bolder f-w-5 f-h-5 bg-orange rounded-lg d-block lh-1 pt-1 position-absolute top-0 end-0 z-index-20 mt-2 text-white">1</span> -->
                        </button>
                    </li>
                    <!-- /Navbar Cart-->

                </ul>
                <!-- Navbar Icons-->

            </div>
        </div>
    </nav>
    <!-- / Navbar-->
</div>
