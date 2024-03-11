<!DOCTYPE html>
<html class="no-js theme-red2" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @php
        $asset = asset('assets/');
    @endphp
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curriculum Vitae - Rio Anugrah A.S</title>
    <meta name="author" content="Rio Anugrah A.S">
    <meta name="description" content="Curriculum Vitae Rio Anugrah A.S">
    <meta name="keywords" content="curriculum vitae, cv developer, cv web developer">
    <meta name="robots" content="INDEX,FOLLOW">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ $asset }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ $asset }}/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ $asset }}/css/magnific-popup.min.css">
    <link rel="stylesheet" href="{{ $asset }}/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ $asset }}/css/style.css">
</head>

<body>
    <div class="preloader ">
        {{-- <button class="th-btn preloaderCls link-anim"><span class="text-anime"><span class="text">Cancel Preloader</span></span></button> --}}
        <div class="preloader-inner">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" height="128px" width="128px" class="pl">
                <circle stroke-dashoffset="-376.4" stroke-dasharray="377 377" stroke-linecap="round"
                    transform="rotate(-90,64,64)" stroke-width="8" stroke="hsl(3,90%,55%)" fill="none" r="60"
                    cy="64" cx="64" class="pl__ring1"></circle>
                <circle stroke-dashoffset="-329.3" stroke-dasharray="329.9 329.9" stroke-linecap="round"
                    transform="rotate(-90,64,64)" stroke-width="7" stroke="hsl(13,90%,55%)" fill="none" r="52.5"
                    cy="64" cx="64" class="pl__ring2"></circle>
                <circle stroke-dashoffset="-288.6" stroke-dasharray="289 289" stroke-linecap="round"
                    transform="rotate(-90,64,64)" stroke-width="6" stroke="hsl(23,90%,55%)" fill="none" r="46"
                    cy="64" cx="64" class="pl__ring3"></circle>
                <circle stroke-dashoffset="-254" stroke-dasharray="254.5 254.5" stroke-linecap="round"
                    transform="rotate(-90,64,64)" stroke-width="5" stroke="hsl(33,90%,55%)" fill="none" r="40.5"
                    cy="64" cx="64" class="pl__ring4"></circle>
                <circle stroke-dashoffset="-225.8" stroke-dasharray="226.2 226.2" stroke-linecap="round"
                    transform="rotate(-90,64,64)" stroke-width="4" stroke="hsl(43,90%,55%)" fill="none" r="36"
                    cy="64" cx="64" class="pl__ring5"></circle>
                <circle stroke-dashoffset="-203.9" stroke-dasharray="204.2 204.2" stroke-linecap="round"
                    transform="rotate(-90,64,64)" stroke-width="3" stroke="hsl(53,90%,55%)" fill="none" r="32.5"
                    cy="64" cx="64" class="pl__ring6"></circle>
            </svg>
        </div>
    </div>

    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a class="icon-masking" href="{{ url('/') }}">
                    <span data-mask-src="{{ $asset }}/img/logo5.svg" class="mask-icon"></span>
                    <img src="{{ $asset }}/img/logo5.svg">
                </a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="index.html">
                            <div class="link-anim">
                                <span class="text-anime">
                                    <span class="text">HOME</span>
                                </span>
                            </div>
                        </a>
                    </li>
                    <li><a href="index.html#about-sec">
                            <div class="link-anim">
                                <span class="text-anime">
                                    <span class="text">ABOUT</span>
                                </span>
                            </div>
                        </a></li>
                    <li><a href="index.html#portfolio-sec">
                            <div class="link-anim">
                                <span class="text-anime">
                                    <span class="text">PORTFOLIO</span>
                                </span>
                            </div>
                        </a></li>
                    <li>
                        <a href="#contactModal" data-bs-toggle="modal" data-bs-target="#contactModal">
                            <div class="link-anim">
                                <span class="text-anime">
                                    <span class="text">CONTACT</span>
                                </span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="color-scheme-wrap active">
        <button class="switchIcon"><i class="far fa-palette"></i></button>
        <h4 class="color-scheme-wrap-title"><i class="far fa-palette"></i> Color Switcher</h4>
        <div class="color-switch-btns">
            <button data-color="#D21C23"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#EB5939"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#FF9301"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#00D061"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#0092FF"><i class="fa-solid fa-droplet"></i></button>
        </div>
    </div>

    <header class="th-header header-layout2 onepage-nav">
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <!-- Main Menu Area -->
                <div class="menu-area">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="header-logo">
                                    <a class="icon-masking" href="{{ url('/') }}">
                                        <span data-mask-src="{{ $asset }}/img/logo5.svg" class="mask-icon"></span>
                                        <img src="{{ $asset }}/img/logo5.svg" alt="Haona">
                                    </a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                        <li>
                                            <a href="#hero">
                                                <div class="link-anim">
                                                    <span class="text-anime">
                                                        <span class="text">HOME</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li><a href="#about-sec">
                                                <div class="link-anim">
                                                    <span class="text-anime">
                                                        <span class="text">ABOUT</span>
                                                    </span>
                                                </div>
                                            </a></li>
                                        <li><a href="#portfolio-sec">
                                                <div class="link-anim">
                                                    <span class="text-anime">
                                                        <span class="text">PORTFOLIO</span>
                                                    </span>
                                                </div>
                                            </a></li>
                                        <li><a href="#contact-sec">
                                                <div class="link-anim">
                                                    <span class="text-anime">
                                                        <span class="text">CONTACT</span>
                                                    </span>
                                                </div>
                                            </a></li>
                                    </ul>
                                </nav>
                                <div class="header-button d-flex d-lg-none">
                                    <button type="button" class="th-menu-toggle"><i
                                            class="far fa-bars"></i></button>
                                </div>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <div class="header-button">
                                    <a href="#contact-sec" class="th-btn style-border link-anim"><span
                                            class="text-anime"><span class="text">LET'S TALK</span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="th-hero-wrapper hero-2" id="hero">
        <div class="hero-bg-shape">
            <img src="{{ $asset }}/img/bg/hero-2-bg-shape.png" alt="img">
        </div>
        <div class="container">
            <div class="row gy-5 justify-content-center align-items-center flex-row-reverse">
                <div class="col-xxl-7 col-xl-6 col-lg-7">
                    <div class="hero-img-2 text-center">
                        <div class="thumb">
                            <img src="{{ $asset }}/img/normal/cover.jpg" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-6 col-lg-5">
                    <div class="hero-style2">
                        <h4 class="hero-subtitle"><img class="me-2" src="{{ $asset }}/img/icon/hand.svg" alt="icon">
                            HI I’ M RIO ANUGRAH ADAM SAPUTRA</h4>
                        <h1 class="hero-title text-white">
                            <span class="text-theme">WEB</span> DEVELOPER
                        </h1>
                        {{-- <p class="hero-text">UI/UX design focuses on creating user-friendly and visually appealing
                            interfaces for products.</p> --}}
                        <div class="btn-wrap">
                            <a href="blog-details.html" class="th-btn link-anim">
                                <span class="text-anime">
                                    <span class="text">Download cv</span>
                                </span>
                                <i class="fa-solid fa-download ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-bg-text">
            WEB DEVELOPER
        </div>
    </div>

    <div class="overflow-hidden marquee-area-2 ">
        <div class="container-fluid">
            <div class="slider__marquee">
                <div class="marquee_mode marquee-wrap-2">
                    <h6 class="item marquee-item">
                        <a href="#"><img src="{{ $asset }}/img/shape/star-icon2.svg " alt="img">Website</a>
                    </h6>
                    <h6 class="item marquee-item">
                        <a href="#"><img src="{{ $asset }}/img/shape/star-icon2.svg " alt="img">Web Apps</a>
                    </h6>
                    <h6 class="item marquee-item">
                        <a href="#"><img src="{{ $asset }}/img/shape/star-icon2.svg " alt="img">Mobile Apps</a>
                    </h6>
                    <h6 class="item marquee-item">
                        <a href="#"><img src="{{ $asset }}/img/shape/star-icon2.svg " alt="img">Illustration</a>
                    </h6>
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 mb-50 mb-xl-0">
                    <div class="img-box2">
                        <div class="img1">
                            <img src="{{ $asset }}/img/normal/cover2.jpg" alt="About">
                            <div class="year-counter2 jump">
                                <div class="year-counter-icon">
                                    <img src="{{ $asset }}/img/icon/about2-icon1.svg" alt="img">
                                </div>
                                <div class="year-counter-details">
                                    <div class="year-counter_number"><span class="counter-number">3</span>+</div>
                                    <p class="year-counter_text">Year Of Experience</p>
                                </div>
                            </div>
                            <div class="apps-icon jump-reverse icon1">
                                <img src="{{ $asset }}/img/icon/ai-icon.svg" alt="img">
                            </div>
                            <div class="apps-icon jump icon2">
                                <img src="{{ $asset }}/img/icon/laravel.svg" alt="img">
                            </div>
                            <div class="apps-icon movingX icon3">
                                <img src="{{ $asset }}/img/icon/photoshop.svg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="title-area mb-32">
                        <span class="sub-title2">About Us</span>
                        <h2 class="sec-title">I AM AVAILABLE FOR DEVELOPERS PROJECT</h2>
                        <p class="sec-text">Pengalaman bekerja di industri perangkat keras komputer. Dukungan IT di Pabrik (Perangkat Keras dan Perangkat Lunak), terampil dalam PHP dengan kerangka kerja, PhpMyAdmin, Laravel, Aplikasi Selular, Pemecahan masalah jaringan dan MySQL. Kuat dan profesional dengan teknisi Teknologi Informasi yang fokus pada perangkat keras laptop dan komputer. Dan saya akan mencoba yang terbaik dalam pekerjaan saya.</p>
                    </div>
                    <div class="row gy-30">
                        <div class="col-md-12">
                            <div class="about-contact-grid">
                                <div class="about-contact-icon">
                                    <div class="icon-masking">
                                        <span class="mask-icon"
                                            data-mask-src="{{ $asset }}/img/icon/about2-contact-icon1.svg"></span>
                                        <img src="{{ $asset }}/img/icon/about2-contact-icon1.svg" alt="icon">
                                    </div>
                                </div>
                                <div class="about-contact-details">
                                    <p class="about-contact-details-text">Phone :</p>
                                    <h6 class="about-contact-details-title"><a href="tel:6282233684670">0822-3368-4670</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="about-contact-grid">
                                <div class="about-contact-icon">
                                    <div class="icon-masking">
                                        <span class="mask-icon"
                                            data-mask-src="{{ $asset }}/img/icon/about2-contact-icon2.svg"></span>
                                        <img src="{{ $asset }}/img/icon/about2-contact-icon2.svg" alt="icon">
                                    </div>
                                </div>
                                <div class="about-contact-details">
                                    <p class="about-contact-details-text">Email :</p>
                                    <h6 class="about-contact-details-title"><a
                                            href="mailto:rioanugrah999@gmail.com">rioanugrah999@gmail.com</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="about-contact-grid">
                                <div class="about-contact-icon">
                                    <div class="icon-masking">
                                        <span class="mask-icon"
                                            data-mask-src="{{ $asset }}/img/icon/about2-contact-icon4.svg"></span>
                                        <img src="{{ $asset }}/img/icon/about2-contact-icon4.svg" alt="icon">
                                    </div>
                                </div>
                                <div class="about-contact-details">
                                    <p class="about-contact-details-text">Websites :</p>
                                    <h6 class="about-contact-details-title"><a
                                            href="https://rioanugrah.my.id">rioanugrah.my.id</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrap mt-50">
                        <a href="#contact-sec" class="th-btn link-anim">
                            <span class="text-anime">
                                <span class="text">Hire Me</span>
                            </span>
                            <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-hidden position-relative space">
        <div class="section-bg-shape"><img class="d-lg-block d-none" src="{{ $asset }}/img/bg/skill-bg-shape.png"
                alt="img"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="title-area mb-40 text-center text-xl-start">
                        <span class="sub-title2">My skills</span>
                        <h2 class="sec-title">Berpusat pada Pengguna Untuk Kesuksesan Digital</h2>
                        <p class="sec-text">Proses desain biasanya melibatkan kebutuhan pengguna.</p>
                    </div>
                    {{-- <div class="btn-wrap justify-content-xl-start justify-content-center">
                        <a href="#" class="th-btn link-anim">
                            <span class="text-anime">
                                <span class="text">Read More</span>
                            </span>
                            <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                    </div> --}}
                </div>
                <div class="col-xl-6 mt-40 mt-xl-0">
                    <div class="row gy-4">
                        {{-- <div class="col-lg-6">
                            <div class="skill-feature">
                                <div class="skill-feature-logo-wrap">
                                    <div class="skill-feature-icon">
                                        <img src="assets/img/icon/figma.svg" alt="img">
                                    </div>
                                    <h3 class="skill-feature_title">Figma</h3>
                                </div>
                                <div class="progress-value">96%</div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 96%;">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-lg-6">
                            <div class="skill-feature">
                                <div class="skill-feature-logo-wrap">
                                    <div class="skill-feature-icon">
                                        <img src="{{ $asset }}/img/icon/ai-icon.svg" alt="img">
                                    </div>
                                    <h3 class="skill-feature_title">Illustrator</h3>
                                </div>
                                <div class="progress-value">80%</div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 80%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="skill-feature">
                                <div class="skill-feature-logo-wrap">
                                    <div class="skill-feature-icon">
                                        <img src="{{ $asset }}/img/icon/photoshop.svg" alt="img">
                                    </div>
                                    <h3 class="skill-feature_title">Photoshop</h3>
                                </div>
                                <div class="progress-value">90%</div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 90%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="skill-feature">
                                <div class="skill-feature-logo-wrap">
                                    <div class="skill-feature-icon">
                                        <img src="{{ $asset }}/img/icon/xd.svg" alt="img">
                                    </div>
                                    <h3 class="skill-feature_title">Adobe XD</h3>
                                </div>
                                <div class="progress-value">95%</div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 95%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="skill-feature">
                                <div class="skill-feature-logo-wrap">
                                    <div class="skill-feature-icon">
                                        <img src="{{ $asset }}/img/icon/laravel.svg" alt="img">
                                    </div>
                                    <h3 class="skill-feature_title">Laravel</h3>
                                </div>
                                <div class="progress-value">98%</div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 98%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-bg-text section-bg-text-left">
            SKILLS
        </div>
    </div>

    <div class="overflow-hidden position-relative space-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="title-area mb-40 text-center">
                        <span class="sub-title2">Job experience</span>
                        {{-- <h2 class="sec-title">Pixels with Purpose Designs with Impact</h2> --}}
                    </div>
                </div>
            </div>
            <ul class="experience-list-wrap">
                <li class="experience-list">
                    <div class="experience-list-date">
                        March 2021 to Present
                    </div>
                    <div class="experience-card">
                        <div class="experience-card-title-wrap">
                            <h4 class="experience-card-title">Staff IT</h4>
                            <p class="experience-card-location">PT Indonesian Tobacco Tbk.</p>
                        </div>
                        <div class="experience-card-text">
                            <ul>
                                <li>Maintenance Jaringan Internet.</li>
                                <li>Maintenance Komputer.</li>
                                <li>Maintenance CCTV.</li>
                                <li>Membuat Aplikasi Document Center untuk semua departemen.</li>
                                <li>Membuat Desain</li>
                                <li>Developers SI Administrasi APAR & HYDRANT</li>
                                <li>Developers SIAP</li>
                            </ul>
                            {{-- <p>User testing helps identify usability issues, gather and feedback, refine</p> --}}
                        </div>
                        <a href="{{ url('/') }}" class="experience-card-icon">
                            <i class="fal fa-arrow-right-long"></i>
                        </a>
                    </div>
                </li>
                <li class="experience-list">
                    <div class="experience-list-date">
                        December 2020 to Present
                    </div>
                    <div class="experience-card">
                        <div class="experience-card-title-wrap">
                            <h4 class="experience-card-title">Full Stack Developers</h4>
                            <p class="experience-card-location">CV. Pesona Plesiran Indonesia</p>
                        </div>
                        <div class="experience-card-text">
                            <ul>
                                <li>Developers Website.</li>
                                <li>Developers Payment Gateway.</li>
                                <li>Developers Mobile Apps</li>
                            </ul>
                            {{-- <p>Common tools include and Sketch, Figma, Adobe XD for design In Vision, Marvel </p> --}}
                        </div>
                        <a href="{{ url('/') }}" class="experience-card-icon">
                            <i class="fal fa-arrow-right-long"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <section class="space" id="portfolio-sec">
        <div class="container">
            <div class="row justify-content-center filter-active gx-70 gy-80">
                <div class="col-xl-6 filter-item">
                    <div class="title-area mb-0">
                        <span class="sub-title2">My Portfolio</span>
                        <h2 class="sec-title">Website Pesona Plesiran Indonesia</h2>
                    </div>
                </div>
                <div class="col-xl-6 filter-item">
                    <div class="portfolio-card style2">
                        <div class="portfolio-img img-shine">
                            <img src="{{ $asset }}/img/project/webppi.jpg" alt="portfolio image">
                        </div>
                        <div class="portfolio-details">
                            <p class="portfolio-subtitle">Web Developer</p>
                            <h3 class="portfolio-title"><a href="#portfolioModal" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">Pesona Plesiran Indonesia</a></h3>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-6 filter-item">
                    <div class="portfolio-card style2">
                        <div class="portfolio-img img-shine">
                            <img src="assets/img/project/project_2_1.png" alt="portfolio image">
                        </div>
                        <div class="portfolio-details">
                            <p class="portfolio-subtitle">IntuiInteract Design</p>
                            <h3 class="portfolio-title"><a href="#portfolioModal" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">Designing the Future Today</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 filter-item">
                    <div class="portfolio-card style2">
                        <div class="portfolio-img img-shine">
                            <img src="assets/img/project/project_2_3.png" alt="portfolio image">
                        </div>
                        <div class="portfolio-details">
                            <p class="portfolio-subtitle">Pixel Pulse Studios</p>
                            <h3 class="portfolio-title"><a href="#portfolioModal" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">Where Pixels Meet Perfection</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 filter-item">
                    <div class="btn-wrap justify-content-center">
                        <a class="circle-btn th-btn gsap-magnetic" href="https://www.behance.net/">
                            <div class="circle-btn-wrap">
                                <i class="far fa-arrow-up-long"></i>
                                <span>Explore All Project</span>
                            </div>
                        </a>
                    </div>
                </div> --}}

            </div>
        </div>
        <!--==============================
    Popup Modal v1
