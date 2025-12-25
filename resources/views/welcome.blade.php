<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dissenlek Kormar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/' . $about->logo) }}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ 'armado/assets/css/preloader.css' }}">
    <link rel="stylesheet" href="{{ 'armado/assets/css/bootstrap.css' }}">
    <link rel="stylesheet" href="{{ 'armado/assets/css/meanmenu.css' }}">
    <link rel="stylesheet" href="{{ 'armado/assets/css/animate.min.css' }}">
    <link rel="stylesheet" href="{{ 'armado/assets/css/swiper-bundle.css' }}">
    <link rel="stylesheet" href="{{ 'armado/assets/css/backToTop.css' }}">
    <link rel="stylesheet" href="{{ 'armado/assets/css/magnific-popup.css' }}">
    <link rel="stylesheet" href="{{ 'armado/assets/css/nice-select.css' }}">
    <link rel="stylesheet" href="{{ 'armado/assets/css/fontAwesome5Pro.css' }}">
    <link rel="stylesheet" href="{{ 'armado/assets/css/flaticon.css' }}">
    <link rel="stylesheet" href="{{ 'armado/assets/css/slick.css' }}">
    <link rel="stylesheet" href="{{ 'armado/assets/css/odometer.css' }}">
    <link rel="stylesheet" href="{{ 'armado/assets/css/default.css' }}">
    <link rel="stylesheet" href="{{ 'armado/assets/css/style.css' }}">
    <link rel="stylesheet" href="{{ 'css/style.css' }}">
</head>

