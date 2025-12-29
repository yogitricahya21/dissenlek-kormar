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
    <link rel="stylesheet" href="{{ asset('armado/assets/css/preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('armado/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('armado/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('armado/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('armado/assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('armado/assets/css/backToTop.css') }}">
    <link rel="stylesheet" href="{{ asset('armado/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('armado/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('armado/assets/css/fontAwesome5Pro.css') }}">
    <link rel="stylesheet" href="{{ asset('armado/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('armado/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('armado/assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('armado/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('armado/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div>

    <!-- header area  -->
    <header>
        <div id="header-sticky" class="header-main header-main1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="header-main-content-wrapper">
                            <div class="header-main-left header-main-left-header1">
                                <div class="header-logo header1-logo logo-wrapper">
                                    <a href="#home" class="logo-white"><img
                                            src="{{ asset('storage/' . $about->logo) }}" alt="logo-img"></a>
                                    <span class="logo-text">DISSENLEK <br> KORPS MARINIR</span>
                                </div>
                            </div>
                            <div class="header-main-right header-main-right-header1">
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
                                <div class="menu-bar d-xl-none">
                                    <a class="side-toggle" href="#about">
                                        <div class="dot-icon">
                                            <img src="{{ asset('armado/assets/img/icons/side-toggle.png') }}"
                                                alt="img not found">
                                        </div>
                                    </a>
                                </div>
                                <div class="meta-items meta-items-header1 d-none d-lg-inline-flex">
                                    <div class="meta-item header-meta-item">
                                        <a href="#footer">
                                            <div class="meta-item-icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                        </a>
                                        <div class="meta-item-content d-none d-xxl-inline-block">
                                            <div class="meta-title">Emargency Call</div>
                                            <p><a href="#0">+91 036 259 003</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <form action="#0" class="filter-search-input" onsubmit="return false;">
                        <input type="text" id="global-search" placeholder="Cari kata kunci...">
                        <button type="button" id="search-trigger"><i class="fal fa-search"></i></button>
                    </form>
                </div>
                <div class="offset-widget offset-support mb-30">
                    <div class="meta-item header-meta-item">
                        <a href="#0">
                            <div class="meta-item-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                        </a>
                        <div class="meta-item-content">
                            <div class="meta-title"><span>Emargency</span> Call</div>
                            <p><a href="#0">+91 036 259 003</a></p>
                        </div>
                    </div>
                </div>
                <div class="mb-0 offset-widget offset-social">
                    <div class="social-links">
                        <ul>
                            <li><a href="#0" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#0" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#0" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#0" target="_blank"><i class="fab fa-youtube"></i></a></li>
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
                                @if ($banner->media_type == 'image')
                                    <div class="banner-bg banner-bg3 banner-bg3-1"
                                        data-background="{{ asset('assets/img/banner/' . $banner->media_file) }}"
                                        style="background-image: url('{{ asset('assets/img/banner/' . $banner->media_file) }}');">
                                    </div>
                                @else
                                    <div class="banner-bg banner-bg3 banner-bg3-1 d-none" data-background=""></div>
                                    <div class="video-wrapper p-relative">
                                        <video autoplay muted loop>
                                            <source src="{{ asset('assets/video/' . $banner->media_file) }}"
                                                type="video/mp4">
                                        </video>
                                    </div>
                                @endif
                                <div class="social-links bannner-3-social">
                                    <ul>
                                        <li><a href="" target="_blank"><i class="fab fa-facebook"></i></a>
                                        </li>
                                        <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li><a href="" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                                <div class="armado-shape">
                                    <span class="stroke-text">{{ $banner->stroke_text }}</span>
                                </div>
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
                                                    @if ($banner->eyebrow_text)
                                                        <p class="mb-5">{{ $banner->eyebrow_text }}</p>
                                                    @endif
                                                    <h1 class="mb-10 banner-title">
                                                        {{ $banner->title }}
                                                    </h1>
                                                    <div class="banner-meta-text">
                                                        <span>{{ $banner->subtitle }}</span>
                                                    </div>
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
        <section id="kadis_lalu" class="bg-white features-area pt-130 pb-70 p-relative z-index-2"
            style="background-image: url('{{ asset('armado/assets/img/bg/wall5.jpg') }}');">
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
                                    @foreach ($leaders as $leader)
                                        <div class="swiper-slide">
                                            <div class="team-card team-special">
                                                <div class="team-thumb">
                                                    <div class="panel wow"></div>
                                                    <div class="team-thumb-bg svg-container">
                                                        @include('components.pattern-svg')
                                                    </div>
                                                    <div style="max-width: 250px; margin-bottom: 30px;">
                                                        <a href="#0">
                                                            <img src="{{ asset('storage/' . $leader->image) }}"
                                                                alt="{{ $leader->name }}" class="img-pimpinan">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="team-content">
                                                    <h4 class="member-name"><a href="#">{{ $leader->name }}</a>
                                                    </h4>
                                                    <span class="member-designation">{{ $leader->rank }}</span>
                                                    <p class="mt-2" style="color: #575757;">MASA JABATAN <br>
                                                        {{ $leader->period }}
                                                    </p>
                                                    @if ($leader->is_current)
                                                        <span class="text-white badge bg-primary">Pimpinan Saat
                                                            Ini</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- kepala dinas dari masa ke masa area end  -->

        <!-- personel area start  -->
        <section id="team" class="team-area pt-130 pb-130 p-relative fix z-index-2"
            style="background-image: url('{{ asset('armado/assets/img/bg/wall1.jpg') }}');">

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
                            @foreach ($personnels as $personnel)
                                <div class="swiper-slide">
                                    <div class="team-card team-3">
                                        <div class="team-thumb">
                                            <div class="team-thumb-bg"></div>
                                            <a href="0#">
                                                <img src="{{ asset('storage/' . $personnel->image) }}"
                                                    class="img-personel" alt="{{ $personnel->name }}">
                                            </a>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="member-name">
                                                <a href="#">{{ $personnel->name }}</a>
                                            </h4>
                                            <span class="member-designation">
                                                {{ $personnel->rank }} <br>NRP. {{ $personnel->nrp }}
                                            </span>
                                            <p class="nrp-text">{{ $personnel->position }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="team-3-pagination circle-dot-pagination wow fadeInUp" data-wow-delay=".3s"></div>
                </div>
            </div>
        </section>
        <!-- personel area end  -->

        <!-- gallery kegiatan area start  -->
        {{-- <section id="jops" class="bg-white operations-area pt-80 pb-130 p-relative z-index-2"
            style="background-image: url('{{ asset('armado/assets/img/bg/wall5.jpg') }}');">
            <div class="container">
                <div class="row justify-content-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-lg-8">
                        <div class="bd-section-title-wrapper centered-title operation-title">
                            <div class="bd-section-subtitle st-b">
                                <div class="subtitle-text">activities <span>gallery</span></div>
                            </div>
                            <h3 class="bd-section-title mb-50">kegiatan dissenlek kormar</h3>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="gallery-tab-wrapper wow fadeInUp" data-wow-delay=".3s">
                        <div class="gallery-tab-nav mb-65">
                            <nav>
                                <div class="nav nav-tabs masonary-menu">
                                    <button class="nav-link active" data-filter="*">ALL</button>
                                    <button class="nav-link" data-filter=".duknis">DUKNIS</button>
                                    <button class="nav-link" data-filter=".harsis">HARSIS</button>
                                    <button class="nav-link" data-filter=".urtu">URTU</button>
                                    <button class="nav-link" data-filter=".ren">REN</button>
                                </div>
                            </nav>
                        </div>
                        <div class="gallery-tab-content">
                            <div class="tab-content">
                                <div class="grid gallery-wrapper row">
                                    @foreach ($activities as $index => $item)
                                        <div class="col-lg-4 col-md-6 grid-item {{ strtolower($item->subdis) }}">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ asset('storage/' . $item->image) }}"
                                                            alt="{{ $item->title }}">
                                                        <div class="gallery-overlay">
                                                            <div class="gallery-content-info">
                                                                <h5>{{ $item->title }}</h5>
                                                                <span>{{ \Carbon\Carbon::parse($item->date)->translatedFormat('d M Y') }}</span>
                                                            </div>
                                                            <div class="gallery-thumb-action">
                                                                <a class="action-plus-btn popup-image"
                                                                    href="{{ asset('storage/' . $item->image) }}">
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center gallery-btn mt-25 mb-30">
                        <a href="javascript:void(0)" class="text-btn load-more-btn">Load More</a>
                    </div>
                </div>
            </div>
        </section> --}}
        <section id="jops" class="bg-white operations-area pt-80 pb-130 p-relative z-index-2"
            style="background-image: url('{{ asset('armado/assets/img/bg/wall5.jpg') }}');">
            <div class="container">
                <div class="row justify-content-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-lg-8">
                        <div class="bd-section-title-wrapper centered-title operation-title">
                            <div class="bd-section-subtitle st-b">
                                <div class="subtitle-text">activities <span>gallery</span></div>
                            </div>
                            <h3 class="bd-section-title mb-50">kegiatan dissenlek kormar</h3>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="gallery-tab-wrapper wow fadeInUp" data-wow-delay=".3s">
                        <div class="gallery-tab-nav mb-65">
                            <nav>
                                <div class="nav nav-tabs masonary-menu">
                                    <button class="nav-link active" data-filter="*">ALL</button>
                                    <button class="nav-link" data-filter=".duknis">DUKNIS</button>
                                    <button class="nav-link" data-filter=".harsis">HARSIS</button>
                                    <button class="nav-link" data-filter=".urtu">URTU</button>
                                    <button class="nav-link" data-filter=".ren">REN</button>
                                </div>
                            </nav>
                        </div>

                        <div class="gallery-tab-content">
                            <div class="tab-content">
                                <div class="grid gallery-wrapper row">
                                    @foreach ($activities as $index => $item)
                                        <div class="col-lg-4 col-md-6 grid-item {{ strtolower($item->subdis) }}">
                                            <div class="gallery-single mb-30">
                                                <div class="gallery-thumb-wrapper">
                                                    <div class="gallery-thumb">
                                                        <img src="{{ asset('storage/' . $item->image) }}"
                                                            alt="{{ $item->title }}">
                                                        <div class="gallery-overlay">
                                                            <div class="gallery-content-info">
                                                                <h5 class="activity-title">{{ $item->title }}</h5>
                                                                <span>{{ \Carbon\Carbon::parse($item->date)->translatedFormat('d M Y') }}</span>
                                                            </div>
                                                            <div class="gallery-thumb-action">
                                                                <a class="action-plus-btn popup-image"
                                                                    href="{{ asset('storage/' . $item->image) }}">
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center gallery-btn mt-25 mb-30">
                        <a href="javascript:void(0)" class="text-btn load-more-btn" id="btn-load-more">Load More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery kegiatan area end  -->

    </main>

    <!-- footer-area-start -->
    <footer id="footer" class="footer1-bg footer-sticky"
        data-background="{{ asset('armado/assets/img/bg/wall3.jpg') }}">
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
                                    <p><a href="#0">+62 836 259 003</a></p>
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
                                    <p><a href="#0">dissenlek_kormar@tnial.mil.id</a></p>
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
                                    <p>Jl. Prajurit KKO Usman dan Harun, Jakarta</p>
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
                                            <li><a href="#0" target="_blank"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li><a href="#0" target="_blank"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li><a href="#0" target="_blank"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a href="#0" target="_blank"><i class="fab fa-youtube"></i></a>
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
        <section class="footer-area footer-area1 footer-area1-bg pt-65 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                        <div class="mb-40 footer-widget footer1-widget footer1-widget1">
                            <div class="footer-logo footer1-logo">
                                <a href="#"><img src="{{ asset('storage/' . $about->logo) }}"
                                        alt="img not found"></a>
                            </div>
                            <p class="mb-55">"Menjadi Pusat Pembinaan Senjata dan Elektronika yang Modern, Handal, dan
                                Terintegrasi guna Mewujudkan Kekuatan Korps Marinir yang Tangguh dan Profesional."</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                        <div class="mb-40 footer-widget footer1-widget footer1-widget2">
                            <div class="footer-widget-title">
                                <h4>Important Links</h4>
                            </div>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#about">Profile</a></li>
                                    <li><a href="#kadis">Leader</a></li>
                                    <li><a href="#team">Team</a></li>
                                    <li><a href="#jops">Activty</a></li>
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
                                    <li><a href="">Contact Us</a></li>
                                    <li><a href="">Ambulance Service</a></li>
                                    <li><a href="">Fire Investigation</a></li>
                                    <li><a href="">Community Safety</a></li>
                                    <li><a href="">Blog Grid</a></li>
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
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.621651313296!2d106.83266382695312!3d-6.181366899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f43427f8a3f9%3A0x311609e81501f3f5!2sMako%20Marinir!5e0!3m2!1sid!2sid!4v1767007211887!5m2!1sid!2sid"
                                    width="100%" height="250" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                Copyright &copy; 2025 by <a href="">ytm</a>. Disinfolahta Kormar.
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
    <script src="{{ asset('armado/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('armado/assets/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('armado/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('armado/assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('armado/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('armado/assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('armado/assets/js/backToTop.js') }}"></script>
    <script src="{{ asset('armado/assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('armado/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('armado/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('armado/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('armado/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('armado/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('armado/assets/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('armado/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('armado/assets/js/js_circle-progress.min.js') }}"></script>
    <script src="{{ asset('armado/assets/js/main.js') }}"></script>
    <script src="{{ asset('js/editing.js') }}"></script>
</body>

</html>