============================== -->
        <div class="th-modal modal fade" id="portfolioModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="container">
                        <button type="button" class="icon-btn btn-close" data-bs-dismiss="modal"
                            aria-label="Close"><i class="fa-regular fa-xmark"></i></button>
                        <div class="page-single bg-title">
                            <div class="page-img mb-30">
                                <img class="w-100" src="assets/img/project/project_1_1.png" alt="portfolio Image">
                            </div>
                            <div class="page-content">
                                <h2 class="h3 page-title text-white">Where Visibility Meets Success</h2>
                                <div class="row gy-30">
                                    <div class="col-xl-7">
                                        <p class="mb-20 text-light">The timeline varies depending on the complexity of
                                            the project. Simple projects may take a few weeks, while more complex ones
                                            could extend to several months. Timelines are influenced by factors like
                                            scope, feedback iterations, and client responsiveness.</p>

                                        <p class="mb-xl-4 mb-0 text-light">Project timelines vary based on complexity
                                            and scope. Small projects may take a few weeks, while larger ones could span
                                            several months. Timelines are established during project kickoff. We use a
                                            range of industry-standard tools such as Sketch.</p>
                                    </div>
                                    <div class="col-xl-5">
                                        <ul class="portfolio-info-list text-light">
                                            <li><strong>Service Category:</strong> Rubix Carabil Tower</li>
                                            <li><strong>Clients:</strong> David Malan</li>
                                            <li><strong>Project Date:</strong> 13 June, 2020</li>
                                            <li><strong>Avenue End Date:</strong> 22 July, 2023</li>
                                            <li><strong>Locations:</strong> NewYork - 2546 Firs, USA</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row gy-30 gx-40 align-items-center">
                                    <div class="col-xl-6">
                                        <div class="page-img mb-0">
                                            <img class="w-100" src="assets/img/project/project_1_2.png"
                                                alt="portfolio Image">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <h4 class="box-title text-white">Services Benefits:</h4>
                                        <p class="text-light">We can do both. We can adhere to existing brand
                                            guidelines, ensuring consistency, or help develop new ones if a client is
                                            looking for a fresh identity. Our goal is to align the UI/UX design with the
                                            brand's overall strategy product meets the needs.</p>
                                        <div class="checklist style7">
                                            <ul>
                                                <li class="text-light"><i class="far fa-check-circle"></i>We use the
                                                    latest diagnostic equipment</li>
                                                <li class="text-light"><i class="far fa-check-circle"></i>Automotive
                                                    service our clients receive</li>
                                                <li class="text-light"><i class="far fa-check-circle"></i>We are a
                                                    member of Professional Service</li>
                                                <li class="text-light"><i class="far fa-check-circle"></i>Digital how
                                                    will activities impact traditional</li>
                                                <li class="text-light"><i class="far fa-check-circle"></i>Architect
                                                    and technical engineer</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space position-relative">
        <div class="section-bg-shape left-shadow"><img class="d-lg-block d-none"
                src="assets/img/bg/award-bg-shape.png" alt="img"></div>
        <div class="container">
            <div class="row align-items-center gx-70 gy-40">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sub-title2 text-white">Award</span>
                        <h2 class="sec-title">Award & Recognitions</h2>
                        {{-- <p class="sec-text me-xxl-5">UI/UX design focuses on creating intuitive and aesthetically
                            pleasing user interfaces and experiences. It's crucial for retention businesses as it
                            enhances user </p> --}}
                    </div>
                    <div class="award-thumb">
                        <img src="{{ $asset }}/img/normal/award_1_1.png" alt="img">
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="award-list-wrap">
                        <li class="award-single-list">
                            <div class="award-title-wrap">
                                <h4 class="box-title ">Coming Soon</h4>
                                {{-- <p class="award-single-list-text">Winner 2023</p> --}}
                            </div>
                            <a href="#" class="icon-btn">
                                <i class="far fa-arrow-up-long rotate-right"></i>
                            </a>
                        </li>
                        {{-- <li class="award-single-list">
                            <div class="award-title-wrap">
                                <h4 class="box-title">Digi day Awards</h4>
                                <p class="award-single-list-text">Winner 2022</p>
                            </div>
                            <a href="https://www.behance.net/" class="icon-btn">
                                <i class="far fa-arrow-up-long rotate-right"></i>
                            </a>
                        </li>
                        <li class="award-single-list">
                            <div class="award-title-wrap">
                                <h4 class="box-title">Pearl Awards</h4>
                                <p class="award-single-list-text">Winner 2021</p>
                            </div>
                            <a href="https://www.behance.net/" class="icon-btn">
                                <i class="far fa-arrow-up-long rotate-right"></i>
                            </a>
                        </li>
                        <li class="award-single-list">
                            <div class="award-title-wrap">
                                <h4 class="box-title">Lovie Awards</h4>
                                <p class="award-single-list-text">Winner 2020</p>
                            </div>
                            <a href="https://www.behance.net/" class="icon-btn">
                                <i class="far fa-arrow-up-long rotate-right"></i>
                            </a>
                        </li> --}}
                    </ul>
                </div>

            </div>
        </div>
        <div class="section-bg-text section-bg-text-right">
            AWARD
        </div>
    </section>

    <div class="space overflow-hidden" id="contact-sec">
        <div class="container">
            <div class="row gx-35">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sub-title2">Contact</span>
                        <h2 class="title">Contact With Me</h2>
                    </div>
                    <div class="contact-info-wrap">
                        <div class="row gy-35">
                            <div class="col-md-6">
                                <div class="about-contact-grid">
                                    <div class="about-contact-icon">
                                        <div class="icon-masking">
                                            <span class="mask-icon"
                                                data-mask-src="{{ $asset }}/img/icon/about2-contact-icon1.svg"></span>
                                            <img src="{{ $asset }}/img/icon/about2-contact-icon1.svg" alt="icon">
                                        </div>
                                    </div>
                                    <div class="about-contact-details">
                                        <p class="about-contact-details-text">Phone :</p>
                                        <h6 class="about-contact-details-title"><a href="tel:082233684670">0822-3368-4670</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-contact-grid">
                                    <div class="about-contact-icon">
                                        <div class="icon-masking">
                                            <span class="mask-icon"
                                                data-mask-src="{{ $asset }}/img/icon/about2-contact-icon2.svg"></span>
                                            <img src="{{ $asset }}/img/icon/about2-contact-icon2.svg" alt="icon">
                                        </div>
                                    </div>
                                    <div class="about-contact-details">
                                        <p class="about-contact-details-text">Email :</p>
                                        <h6 class="about-contact-details-title"><a
                                                href="mailto:help@gmail.com">rioanugrah999@gmail.com</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-contact-grid">
                                    <div class="about-contact-icon">
                                        <div class="icon-masking">
                                            <span class="mask-icon"
                                                data-mask-src="{{ $asset }}/img/icon/about2-contact-icon4.svg"></span>
                                            <img src="{{ $asset }}/img/icon/about2-contact-icon4.svg" alt="icon">
                                        </div>
                                    </div>
                                    <div class="about-contact-details">
                                        <p class="about-contact-details-text">Websites :</p>
                                        <h6 class="about-contact-details-title"><a
                                                href="https://rioanugrah.my.id">rioanugrah.my.id</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="contact-map mt-40">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
                                allowfullscreen="" loading="lazy"></iframe>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-6">
                    <!--==============================