<body>
    <!-- Tips untuk kamu: Jika kamu ingin mengubah warnanya, cari kelas header-main1 di file CSS kamu. Jika ingin mengganti menu, cukup tambah/kurangi tag <li> di dalam <ul>. -->
    <!-- [if lte IE 9]>
    <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
    </p>
    <![endif] -->

    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div>

    <!-- header area  -->
    <header>
        <div id="header-sticky" class="header-main header-main1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">

                        <!-- header main wrapper -->
                        <div class="header-main-content-wrapper">

                            <!-- header left logo-->
                            <div class="header-main-left header-main-left-header1">
                                <div class="header-logo header1-logo logo-wrapper">
                                    <a href="#home" class="logo-white">
                                        <img src="{{ asset('storage/' . $about->logo) }}" alt="logo-img">
                                    </a>
                                    <span class="logo-text">DISSENLEK <br> KORPS MARINIR</span>
                                </div>
                            </div>
                            <!-- header left logo end-->

                            <!-- header right main menu -->
                            <div class="header-main-right header-main-right-header1">

                                <!-- menus -->
                                <div class="main-menu main-menu1 d-none d-xl-block">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li><a href="#about">Profile</a></li>
                                            <li class="menu-item-has-children"><a href="#kadis">Leader</a>
                                                <ul class="sub-menu">
                                                    <li><a href="#kadis">Kadissenlek</a></li>
                                                    <li><a href="#kadis_lalu">previous leaders</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#team">Teams</a></li>
                                            <li><a href="#jops">activity</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- menus end -->

                                <!-- mobile menu area start -->
                                <div class="menu-bar d-xl-none">
                                    <a class="side-toggle" href="#about">
                                        <div class="dot-icon">
                                            <img src="{{ 'armado/' }}assets/img/icons/side-toggle.png"
                                                alt="img not found">
                                        </div>
                                    </a>
                                </div>
                                <!-- mobile menu area end -->

                                <!--contact info-->
                                <div class="meta-items meta-items-header1 d-none d-lg-inline-flex">
                                    <div class="meta-item header-meta-item">
                                        <a href="tel:+91036259003">
                                            <div class="meta-item-icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                        </a>
                                        <div class="meta-item-content d-none d-xxl-inline-block">
                                            <div class="meta-title">Emargency Call</div>
                                            <p><a href="tel:+91036259003">+91 036 259 003</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!--contact info end-->

                            </div>
                            <!-- header right main menu end-->
                        </div>
                        <!-- header main wrapper end-->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    <!-- side toggle start -->
    <aside class="fix">
        <div class="side-info ">
            <div class="side-info-content">
                <div class="mb-40 offset-widget offset-header">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <div class="offset-logo">
                                <a href="#home">
                                    <span class="logo-text">DISSENLEK <br> KORPS MARINIR</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-3 text-end">
                            <button class="side-info-close">
                                <i class="fal fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu d-xl-none fix"></div>
                <div class="offset-widget offset_searchbar mb-30">
                    <form action="#" class="filter-search-input">
                        <input type="text" placeholder="Search keyword">
                        <button type="submit"><i class="fal fa-search"></i></button>
                    </form>
                </div>
                <div class="offset-widget offset-support mb-30">
                    <div class="meta-item header-meta-item">
                        <a href="tel:+91036259003">
                            <div class="meta-item-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                        </a>
                        <div class="meta-item-content">
                            <div class="meta-title"><span>Emargency</span> Call</div>
                            <p><a href="tel:+91036259003">+91 036 259 003</a></p>
                        </div>
                    </div>
                </div>
                <div class="mb-0 offset-widget offset-social">
                    <div class="social-links">
                        <ul>
                            <li><a href="https://facebook.com
                                " target="_blank"><i
                                        class="fab fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com
                                " target="_blank"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li>
                                <a href="https://linkedin.com/" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li><a href="https://youtube.com
                                " target="_blank"><i
                                        class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class="offcanvas-overlay"></div>
    <div class="offcanvas-overlay-white"></div>
    <!-- side toggle end -->

    <!-- Add your site or application content here -->
    <main>

        <!-- home-area-start -->
        <div id="home" class="banner-area banner-area3 pos-rel z-index-2">
            <div class="swiper-container slider__active">
                <div class="swiper-wrapper">
                    @foreach ($banners as $banner)
                        <div class="swiper-slide">
                            <div
                                class="single-banner single-banner-3 banner-1080 p-relative d-flex align-items-center">

                                {{-- 1. BAGIAN BACKGROUND (IMAGE / VIDEO) --}}
                                @if ($banner->media_type == 'image')
                                    {{-- HAPUS class d-none dan tambahkan style background-image langsung --}}
                                    <div class="banner-bg banner-bg3 banner-bg3-1"
                                        data-background="{{ asset('assets/img/banner/' . $banner->media_file) }}"
                                        style="background-image: url('{{ asset('assets/img/banner/' . $banner->media_file) }}');">
                                    </div>
                                @else
                                    {{-- Untuk Video --}}
                                    <div class="banner-bg banner-bg3 banner-bg3-1 d-none" data-background=""></div>
                                    <div class="video-wrapper p-relative">
                                        <video autoplay muted loop>
                                            <source src="{{ asset('assets/video/' . $banner->media_file) }}"
                                                type="video/mp4">
                                        </video>
                                    </div>
                                @endif

                                {{-- 2. SOSIAL MEDIA (STATIS SESUAI TEMPLATE) --}}
                                <div class="social-links bannner-3-social">
                                    <ul>
                                        <li><a href="https://facebook.com" target="_blank"><i
                                                    class="fab fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com" target="_blank"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://linkedin.com/" target="_blank"><i
                                                    class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="https://youtube.com" target="_blank"><i
                                                    class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>

                                {{-- 3. TEXT BACKROUND (STROKE) --}}
                                <div class="armado-shape">
                                    <span class="stroke-text">{{ $banner->stroke_text }}</span>
                                </div>

                                {{-- 4. ORNAMEN SHAPE (STATIS) --}}
                                <div class="banner-shape-wrapper">
                                    <img class="banner-3-shape-a-1"
                                        src="{{ asset('armado/assets/img/shape/cube-shape-2.png') }}"
                                        alt="img not found">
                                    <img class="banner-3-shape-a-2"
                                        src="{{ asset('armado/assets/img/shape/cube-shape.png') }}"
                                        alt="img not found">
                                    <img class="banner-3-shape-a-3"
                                        src="{{ asset('armado/assets/img/shape/border-dot.png') }}"
                                        alt="img not found">
                                    <img class="banner-3-shape-a-4"
                                        src="{{ asset('armado/assets/img/shape/square-route.png') }}"
                                        alt="img not found">
                                </div>

                                <div class="container">
                                    <div class="banner-inner p-relative">
                                        <div class="row">
                                            <div class="col-12">
                                                <div
                                                    class="text-center banner-content banner-content3 banner-content3-1">

                                                    {{-- 5. EYEBROW TEXT (Teks kecil paling atas) --}}
                                                    @if ($banner->eyebrow_text)
                                                        <p class="mb-5">{{ $banner->eyebrow_text }}</p>
                                                    @endif

                                                    {{-- 6. JUDUL UTAMA --}}
                                                    <h1 class="mb-10 banner-title">
                                                        {{ $banner->title }}
                                                    </h1>

                                                    {{-- 7. SUBTITLE --}}
                                                    <div class="banner-meta-text">
                                                        <span>{{ $banner->subtitle }}</span>
                                                    </div>

                                                    {{-- 8. TOMBOL-TOMBOL --}}
                                                    <div class="banner-btn justify-content-center mt-80">
                                                        <a href="{{ $banner->btn_fill_url }}"
                                                            class="fill-btn">{{ $banner->btn_fill_text }}</a>
                                                        <a href="{{ $banner->btn_border_url }}"
                                                            class="border-btn">{{ $banner->btn_border_text }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="slider-pagination slider-3-pagination"></div>
        </div>
        <!-- home-area-end -->

        <!-- about area start  -->
        <section id="about" class="about-area pt-130 pb-65 p-relative"
            style="background-image: url('{{ asset('armado/assets/img/bg/wall_about.png') }}');">
            <div class="container">
                <div class="row justify-content-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-xl-6">
                        <div class="bd-section-title-wrapper centered-title">
                            <div class="bd-section-subtitle st-b">
                                <span>about</span>us
                            </div>
                            <h3 class="bd-section-title mb-15">dissenlek kormar</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-7">
                        <div class="about-content-wrapper mb-15 wow fadeInRight" data-wow-delay=".3s">
                            <div class="about-tab-wrapper">
                                <div class="mb-30 about-tab-nav">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-1" type="button" role="tab"
                                                aria-controls="nav-1" aria-selected="false">Our history</button>
                                            <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-2" type="button" role="tab"
                                                aria-controls="nav-2" aria-selected="false">Our Vision</button>
                                            <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-3" type="button" role="tab"
                                                aria-controls="nav-3" aria-selected="true">Our Missions</button>
                                            <button class="nav-link" id="nav-4-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-4" type="button" role="tab"
                                                aria-controls="nav-4" aria-selected="false">Our Activitys</button>
                                        </div>
                                    </nav>
                                </div>
                                <div class="about-tab-content">
                                    <div class="tab-content" id="nav-tabContent">

                                        <div class="tab-pane fade show active" id="nav-1" role="tabpanel"
                                            aria-labelledby="nav-1-tab">
                                            <div class="bd-section-title-wrapper">
                                                <h3 class="mb-7 bd-section-title">About Our History</h3>
                                            </div>
                                            <div class="about-content">
                                                <p>{!! $about->sejarah ?? 'History content not available.' !!}</p>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="nav-2" role="tabpanel"
                                            aria-labelledby="nav-2-tab">
                                            <div class="bd-section-title-wrapper">
                                                <h3 class="mb-7 bd-section-title">About Our Vision</h3>
                                            </div>
                                            <div class="about-content">
                                                <p>{!! $about->visi ?? 'Vision content not available.' !!}</p>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="nav-3" role="tabpanel"
                                            aria-labelledby="nav-3-tab">
                                            <div class="bd-section-title-wrapper">
                                                <h3 class="mb-7 bd-section-title">About Our Mission</h3>
                                            </div>
                                            <div class="about-content">
                                                <p>{!! $about->misi ?? 'Mission content not available.' !!}</p>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="nav-4" role="tabpanel"
                                            aria-labelledby="nav-4-tab">
                                            <div class="bd-section-title-wrapper">
                                                <h3 class="mb-7 bd-section-title">Our Activity</h3>
                                            </div>
                                            <div class="about-content">
                                                <p>{!! $about->tugas_pokok ?? 'Goals content not available.' !!}</p>
                                            </div>
                                            <div class="border-box">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="about-info">
                                                            <a href="#team">
                                                                <div class="about-info-icon">
                                                                    <i class="flaticon-032-riot-police"></i>
                                                                </div>
                                                            </a>
                                                            <div class="about-info-text">
                                                                <span>{{ \App\Models\Personnel::count() }}</span>
                                                                <p>Total Personnel</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="about-info">
                                                            <a href="#jops">
                                                                <div class="about-info-icon">
                                                                    <i class="flaticon-027-check"></i>
                                                                </div>
                                                            </a>
                                                            <div class="about-info-text">
                                                                <span>{{ \App\Models\Activity::count() }}</span>
                                                                <p>Activities Completed</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 d-none d-xl-block">
                        <div class="about-thumb-1-area">
                            <div class="about-thumb-1-wrapper mb-100 p-relative z-index-1"
                                style="transform: translateY(30px);">
                                <div class="about-thumb about-thumb-1 p-relative wow fadeInLeft" data-wow-delay=".3s">
                                    <div class="logo-glow-wrapper">
                                        @if ($about->logo)
                                            <img src="{{ asset('storage/' . $about->logo) }}" alt="Logo"
                                                class="custom-logo">
                                        @else
                                            <img src="{{ asset('armado/assets/img/about/img-2.png') }}"
                                                alt="Default Image" class="custom-logo">
                                        @endif
                                    </div>
                                    <div class="panel wow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end  -->

        <!-- kepala dinas area start  -->
        <section id="kadis" class="about-area pt-130 pb-65 section-kadis-custom"
            style="background-image: url('{{ asset('armado/assets/img/bg/wall.jpg') }}');">

            <div class="container">
                @if ($kadis)
                    <div class="about-inner p-relative">
                        <div class="row align-items-center">

                            <div class="col-xl-5 kadis-desktop-column wow fadeInLeft" data-wow-delay=".3s"
                                data-wow-duration="1.2s">
                                <div class="about-thumb-3-1">
                                    <img src="{{ asset('storage/' . $kadis->image) }}" alt="Foto Kadis">
                                </div>
                            </div>

                            <div class="col-xl-7">
                                <div class="about-content-wrapper-3 mb-65 wow fadeInRight" data-wow-delay=".5s"
                                    data-wow-duration="1.2s">

                                    <div class="bd-section-title-wrapper">
                                        <div class="bd-section-subtitle st-b">our<span>Leader</span></div>
                                        <div class="kadis-title-box">
                                            <h3 class="bd-section-title">KADISSENLEK <br> KORPS MARINIR</h3>
                                            <span class="kadis-rank-text">{{ $kadis->rank }}</span>
                                            <span class="kadis-name-text">{{ $kadis->name }}</span>
                                        </div>
                                    </div>

                                    <div class="kadis-mobile-img wow fadeIn" data-wow-delay=".2s">
                                        <img src="{{ asset('storage/' . $kadis->image) }}" alt="Kadis Mobile">
                                    </div>

                                    <div class="about-sp kadis-quote-box">
                                        {!! $kadis->quote !!}
                                    </div>
                                    <div class="about-description">
                                        {!! $kadis->description !!}
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                @endif
            </div>
        </section>
        <!-- kepala dinas area end  -->

        <!-- kepala dinas dari masa ke masa area start  -->
        <section id="kadis_lalu" class="bg-white features-area pt-130 pb-70 p-relative z-index-2">
            <div class="container">
                <div class="row justify-content-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-xl-6">
                        <div class="bd-section-title-wrapper centered-title">
                            <div class="bd-section-subtitle st-b">
                                lasted <span>leader</span>
                            </div>
                            <h3 class="bd-section-title mb-50">kadisenlek<br>dari masa ke masa</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="team-wrapper">
                            <div class="team-slider swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="team-card team-special">
                                            <div class="team-thumb">
                                                <div class="panel wow"></div>
                                                <div class="team-thumb-bg">
                                                    <svg width="389" height="444" viewBox="0 0 389 444"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <mask fill="white">
                                                            <path
                                                                d="M150.006 24.9562L171.639 37.1185L193.272 49.2807L214.667 36.8026L236.063 24.3244L214.429 12.1622L192.796 0L171.401 12.4781L150.006 24.9562ZM86.6117 185.829L86.7702 210.47L86.9287 235.11L87.0872 259.75L87.2457 284.391L108.879 296.553L130.512 308.715L152.145 320.877L173.778 333.04L195.411 345.202L216.807 332.724L238.202 320.245L259.598 307.767L280.993 295.289L302.388 282.811L302.23 258.171L302.071 233.53L301.913 208.89L301.754 184.25L323.15 171.772L344.545 159.293L344.704 183.934L344.862 208.574L345.021 233.215L345.179 257.855L345.338 282.495L345.496 307.136L324.101 319.614L302.705 332.092L281.31 344.57L259.914 357.048L238.519 369.526L217.124 382.004L195.728 394.482L174.095 382.32L152.462 370.158L130.829 357.996L109.354 345.991L87.7211 333.829L66.088 321.667L44.4549 309.505L44.2964 284.864L44.1379 260.224L43.9794 235.584L43.8209 210.943L43.5832 186.145L43.4247 161.505L64.9786 173.588L86.6117 185.829ZM44.8511 358.785L66.4842 370.948L88.1173 383.11L109.75 395.272L131.384 407.434L153.017 419.597L174.65 431.759L196.283 443.921L217.678 431.443L239.074 418.965L260.469 406.487L281.865 394.009L303.26 381.53L324.655 369.052L346.051 356.574L367.446 344.096L388.842 331.618L388.683 306.978L388.525 282.337L388.366 257.697L388.208 233.057L388.049 208.416L387.891 183.776L387.732 159.136L387.574 134.495L387.415 109.855L365.782 97.6926L344.387 110.171L322.991 122.649L301.596 135.127L280.2 147.605L258.567 135.443L236.934 123.281L258.33 110.803L279.725 98.3244L301.12 85.8463L322.516 73.3682L300.883 61.206L279.25 49.0438L257.854 61.5219L236.459 74L215.063 86.4781L193.668 98.9563L171.956 86.4781L150.322 74.3159L128.689 62.1537L107.056 49.9915L85.6608 62.4696L64.2654 74.9477L85.8986 87.1099L107.532 99.2721L129.165 111.434L150.798 123.597L172.431 135.759L194.064 147.921L215.697 160.083L237.33 172.245L258.964 184.408L259.122 209.048L259.281 233.688L259.439 258.329L238.044 270.807L216.648 283.285L195.253 295.763L173.62 283.601L151.828 271.676L130.195 259.513L130.036 234.873L129.878 210.233L151.511 222.395L173.144 234.557L194.777 246.719L216.173 234.241L216.014 209.601L194.381 197.439L172.748 185.276L151.115 172.956L129.482 160.794L107.849 148.632L86.2155 136.47L64.5824 124.307L43.0285 112.145L21.3954 99.9829L0 112.461L0.158484 137.101L0.316969 161.742L0.475453 186.382L0.633938 211.022L0.792422 235.663L0.950907 260.303L1.26788 285.101L1.42636 309.742L1.58484 334.382L23.218 346.544L44.8511 358.785Z" />
                                                        </mask>
                                                        <path
                                                            d="M150.006 24.9562L171.639 37.1185L193.272 49.2807L214.667 36.8026L236.063 24.3244L214.429 12.1622L192.796 0L171.401 12.4781L150.006 24.9562ZM86.6117 185.829L86.7702 210.47L86.9287 235.11L87.0872 259.75L87.2457 284.391L108.879 296.553L130.512 308.715L152.145 320.877L173.778 333.04L195.411 345.202L216.807 332.724L238.202 320.245L259.598 307.767L280.993 295.289L302.388 282.811L302.23 258.171L302.071 233.53L301.913 208.89L301.754 184.25L323.15 171.772L344.545 159.293L344.704 183.934L344.862 208.574L345.021 233.215L345.179 257.855L345.338 282.495L345.496 307.136L324.101 319.614L302.705 332.092L281.31 344.57L259.914 357.048L238.519 369.526L217.124 382.004L195.728 394.482L174.095 382.32L152.462 370.158L130.829 357.996L109.354 345.991L87.7211 333.829L66.088 321.667L44.4549 309.505L44.2964 284.864L44.1379 260.224L43.9794 235.584L43.8209 210.943L43.5832 186.145L43.4247 161.505L64.9786 173.588L86.6117 185.829ZM44.8511 358.785L66.4842 370.948L88.1173 383.11L109.75 395.272L131.384 407.434L153.017 419.597L174.65 431.759L196.283 443.921L217.678 431.443L239.074 418.965L260.469 406.487L281.865 394.009L303.26 381.53L324.655 369.052L346.051 356.574L367.446 344.096L388.842 331.618L388.683 306.978L388.525 282.337L388.366 257.697L388.208 233.057L388.049 208.416L387.891 183.776L387.732 159.136L387.574 134.495L387.415 109.855L365.782 97.6926L344.387 110.171L322.991 122.649L301.596 135.127L280.2 147.605L258.567 135.443L236.934 123.281L258.33 110.803L279.725 98.3244L301.12 85.8463L322.516 73.3682L300.883 61.206L279.25 49.0438L257.854 61.5219L236.459 74L215.063 86.4781L193.668 98.9563L171.956 86.4781L150.322 74.3159L128.689 62.1537L107.056 49.9915L85.6608 62.4696L64.2654 74.9477L85.8986 87.1099L107.532 99.2721L129.165 111.434L150.798 123.597L172.431 135.759L194.064 147.921L215.697 160.083L237.33 172.245L258.964 184.408L259.122 209.048L259.281 233.688L259.439 258.329L238.044 270.807L216.648 283.285L195.253 295.763L173.62 283.601L151.828 271.676L130.195 259.513L130.036 234.873L129.878 210.233L151.511 222.395L173.144 234.557L194.777 246.719L216.173 234.241L216.014 209.601L194.381 197.439L172.748 185.276L151.115 172.956L129.482 160.794L107.849 148.632L86.2155 136.47L64.5824 124.307L43.0285 112.145L21.3954 99.9829L0 112.461L0.158484 137.101L0.316969 161.742L0.475453 186.382L0.633938 211.022L0.792422 235.663L0.950907 260.303L1.26788 285.101L1.42636 309.742L1.58484 334.382L23.218 346.544L44.8511 358.785Z"
                                                            stroke="#575757" stroke-width="4"
                                                            mask="url(#path-1-inside-1_62_3102)" />
                                                    </svg>

                                                </div>
                                                <a href="team-details.html"><img
                                                        src="{{ 'armado/' }}assets/img/team/team-1.png"
                                                        alt="img not found"></a>
                                            </div>
                                            <div class="team-content">
                                                <h4 class="member-name"><a href="team-details.html">Andrew Walker</a>
                                                </h4>
                                                <span class="member-designation">SECURITY AGENT</span>
                                                <div class="social-links team-social">
                                                    <ul>
                                                        <li><a href="https://facebook.com
                                    "
                                                                target="_blank"><i class="fab fa-facebook"></i></a>
                                                        </li>
                                                        <li><a href="https://twitter.com
                                    "
                                                                target="_blank"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li><a href="https://linkedin.com" target="_blank"><i
                                                                    class="fab fa-linkedin-in"></i></a></li>
                                                        <li><a href="https://youtube.com
                                    "
                                                                target="_blank"><i class="fab fa-youtube"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-card team-special">
                                            <div class="team-thumb">
                                                <div class="panel wow"></div>
                                                <div class="team-thumb-bg">
                                                    <svg width="389" height="444" viewBox="0 0 389 444"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <mask fill="white">
                                                            <path
                                                                d="M150.006 24.9562L171.639 37.1185L193.272 49.2807L214.667 36.8026L236.063 24.3244L214.429 12.1622L192.796 0L171.401 12.4781L150.006 24.9562ZM86.6117 185.829L86.7702 210.47L86.9287 235.11L87.0872 259.75L87.2457 284.391L108.879 296.553L130.512 308.715L152.145 320.877L173.778 333.04L195.411 345.202L216.807 332.724L238.202 320.245L259.598 307.767L280.993 295.289L302.388 282.811L302.23 258.171L302.071 233.53L301.913 208.89L301.754 184.25L323.15 171.772L344.545 159.293L344.704 183.934L344.862 208.574L345.021 233.215L345.179 257.855L345.338 282.495L345.496 307.136L324.101 319.614L302.705 332.092L281.31 344.57L259.914 357.048L238.519 369.526L217.124 382.004L195.728 394.482L174.095 382.32L152.462 370.158L130.829 357.996L109.354 345.991L87.7211 333.829L66.088 321.667L44.4549 309.505L44.2964 284.864L44.1379 260.224L43.9794 235.584L43.8209 210.943L43.5832 186.145L43.4247 161.505L64.9786 173.588L86.6117 185.829ZM44.8511 358.785L66.4842 370.948L88.1173 383.11L109.75 395.272L131.384 407.434L153.017 419.597L174.65 431.759L196.283 443.921L217.678 431.443L239.074 418.965L260.469 406.487L281.865 394.009L303.26 381.53L324.655 369.052L346.051 356.574L367.446 344.096L388.842 331.618L388.683 306.978L388.525 282.337L388.366 257.697L388.208 233.057L388.049 208.416L387.891 183.776L387.732 159.136L387.574 134.495L387.415 109.855L365.782 97.6926L344.387 110.171L322.991 122.649L301.596 135.127L280.2 147.605L258.567 135.443L236.934 123.281L258.33 110.803L279.725 98.3244L301.12 85.8463L322.516 73.3682L300.883 61.206L279.25 49.0438L257.854 61.5219L236.459 74L215.063 86.4781L193.668 98.9563L171.956 86.4781L150.322 74.3159L128.689 62.1537L107.056 49.9915L85.6608 62.4696L64.2654 74.9477L85.8986 87.1099L107.532 99.2721L129.165 111.434L150.798 123.597L172.431 135.759L194.064 147.921L215.697 160.083L237.33 172.245L258.964 184.408L259.122 209.048L259.281 233.688L259.439 258.329L238.044 270.807L216.648 283.285L195.253 295.763L173.62 283.601L151.828 271.676L130.195 259.513L130.036 234.873L129.878 210.233L151.511 222.395L173.144 234.557L194.777 246.719L216.173 234.241L216.014 209.601L194.381 197.439L172.748 185.276L151.115 172.956L129.482 160.794L107.849 148.632L86.2155 136.47L64.5824 124.307L43.0285 112.145L21.3954 99.9829L0 112.461L0.158484 137.101L0.316969 161.742L0.475453 186.382L0.633938 211.022L0.792422 235.663L0.950907 260.303L1.26788 285.101L1.42636 309.742L1.58484 334.382L23.218 346.544L44.8511 358.785Z" />
                                                        </mask>
                                                        <path
                                                            d="M150.006 24.9562L171.639 37.1185L193.272 49.2807L214.667 36.8026L236.063 24.3244L214.429 12.1622L192.796 0L171.401 12.4781L150.006 24.9562ZM86.6117 185.829L86.7702 210.47L86.9287 235.11L87.0872 259.75L87.2457 284.391L108.879 296.553L130.512 308.715L152.145 320.877L173.778 333.04L195.411 345.202L216.807 332.724L238.202 320.245L259.598 307.767L280.993 295.289L302.388 282.811L302.23 258.171L302.071 233.53L301.913 208.89L301.754 184.25L323.15 171.772L344.545 159.293L344.704 183.934L344.862 208.574L345.021 233.215L345.179 257.855L345.338 282.495L345.496 307.136L324.101 319.614L302.705 332.092L281.31 344.57L259.914 357.048L238.519 369.526L217.124 382.004L195.728 394.482L174.095 382.32L152.462 370.158L130.829 357.996L109.354 345.991L87.7211 333.829L66.088 321.667L44.4549 309.505L44.2964 284.864L44.1379 260.224L43.9794 235.584L43.8209 210.943L43.5832 186.145L43.4247 161.505L64.9786 173.588L86.6117 185.829ZM44.8511 358.785L66.4842 370.948L88.1173 383.11L109.75 395.272L131.384 407.434L153.017 419.597L174.65 431.759L196.283 443.921L217.678 431.443L239.074 418.965L260.469 406.487L281.865 394.009L303.26 381.53L324.655 369.052L346.051 356.574L367.446 344.096L388.842 331.618L388.683 306.978L388.525 282.337L388.366 257.697L388.208 233.057L388.049 208.416L387.891 183.776L387.732 159.136L387.574 134.495L387.415 109.855L365.782 97.6926L344.387 110.171L322.991 122.649L301.596 135.127L280.2 147.605L258.567 135.443L236.934 123.281L258.33 110.803L279.725 98.3244L301.12 85.8463L322.516 73.3682L300.883 61.206L279.25 49.0438L257.854 61.5219L236.459 74L215.063 86.4781L193.668 98.9563L171.956 86.4781L150.322 74.3159L128.689 62.1537L107.056 49.9915L85.6608 62.4696L64.2654 74.9477L85.8986 87.1099L107.532 99.2721L129.165 111.434L150.798 123.597L172.431 135.759L194.064 147.921L215.697 160.083L237.33 172.245L258.964 184.408L259.122 209.048L259.281 233.688L259.439 258.329L238.044 270.807L216.648 283.285L195.253 295.763L173.62 283.601L151.828 271.676L130.195 259.513L130.036 234.873L129.878 210.233L151.511 222.395L173.144 234.557L194.777 246.719L216.173 234.241L216.014 209.601L194.381 197.439L172.748 185.276L151.115 172.956L129.482 160.794L107.849 148.632L86.2155 136.47L64.5824 124.307L43.0285 112.145L21.3954 99.9829L0 112.461L0.158484 137.101L0.316969 161.742L0.475453 186.382L0.633938 211.022L0.792422 235.663L0.950907 260.303L1.26788 285.101L1.42636 309.742L1.58484 334.382L23.218 346.544L44.8511 358.785Z"
                                                            stroke="#575757" stroke-width="4"
                                                            mask="url(#path-1-inside-1_62_3102)" />
                                                    </svg>

                                                </div>
                                                <a href="team-details.html"><img
                                                        src="{{ 'armado/' }}assets/img/team/team-2.png"
                                                        alt="img not found"></a>
                                            </div>
                                            <div class="team-content">
                                                <h4 class="member-name"><a href="team-details.html">Andrew Walker</a>
                                                </h4>
                                                <span class="member-designation">SECURITY AGENT</span>
                                                <div class="social-links team-social">
                                                    <ul>
                                                        <li><a href="https://facebook.com
                                    "
                                                                target="_blank"><i class="fab fa-facebook"></i></a>
                                                        </li>
                                                        <li><a href="https://twitter.com
                                    "
                                                                target="_blank"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li><a href="https://linkedin.com" target="_blank"><i
                                                                    class="fab fa-linkedin-in"></i></a></li>
                                                        <li><a href="https://youtube.com
                                    "
                                                                target="_blank"><i class="fab fa-youtube"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="team-card team-special">
                                            <div class="team-thumb">
                                                <div class="panel wow"></div>
                                                <div class="team-thumb-bg">
                                                    <svg width="389" height="444" viewBox="0 0 389 444"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <mask fill="white">
                                                            <path
                                                                d="M150.006 24.9562L171.639 37.1185L193.272 49.2807L214.667 36.8026L236.063 24.3244L214.429 12.1622L192.796 0L171.401 12.4781L150.006 24.9562ZM86.6117 185.829L86.7702 210.47L86.9287 235.11L87.0872 259.75L87.2457 284.391L108.879 296.553L130.512 308.715L152.145 320.877L173.778 333.04L195.411 345.202L216.807 332.724L238.202 320.245L259.598 307.767L280.993 295.289L302.388 282.811L302.23 258.171L302.071 233.53L301.913 208.89L301.754 184.25L323.15 171.772L344.545 159.293L344.704 183.934L344.862 208.574L345.021 233.215L345.179 257.855L345.338 282.495L345.496 307.136L324.101 319.614L302.705 332.092L281.31 344.57L259.914 357.048L238.519 369.526L217.124 382.004L195.728 394.482L174.095 382.32L152.462 370.158L130.829 357.996L109.354 345.991L87.7211 333.829L66.088 321.667L44.4549 309.505L44.2964 284.864L44.1379 260.224L43.9794 235.584L43.8209 210.943L43.5832 186.145L43.4247 161.505L64.9786 173.588L86.6117 185.829ZM44.8511 358.785L66.4842 370.948L88.1173 383.11L109.75 395.272L131.384 407.434L153.017 419.597L174.65 431.759L196.283 443.921L217.678 431.443L239.074 418.965L260.469 406.487L281.865 394.009L303.26 381.53L324.655 369.052L346.051 356.574L367.446 344.096L388.842 331.618L388.683 306.978L388.525 282.337L388.366 257.697L388.208 233.057L388.049 208.416L387.891 183.776L387.732 159.136L387.574 134.495L387.415 109.855L365.782 97.6926L344.387 110.171L322.991 122.649L301.596 135.127L280.2 147.605L258.567 135.443L236.934 123.281L258.33 110.803L279.725 98.3244L301.12 85.8463L322.516 73.3682L300.883 61.206L279.25 49.0438L257.854 61.5219L236.459 74L215.063 86.4781L193.668 98.9563L171.956 86.4781L150.322 74.3159L128.689 62.1537L107.056 49.9915L85.6608 62.4696L64.2654 74.9477L85.8986 87.1099L107.532 99.2721L129.165 111.434L150.798 123.597L172.431 135.759L194.064 147.921L215.697 160.083L237.33 172.245L258.964 184.408L259.122 209.048L259.281 233.688L259.439 258.329L238.044 270.807L216.648 283.285L195.253 295.763L173.62 283.601L151.828 271.676L130.195 259.513L130.036 234.873L129.878 210.233L151.511 222.395L173.144 234.557L194.777 246.719L216.173 234.241L216.014 209.601L194.381 197.439L172.748 185.276L151.115 172.956L129.482 160.794L107.849 148.632L86.2155 136.47L64.5824 124.307L43.0285 112.145L21.3954 99.9829L0 112.461L0.158484 137.101L0.316969 161.742L0.475453 186.382L0.633938 211.022L0.792422 235.663L0.950907 260.303L1.26788 285.101L1.42636 309.742L1.58484 334.382L23.218 346.544L44.8511 358.785Z" />
                                                        </mask>
                                                        <path
                                                            d="M150.006 24.9562L171.639 37.1185L193.272 49.2807L214.667 36.8026L236.063 24.3244L214.429 12.1622L192.796 0L171.401 12.4781L150.006 24.9562ZM86.6117 185.829L86.7702 210.47L86.9287 235.11L87.0872 259.75L87.2457 284.391L108.879 296.553L130.512 308.715L152.145 320.877L173.778 333.04L195.411 345.202L216.807 332.724L238.202 320.245L259.598 307.767L280.993 295.289L302.388 282.811L302.23 258.171L302.071 233.53L301.913 208.89L301.754 184.25L323.15 171.772L344.545 159.293L344.704 183.934L344.862 208.574L345.021 233.215L345.179 257.855L345.338 282.495L345.496 307.136L324.101 319.614L302.705 332.092L281.31 344.57L259.914 357.048L238.519 369.526L217.124 382.004L195.728 394.482L174.095 382.32L152.462 370.158L130.829 357.996L109.354 345.991L87.7211 333.829L66.088 321.667L44.4549 309.505L44.2964 284.864L44.1379 260.224L43.9794 235.584L43.8209 210.943L43.5832 186.145L43.4247 161.505L64.9786 173.588L86.6117 185.829ZM44.8511 358.785L66.4842 370.948L88.1173 383.11L109.75 395.272L131.384 407.434L153.017 419.597L174.65 431.759L196.283 443.921L217.678 431.443L239.074 418.965L260.469 406.487L281.865 394.009L303.26 381.53L324.655 369.052L346.051 356.574L367.446 344.096L388.842 331.618L388.683 306.978L388.525 282.337L388.366 257.697L388.208 233.057L388.049 208.416L387.891 183.776L387.732 159.136L387.574 134.495L387.415 109.855L365.782 97.6926L344.387 110.171L322.991 122.649L301.596 135.127L280.2 147.605L258.567 135.443L236.934 123.281L258.33 110.803L279.725 98.3244L301.12 85.8463L322.516 73.3682L300.883 61.206L279.25 49.0438L257.854 61.5219L236.459 74L215.063 86.4781L193.668 98.9563L171.956 86.4781L150.322 74.3159L128.689 62.1537L107.056 49.9915L85.6608 62.4696L64.2654 74.9477L85.8986 87.1099L107.532 99.2721L129.165 111.434L150.798 123.597L172.431 135.759L194.064 147.921L215.697 160.083L237.33 172.245L258.964 184.408L259.122 209.048L259.281 233.688L259.439 258.329L238.044 270.807L216.648 283.285L195.253 295.763L173.62 283.601L151.828 271.676L130.195 259.513L130.036 234.873L129.878 210.233L151.511 222.395L173.144 234.557L194.777 246.719L216.173 234.241L216.014 209.601L194.381 197.439L172.748 185.276L151.115 172.956L129.482 160.794L107.849 148.632L86.2155 136.47L64.5824 124.307L43.0285 112.145L21.3954 99.9829L0 112.461L0.158484 137.101L0.316969 161.742L0.475453 186.382L0.633938 211.022L0.792422 235.663L0.950907 260.303L1.26788 285.101L1.42636 309.742L1.58484 334.382L23.218 346.544L44.8511 358.785Z"
                                                            stroke="#575757" stroke-width="4"
                                                            mask="url(#path-1-inside-1_62_3102)" />
                                                    </svg>

                                                </div>
                                                <a href="team-details.html"><img
                                                        src="{{ 'armado/' }}assets/img/team/team-3.png"
                                                        alt="img not found"></a>
                                            </div>
                                            <div class="team-content">
                                                <h4 class="member-name"><a href="team-details.html">Andrew Walker</a>
                                                </h4>
                                                <span class="member-designation">SECURITY AGENT</span>
                                                <div class="social-links team-social">
                                                    <ul>
                                                        <li><a href="https://facebook.com
                                    "
                                                                target="_blank"><i class="fab fa-facebook"></i></a>
                                                        </li>
                                                        <li><a href="https://twitter.com
                                    "
                                                                target="_blank"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li><a href="https://linkedin.com" target="_blank"><i
                                                                    class="fab fa-linkedin-in"></i></a></li>
                                                        <li><a href="https://youtube.com
                                    "
                                                                target="_blank"><i class="fab fa-youtube"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
        </section>
        <!-- kepala dinas dari masa ke masa area end  -->

        <!-- personel area start  -->
        <section id="team" class="bg-white team-area pt-130 pb-130 p-relative fix z-index-2">
            <div class="team-overlay area-absolute" data-background="{{ 'armado/' }}assets/img/bg/team.jpg">
            </div>
            <div class="container">
                <div class="row justify-content-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-xl-6">
                        <div class="bd-section-title-wrapper bd-section-title-wrapper-team-3 centered-title">
                            <div class="bd-section-subtitle st-b">
                                <span>our </span>TEAMS
                            </div>
                            <h3 class="bd-section-title mb-50">personel<br>dissenlek kormar</h3>
                        </div>
                    </div>
                </div>
                <div class="team-inner wow fadeInUp" data-wow-delay=".3s">
                    <div class="swiper team-3-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team-card team-3">
                                    <div class="team-thumb">
                                        <div class="team-thumb-bg"></div>
                                        <a href="team-details.html"><img
                                                src="{{ 'armado/' }}assets/img/team/team-4.jpg"
                                                alt="img not found"></a>
                                    </div>
                                    <div class="team-content">
                                        <h4 class="member-name"><a href="team-details.html">Andrew Walker</a>
                                        </h4>
                                        <span class="member-designation">Fire Fighter</span>
                                        <div class="social-links team-social">
                                            <ul>
                                                <li><a href="https://facebook.com
                                    "
                                                        target="_blank"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="https://twitter.com
                                    "
                                                        target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://linkedin.com/" target="_blank"><i
                                                            class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="https://youtube.com
                                    "
                                                        target="_blank"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card team-3">
                                    <div class="team-thumb">
                                        <div class="team-thumb-bg"></div>
                                        <a href="team-details.html"><img
                                                src="{{ 'armado/' }}assets/img/team/team-5.jpg"
                                                alt="img not found"></a>
                                    </div>
                                    <div class="team-content">
                                        <h4 class="member-name"><a href="team-details.html">David harly Rason</a>
                                        </h4>
                                        <span class="member-designation">Fire Fighter</span>
                                        <div class="social-links team-social">
                                            <ul>
                                                <li><a href="https://facebook.com
                                    "
                                                        target="_blank"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="https://twitter.com
                                    "
                                                        target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://linkedin.com/" target="_blank"><i
                                                            class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="https://youtube.com
                                    "
                                                        target="_blank"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card team-3">
                                    <div class="team-thumb">
                                        <div class="team-thumb-bg"></div>
                                        <a href="team-details.html"><img
                                                src="{{ 'armado/' }}assets/img/team/team-6.jpg"
                                                alt="img not found"></a>
                                    </div>
                                    <div class="team-content">
                                        <h4 class="member-name"><a href="team-details.html">Daniel Stiven</a>
                                        </h4>
                                        <span class="member-designation">Fire Fighter</span>
                                        <div class="social-links team-social">
                                            <ul>
                                                <li><a href="https://facebook.com
                                    "
                                                        target="_blank"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="https://twitter.com
                                    "
                                                        target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://linkedin.com/" target="_blank"><i
                                                            class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="https://youtube.com
                                    "
                                                        target="_blank"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card team-3">
                                    <div class="team-thumb">
                                        <div class="team-thumb-bg"></div>
                                        <a href="team-details.html"><img
                                                src="{{ 'armado/' }}assets/img/team/team-7.jpg"
                                                alt="img not found"></a>
                                    </div>
                                    <div class="team-content">
                                        <h4 class="member-name"><a href="team-details.html">Stipenson Robert</a>
                                        </h4>
                                        <span class="member-designation">Fire Fighter</span>
                                        <div class="social-links team-social">
                                            <ul>
                                                <li><a href="https://facebook.com
                                    "
                                                        target="_blank"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="https://twitter.com
                                    "
                                                        target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://linkedin.com/" target="_blank"><i
                                                            class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="https://youtube.com
                                    "
                                                        target="_blank"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card team-3">
                                    <div class="team-thumb">
                                        <div class="team-thumb-bg"></div>
                                        <a href="team-details.html"><img
                                                src="{{ 'armado/' }}assets/img/team/team-8.jpg"
                                                alt="img not found"></a>
                                    </div>
                                    <div class="team-content">
                                        <h4 class="member-name"><a href="team-details.html">Amelia Rose</a>
                                        </h4>
                                        <span class="member-designation">Fire Fighter</span>
                                        <div class="social-links team-social">
                                            <ul>
                                                <li><a href="https://facebook.com
                                    "
                                                        target="_blank"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="https://twitter.com
                                    "
                                                        target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://linkedin.com/" target="_blank"><i
                                                            class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="https://youtube.com
                                    "
                                                        target="_blank"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-3-pagination circle-dot-pagination wow fadeInUp" data-wow-delay=".3s"></div>
                </div>
            </div>
        </section>
        <!-- personel area end  -->

        <!-- gallery kegiatan area start  -->
        <section id="jops" class="bg-white operations-area pt-80 pb-130 p-relative z-index-2">
            <div class="container">
                <div class="row justify-content-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-lg-8">
                        <div class="bd-section-title-wrapper centered-title operation-title">
                            <div class="bd-section-subtitle st-b">
                                <div class="subtitle-text">activtys <span>gallery</span></div>
                            </div>
                            <h3 class="bd-section-title mb-50">kegitan dissenlek kormar
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="gallery-tab-wrapper">
                        <div class="gallery-tab-nav mb-65">
                            <nav>
                                <div class="nav nav-tabs masonary-menu">
                                    <button class="nav-link active" data-filter=".c-1">SUBDIS 1</button>
                                    <button class="nav-link" data-filter=".c-2">SUBDIS 2</button>
                                    <button class="nav-link" data-filter=".c-3">SUBDIS 3</button>
                                    <button class="nav-link" data-filter=".c-4">SUBDIS 4</button>
                                    <button class="nav-link" data-filter=".c-5">SUBDIS 5</button>
                                </div>
                            </nav>
                        </div>
                        <div class="gallery-tab-content">
                            <div class="tab-content">
                                <div class="">
                                    <div class="grid gallery-wrapper row">
                                        <div class="col-lg-4 col-md-6 grid-item c-1">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/army/gallery1.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/army/gallery1.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-1">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/army/gallery2.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/army/gallery2.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-1">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/army/gallery3.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/army/gallery3.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-1">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/army/gallery4.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/army/gallery4.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-1">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/army/gallery5.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/army/gallery5.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-1">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/army/gallery6.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/army/gallery6.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-1">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/army/gallery7.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/army/gallery7.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-1">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/army/gallery8.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/army/gallery8.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-2">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/navy/gallery1.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/navy/gallery1.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-2">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/navy/gallery2.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/navy/gallery2.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-2">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/navy/gallery3.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/navy/gallery3.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-2">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/navy/gallery4.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/navy/gallery4.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-2">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/navy/gallery5.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/navy/gallery5.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-2">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/navy/gallery6.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/navy/gallery6.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-2">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/navy/gallery7.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/navy/gallery7.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-3">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/police/gallery1.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/police/gallery1.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-3">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/police/gallery2.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/police/gallery2.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-3">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/police/gallery3.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/police/gallery3.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-3">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/police/gallery4.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/police/gallery4.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-3">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/police/gallery5.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/police/gallery5.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-3">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/police/gallery6.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/police/gallery6.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-4">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/air-force/gallery1.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/air-force/gallery1.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-4">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/air-force/gallery2.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/air-force/gallery2.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-4">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/air-force/gallery3.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/air-force/gallery3.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-4">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/air-force/gallery4.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/air-force/gallery4.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-4">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/air-force/gallery5.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/air-force/gallery5.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-4">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/air-force/gallery6.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/air-force/gallery6.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-4">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/air-force/gallery7.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/air-force/gallery7.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-4">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/air-force/gallery8.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/air-force/gallery8.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-5">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/fire/gallery1.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/fire/gallery1.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-5">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/fire/gallery2.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/fire/gallery2.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-5">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/fire/gallery3.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/fire/gallery3.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-5">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/fire/gallery4.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/fire/gallery4.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-5">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/fire/gallery5.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/fire/gallery5.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-5">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/fire/gallery6.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/fire/gallery6.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-5">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/fire/gallery7.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/fire/gallery7.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 grid-item c-5">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ 'armado/' }}assets/img/gallery/fire/gallery8.jpg"
                                                            alt="img not found">
                                                        <div class="gallery-overlay"></div>
                                                    </div>
                                                    <div class="gallery-thumb-action">
                                                        <a class="action-plus-btn popup-image"
                                                            href="assets/img/gallery/fire/gallery8.jpg"><i
                                                                class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center gallery-btn mt-25 mb-30">
                        <a href="javascript:void(0)" class="text-btn load-more-btn">Load More</a>
                    </div>
                </div>
            </div>

        </section>
        <!-- gallery kegiatan area end  -->

    </main>

    <!-- footer-area-start -->
    <footer id="footer" class="footer1-bg footer-sticky"
        data-background="{{ 'armado/' }}assets/img/bg/footer2-bg.jpg">
        <div class="footer1-overlay"></div>
        <div class="contact-meta-area">
            <div class="container">
                <div class="contact-meta-wrapper">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                            <div class="meta-item contact-meta mb-30">
                                <div class="meta-item-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="meta-item-content">
                                    <div class="meta-title">Emargency Call</div>
                                    <p><a href="tel:+91036259003">+91 036 259 003</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                            <div class="meta-item contact-meta mb-30">
                                <div class="meta-item-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="meta-item-content">
                                    <div class="meta-title">Email Us</div>
                                    <p><a href="mailto:info@gmail.com">info@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                            <div class="meta-item contact-meta mb-30">
                                <div class="meta-item-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="meta-item-content">
                                    <div class="meta-title">Location</div>
                                    <p>Potter road, AV 02, NYE</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                            <div class="meta-item contact-meta mb-30">
                                <div class="meta-item-icon">
                                    <i class="fad fa-share-alt"></i>
                                </div>
                                <div class="meta-item-content">
                                    <div class="meta-title">Social Links</div>
                                    <div class="social-links follow-us">
                                        <ul>
                                            <li><a href="https://facebook.com
                                    "
                                                    target="_blank"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="https://twitter.com
                                    "
                                                    target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://linkedin.com/" target="_blank"><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="https://youtube.com
                                    "
                                                    target="_blank"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="footer-area footer-area1 footer-area1-bg pt-65 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                        <div class="mb-40 footer-widget footer1-widget footer1-widget1">
                            <div class="footer-logo footer1-logo">
                                <a href="index.html"><img src="{{ 'armado/' }}assets/img/logo/logo-white.png"
                                        alt="img not found"></a>
                            </div>
                            <p class="mb-55">A security agency is a governmental organization which conducts
                                intelligence activities for the internal security of a
                                nation.</p>
                            <div class="newsletter-form">
                                <form action="#">
                                    <div class="newsletter-input-wrapper">
                                        <input type="email" placeholder="Email address">
                                        <button type="submit" class="fill-btn"><i
                                                class="fab fa-telegram-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                        <div class="mb-40 footer-widget footer1-widget footer1-widget2">
                            <div class="footer-widget-title">
                                <h4>Important Links</h4>
                            </div>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">Features</a></li>
                                    <li><a href="contact.html">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                        <div class="mb-40 footer-widget footer1-widget footer1-widget3 ">
                            <div class="footer-widget-title">
                                <h4>More Links</h4>
                            </div>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="service-details.html">Ambulance Service</a></li>
                                    <li><a href="service-details.html">Fire Investigation</a></li>
                                    <li><a href="service-details.html">Community Safety</a></li>
                                    <li><a href="blog-2.html">Blog Grid</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                        <div class="mb-40 footer-widget footer1-widget footer1-widget4 ">
                            <div class="footer-widget-title">
                                <h4>Find on Map</h4>
                            </div>
                            <div class="location-map-footer">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6593.0772915468015!2d-73.99357413118337!3d40.7413618836947!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a6bd917da7%3A0x79997d3983197d7c!2sMadison%20Square%20Park!5e0!3m2!1sen!2sbd!4v1667729817880!5m2!1sen!2sbd"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="copyright-area copyright-1-area">
            <div class="container">
                <div class="copyright-1-inner">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="text-center copyright-text copyright-1-text">
                                Copyright &copy; 2023 by <a href="#">Armado</a>. All rights reserved.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->

    <!-- preloader  -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="K" class="letters-loading">
                        K
                    </span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- JS here -->
    <script src="{{ 'armado/assets/js/vendor/jquery-3.6.0.min.js' }}"></script>
    <script src="{{ 'armado/assets/js/vendor/waypoints.min.js' }}"></script>
    <script src="{{ 'armado/assets/js/bootstrap.bundle.min.js' }}"></script>
    <script src="{{ 'armado/assets/js/meanmenu.js' }}"></script>
    <script src="{{ 'armado/assets/js/swiper-bundle.min.js' }}"></script>
    <script src="{{ 'armado/assets/js/magnific-popup.min.js' }}"></script>
    <script src="{{ 'armado/assets/js/backToTop.js' }}"></script>
    <script src="{{ 'armado/assets/js/nice-select.min.js' }}"></script>
    <script src="{{ 'armado/assets/js/ajax-form.js' }}"></script>
    <script src="{{ 'armado/assets/js/wow.min.js' }}"></script>
    <script src="{{ 'armado/assets/js/isotope.pkgd.min.js' }}"></script>
    <script src="{{ 'armado/assets/js/imagesloaded.pkgd.min.js' }}"></script>
    <script src="{{ 'armado/assets/js/jquery.appear.js' }}"></script>
    <script src="{{ 'armado/assets/js/jquery.odometer.min.js' }}"></script>
    <script src="{{ 'armado/assets/js/slick.min.js' }}"></script>
    <script src="{{ 'armado/assets/js/js_circle-progress.min.js' }}"></script>
    <script src="{{ 'armado/assets/js/main.js' }}"></script>
</body>

</html>