Contact Area
==============================-->
                    <div class="contact-form-v1 bg-title">
                        <form method="POST" class="contact-form send-mail" enctype="multipart/form-data">
                            @csrf
                            <div class="row gx-30">
                                <div class="form-group col-md-6 style-border">
                                    <label for="name">Your Name:</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Name :" required>
                                </div>
                                <div class="form-group col-md-6 style-border">
                                    <label for="email">Your Email:</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email :" required>
                                </div>
                                <div class="form-group col-md-12 style-border">
                                    <label for="subject">Your Question:</label>
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject :" required>
                                </div>
                                <div class="form-group col-12 style-border">
                                    <label for="subject">Your Comment:</label>
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                        placeholder="Message :" required></textarea>
                                </div>
                                <div class="form-btn col-12">
                                    <button class="th-btn w-100" type="submit">Send Message</button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer class="footer-wrapper footer-layout2 bg-title" data-bg-src="{{ $asset }}/img/bg/footer_bg_2.jpg">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <div class="footer-widget onepage-nav">
                            <div class="footer-title-wrap">
                                <h2 class="footer-top-title">Let’s Talk</h2>
                                <a href="#contact-sec" class="th-btn link-anim"><span class="text-anime"><span
                                            class="text">CLICK TO CONTACT</span></span><i
                                        class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6 col-xl-auto">
                        <div class="widget newsletter-widget footer-widget">
                            <h3 class="widget_title">Quick Link</h3>
                            <div class="footer-widget-links onepage-nav">
                                <ul>
                                    <li><a href="#about-sec">Resume</a></li>
                                    <li><a href="#portfolio-sec">Protfolio</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="about.html">Contact</a></li>
                                </ul>
                            </div>
                            <form class="newsletter-form">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Email Address"
                                        required="">
                                    <button type="submit" class="th-btn"><i class="fas fa-paper-plane"></i></button>
                                </div>
                                <div class="check-group">
                                    <input type="checkbox" id="privacyPolicy">
                                    <label for="privacyPolicy">I agree to all your terns and policies</label>
                                </div>
                            </form>
                        </div>
                    </div> --}}
                    <div class="col-md-6">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Contact</h3>
                            <div class="th-widget-contact">
                                {{-- <p class="info-box_text">8502 Preston Rd. Inglewood, Maine 98380</p> --}}
                                <p class="info-box_text">
                                    <a href="mailto:rioanugrah999@gmail.com" class="info-box_link">rioanugrah999@gmail.com</a>
                                </p>
                                <p class="info-box_text">
                                    <a href="tel:6282233684670" class="info-box_link">0822-3368-4670</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright-wrap bg-black3">
            <div class="container">
                <div class="row gy-2 align-items-center">
                    <div class="col-lg-6">
                        <p class="copyright-text">
                            <i class="fal fa-copyright"></i> 2024 All Rights Reserved By <a
                                href="{{ url('/') }}">Rio Anugrah</a>
                        </p>
                    </div>
                    {{-- <div class="col-lg-6 text-center text-lg-end">
                        <div class="footer-links">
                            <ul>
                                <li><a href="https://www.facebook.com/">Facebook</a></li>
                                <li><a href="https://www.twitter.com/">Twitter</a></li>
                                <li><a href="https://www.instagram.com/">Instagram</a></li>
                                <li><a href="https://www.linkedin.com/">Linkedin</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </footer>

    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <!-- Jquery -->
    <script src="{{ $asset }}/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Swiper Js -->
    <script src="{{ $asset }}/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ $asset }}/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="{{ $asset }}/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="{{ $asset }}/js/jquery.counterup.min.js"></script>
    <!-- Range Slider -->
    <script src="{{ $asset }}/js/jquery-ui.min.js"></script>
    <!-- Isotope Filter -->
    <script src="{{ $asset }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ $asset }}/js/isotope.pkgd.min.js"></script>

    <!-- Gsap -->
    <script src="{{ $asset }}/js/gsap.min.js"></script>

    <!-- Gsap -->
    <script src="{{ $asset }}/js/wow.min.js"></script>

    <!-- Marquee -->
    <script src="{{ $asset }}/js/jquery.marquee.min.js"></script>

    <!-- Main Js File -->
    <script src="{{ $asset }}/js/main.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.send-mail').submit(function(e) {
            // alert('coba');
            e.preventDefault();
            let formData = new FormData(this);
            // $('#image-input-error').text('');
            $.ajax({
                type:'POST',
                url: "{{ route('send-mail') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: (result) => {
                    if(result.success != false){
                        alert(result.message_content);
                    }else{
                        alert(result.message_content);
                    }
                },
                error: function (request, status, error) {
                    alert(error);
                }
            });
        });
    </script>
</body>

</html>
