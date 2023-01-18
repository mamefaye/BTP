
@include('head')
        <link rel="stylesheet" href="{{ asset('assets/css/index.min.css') }}" />
    </head>
    <body>
        <header class="header primary-bg" data-page="home">
            @include('header-navbar')
        </header>
        <!--  HOMEPAGE CONTENT START  -->
        <main>
            <section class="hero primary-bg">
                <picture>
                    {{-- <source data-srcset="{{ asset('assets/img/8.jpeg') }}" srcset="{{ asset('assets/img/8.jpeg') }}" type="image/webp" data-role="deco" /> --}}
                    <img class="plan lazy" data-src="{{ asset('assets/img/8.jpeg') }}" src="{{ asset('assets/img/8.jpeg') }}" alt="media" data-role="deco" />
                </picture>
                <div class="container hero_container d-md-flex flex-wrap justify-content-between">
                    <picture>
                        <source
                            {{-- data-srcset="{{ asset('assets/img/8.jpeg') }}" --}}
                            srcset="{{ asset('assets/img/8.jpeg') }}"
                            type="image/webp"
                            data-role="deco"
                            width=50%

                        />
                        <img
                            class="hero_building lazy"
                            data-src="{{ asset('assets/img/8.jpeg') }}"
                            src="{{ asset('assets/img/8.jpeg') }}"
                            alt="media"
                            data-role="deco"
                            width=57%
                        />
                    </picture>
                    <div class="hero_header section_header col-md-7 col-xl-auto">
                        <span class="subtitle subtitle--extended"> Professional. Innovative. Reliable. </span>
                        <h1 class="title">Exceptionals Service Exceeding Expectations</h1>
                        <p class="text">
                            Our civil and structural team is committed to providing sustainable, creative & efficient engineering solutions
                            for our communities
                        </p>
                        <a class="btn" href="#">Consult now</a>
                    </div>
                    <div class="hero_info d-flex flex-column col-md-5 col-xl-auto align-items-md-end">
                        <div
                            class="
                                hero_info-numbers
                                d-flex
                                flex-wrap
                                align-items-start
                                justify-content-sm-center justify-content-md-between
                                flex-grow-1
                            "
                        >
                            <div
                                class="
                                    hero_info-numbers_group
                                    d-flex
                                    flex-column
                                    align-items-start align-items-md-end
                                    col-6 col-sm-auto col-md-12
                                "
                            >
                                <h2 class="countNum number" data-suffix="+" data-value="128">0</h2>
                                <span class="label">Projects / Year</span>
                            </div>
                            <div
                                class="
                                    hero_info-numbers_group
                                    d-flex
                                    flex-column
                                    align-items-start align-items-md-end
                                    col-6 col-sm-auto col-md-12
                                "
                            >
                                <h2 class="countNum number" data-separator="." data-value="4253">0</h2>
                                <span class="label"
                                    >Million euros<br />
                                    turnover in 2020</span
                                >
                            </div>
                        </div>
                        <div class="hero_info-card" data-wow-delay="100" data-wow-duration="600">
                            <span class="hero_info-card_underlay"></span>
                            <div class="wrapper">
                                <h3 class="title">Maison résidentielle</h3>
                                <h2 class="countNum number square highlight d-flex align-items-center" data-value="78000" data-suffix="+" >
                                    <span class="square highlight d-flex align-items-center">м <sup>2</sup></span>
                                </h2>
                                <span class="square highlight d-flex align-items-center">м <sup>2</sup></span>
                                {{-- <span class="info">Amount work done</span>
                                <a class="link link-arrow" href="#">
                                    Details
                                    <i class="icon-arrow_right"></i>
                                </a> --}}
                            </div>
                            <picture>
                                <source
                                    data-srcset="img/placeholder.jpg"
                                    srcset="img/placeholder.jpg"
                                    type="image/webp"
                                    data-role="deco"
                                />
                                <img
                                    class="hero_building--mini lazy"
                                    data-src="img/placeholder.jpg"
                                    src="img/placeholder.jpg"
                                    alt="media"
                                    data-role="deco"
                                />
                            </picture>
                        </div>
                    </div>
                </div>
            </section>
            <section class="services section">
                <div class="container">
                    <div class="services_header section_header">
                        <span class="subtitle"> Ce que nous faisons </span>
                        <h2 class="title" data-aos="fade-right" data-aos-duration="500">
                            Ingénierie pluridisciplinaire <span class="highlight">Solutions</span>
                        </h2>
                    </div>
                    <ul class="services_list row g-0">
                        <li class="services_list-item col-12 col-md-6 col-xxl-4" data-aos="fade-up" data-order="1">
                            <div class="wrapper d-flex flex-column align-items-start justify-content-between">
                                <span class="number">01</span>
                                <h4 class="title">Génie des procédés</h4>
                                <p class="description">
                                    Senectus et netus et malesuada. Nunc pulvinar sapien et ligula ullamcorper malesuada proin
                                </p>
                                <a class="link link-arrow" href="single-service.html">
                                    Details
                                    <i class="icon-arrow_right"></i>
                                </a>
                            </div>
                        </li>
                        <li class="services_list-item col-12 col-md-6 col-xxl-4" data-aos="fade-up" data-order="2">
                            <div class="wrapper d-flex flex-column align-items-start justify-content-between">
                                <span class="number">02</span>
                                <h4 class="title">Gestion de la construction</h4>
                                <p class="description">
                                    Donec adipiscing tristique risus nec feugiat in. Porttitor massa id neque aliquam vestibulum morbi
                                </p>
                                <a class="link link-arrow" href="single-service.html">
                                    Details
                                    <i class="icon-arrow_right"></i>
                                </a>
                            </div>
                        </li>
                        <li class="services_list-item col-12 col-md-6 col-xxl-4" data-aos="fade-up" data-order="3">
                            <div class="wrapper d-flex flex-column align-items-start justify-content-between">
                                <span class="number">03</span>
                                <h4 class="title">Civil Engineering</h4>
                                <p class="description">
                                    Morbi tincidunt ornare massa eget egestas purus viverra blandit elementum cursus risus.
                                </p>
                                <a class="link link-arrow" href="single-service.html">
                                    Details
                                    <i class="icon-arrow_right"></i>
                                </a>
                            </div>

                    </ul>
                </div>
            </section>
            <section class="projects primary-bg section">
                <div class="container">
                    <div class="projects_header section_header">
                        <span class="subtitle">Ce que nous faisons</span>
                        <h2 class="title" data-aos="fade-right" data-aos-duration="500">Nos <span class="highlight">Projets</span></h2>
                    </div>
                    <ul class="projects_list row g-0">
                        <li class="projects_list-item col-12 col-md-6" data-order="1">
                            <div class="wrapper d-flex flex-column justify-content-between">
                                <div class="img-wrapper" data-aos="fade-right">
                                    <picture>
                                        <source
                                            data-srcset="{{ asset('assets/img/6.jpeg') }}"
                                            type="image/webp"
                                        />
                                        <img
                                            class="projects_list-item_img lazy"
                                            alt="Jazzy Elite Construction Shopping Center"
                                        />
                                    </picture>
                                </div>
                                <div class="text-wrapper">
                                    <h3 class="projects_list-item_title" data-aos="fade-up">Jazzy Elite Construction Shopping Center</h3>
                                    <div class="projects_list-item_info d-flex flex-wrap align-items-center justify-content-between">
                                        <span class="separator" data-aos="slide-right"></span>
                                        <span class="location d-flex align-items-center" data-aos="fade-up">
                                            <i class="icon-location icon"></i>
                                            100 Sunrise Ct Hamel, Minnesota(MN)
                                        </span>
                                        <a class="link link-arrow link-arrow--alt" href="#" data-aos="fade-left">
                                            Details
                                            <i class="icon-arrow_right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="projects_list-item col-12 col-md-6" data-order="2">
                            <div class="wrapper d-flex flex-column justify-content-between">
                                <div class="img-wrapper" data-aos="fade-right">
                                    <picture>
                                        <source
                                            data-srcset="{{ asset('assets/img/7.jpeg') }}"
                                            srcset="{{ asset('assets/img/6.jpeg') }}"
                                            type="image/webp"
                                        />
                                        <img
                                            class="projects_list-item_img lazy"
                                            data-src="{{ asset('assets/img/6.jpeg') }}"
                                            src="img/placeholder.jpg"
                                            alt="Fresh Concept Construction Renovation"
                                        />
                                    </picture>
                                </div>
                                <div class="text-wrapper">
                                    <h3 class="projects_list-item_title" data-aos="fade-up">Fresh Concept Construction Renovation</h3>
                                    <div class="projects_list-item_info d-flex flex-wrap align-items-center justify-content-between">
                                        <span class="separator" data-aos="slide-right"></span>
                                        <span class="location d-flex align-items-center" data-aos="fade-up">
                                            <i class="icon-location icon"></i>
                                            Rocky Highway Port Juana
                                        </span>
                                        <a class="link link-arrow link-arrow--alt" href="#" data-aos="fade-left">
                                            Details
                                            <i class="icon-arrow_right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="projects_list-item col-12 col-md-6" data-order="3">
                            <div class="wrapper d-flex flex-column justify-content-between">
                                <div class="img-wrapper" data-aos="fade-right">
                                    <picture>
                                        <source
                                            data-srcset="{{ asset('assets/img/2.jpeg') }}"
                                            srcset="img/placeholder.jpg"
                                            type="image/webp"
                                        />
                                        <img
                                            class="projects_list-item_img lazy"
                                            data-src="{{ asset('assets/img/2.jpeg') }}"
                                            src="img/placeholder.jpg"
                                            alt="Installation a  Supply System"
                                        />
                                    </picture>
                                </div>
                                <div class="text-wrapper">
                                    <h3 class="projects_list-item_title" data-aos="fade-up">Installation a Supply System</h3>
                                    <div class="projects_list-item_info d-flex flex-wrap align-items-center justify-content-between">
                                        <span class="separator" data-aos="slide-right"></span>
                                        <span class="location d-flex align-items-center" data-aos="fade-up">
                                            <i class="icon-location icon"></i>
                                            Wuckert Junctions Hermannberg
                                        </span>
                                        <a class="link link-arrow link-arrow--alt" href="#" data-aos="fade-left">
                                            Details
                                            <i class="icon-arrow_right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="projects_list-item col-12 col-md-6" data-order="4">
                            <div class="wrapper d-flex flex-column justify-content-between">
                                <div class="img-wrapper" data-aos="fade-right">
                                    <picture>
                                        <source
                                            data-srcset="{{ asset('assets/img/3.jpeg') }}"
                                            srcset="img/placeholder.jpg"
                                            type="image/webp"
                                        />
                                        <img
                                            class="projects_list-item_img lazy"
                                            data-src="img/placeholder.jpg"
                                            src="img/placeholder.jpg"
                                            alt="Reconstruction of Old Factory Building"
                                        />
                                    </picture>
                                </div>
                                <div class="text-wrapper">
                                    <h3 class="projects_list-item_title" data-aos="fade-up">Reconstruction of Old Factory Building</h3>
                                    <div class="projects_list-item_info d-flex flex-wrap align-items-center justify-content-between">
                                        <span class="separator" data-aos="slide-right"></span>
                                        <span class="location d-flex align-items-center" data-aos="fade-up">
                                            <i class="icon-location icon"></i>
                                            Stoltenberg Underpass Blockbury
                                        </span>
                                        <a class="link link-arrow link-arrow--alt" href="#" data-aos="fade-left">
                                            Details
                                            <i class="icon-arrow_right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="spots section">
                <div class="container d-flex flex-wrap flex-lg-nowrap">
                    <div class="wrapper">
                        <div class="spots_header section_header">
                            <span class="subtitle">Where we work</span>
                            <h2 class="title">
                                <span class="highlight">Nos Projet </span>
                                in the World
                            </h2>
                        </div>
                        <div class="spots_map">
                            <picture>
                                <source
                                    data-srcset="img/placeholder.jpg"
                                    srcset="img/placeholder.jpg"
                                    type="image/webp"
                                    data-role="deco"
                                />
                                <img
                                    class="spots_map-map lazy"
                                    data-src="img/placeholder.jpg"
                                    src="img/placeholder.jpg"
                                    alt="map"
                                    data-role="deco"
                                />
                            </picture>
                        </div>
                    </div>
                    <div class="spots_info col-lg-6 col-xl-auto">
                        <p class="spots_info-text">
                            Molestie nunc non blandit massa. Lacus sed viverra tellus in hac habitasse platea. Velit egestas dui id ornare
                            arcu. Sapien pellentesque habitant morbi tristique senectus et netus. Ut consequat semper viverra nam libero.
                            Convallis aenean et tortor at
                        </p>
                        <div class="wrapper d-flex flex-column align-items-start justify-content-center justify-content-sm-start">
                            <div class="spots_info-number">
                                <h2 class="countNum number" data-suffix="+" data-value="200">0</h2>
                                <span class="label"> Active Projects in Civil Engineering </span>
                            </div>
                            <div class="spots_info-number">
                                <h2 class="countNum number" data-suffix="%" data-value="99">0</h2>
                                <span class="label"> Building Control Approval Rate </span>
                            </div>
                        </div>
                        <a class="spots_info-btn btn" href="about.html">About company</a>
                    </div>
                </div>
            </section>
            <section class="features primary-bg section-nopb">
                <div class="container p-md-0">
                    <div class="row g-0">
                        <div class="features_header section_header col-12 col-md-12 col-lg-6 col-xl-4">
                            <span class="subtitle">Pourquoi nous choisir</span>
                            <h2 class="title" data-aos="fade-right" data-aos-duration="500">
                                <span class="highlight">Conception </span>
                                L'avenir avec l'excellence
                            </h2>
                            <ul class="features_header-list">
                                <li class="features_header-list_item d-flex align-items-center" data-aos="fade-up">
                                    <i class="icon-check icon"></i>
                                    Construire l'avenir avec des idées
                                </li>
                                <li class="features_header-list_item d-flex align-items-center" data-aos="fade-up" data-aos-delay="50">
                                    <i class="icon-check icon"></i>
                                    Concevoir l'avenir avec excellence
                                </li>
                                <li class="features_header-list_item d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
                                    <i class="icon-check icon"></i>
                                    Découvrir les possibilités du béton
                                </li>
                            </ul>
                        </div>
                        <div class="features_card col-12 col-md-6 col-xl-4" data-aos="fade-up" data-order="1">
                            <div class="wrapper d-flex flex-column align-items-start justify-content-between">
                                <svg
                                    class="features_card-icon"
                                    width="60"
                                    height="62"
                                    viewBox="0 0 60 62"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M59.391 29.7654C59.7584 29.9203 59.9994 30.2951 59.9995 30.7118C59.9994 31.1285 59.7584 31.5032 59.391 31.6581L41.0732 39.3729L59.391 47.0877C59.7588 47.2423 60 47.6171 60 48.0341C60 48.451 59.7588 48.8259 59.391 48.9804L30.3593 61.2079C30.1286 61.3047 29.8714 61.3047 29.6407 61.2079L0.608983 48.9804C0.241228 48.8259 0 48.451 0 48.0341C0 47.6171 0.241228 47.2423 0.608983 47.0877L18.9268 39.3729L0.608983 31.6581C0.241228 31.5036 0 31.1287 0 30.7118C0 30.2949 0.241228 29.92 0.608983 29.7654L18.9268 22.0506L0.608983 14.3359C0.241228 14.1813 0 13.8064 0 13.3895C0 12.9726 0.241228 12.5977 0.608983 12.4432L29.6407 0.215664C29.8714 0.118867 30.1286 0.118867 30.3593 0.215664L59.391 12.4432C59.7588 12.5977 60 12.9726 60 13.3895C60 13.8064 59.7588 14.1813 59.391 14.3359L41.0732 22.0506L59.391 29.7654ZM30 2.25995L3.57386 13.3895L30 24.5191L56.4262 13.3895L30 2.25995ZM56.4262 48.0341L30 59.1636L3.57386 48.0341L21.5324 40.4709L29.6407 43.8856C29.8714 43.9824 30.1286 43.9824 30.3593 43.8856L38.4676 40.4709L56.4262 48.0341ZM3.57386 30.7118L30 41.8414L56.4262 30.7118L38.4676 23.1486L30.3593 26.5634C30.1286 26.6602 29.8714 26.6602 29.6407 26.5634L21.5324 23.1486L3.57386 30.7118Z"
                                        fill="currentColor"
                                    />
                                </svg>

                                <h3 class="features_card-title">Nous développons des projets uniques</h3>
                                <p class="features_card-description">
                                    Senectus et netus et malesuada. Nunc pulvinar sapien et ligula ullamcorper malesuada proin
                                </p>
                            </div>
                        </div>
                        <div class="features_card col-12 col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="50" data-order="2">
                            <div class="wrapper d-flex flex-column align-items-start justify-content-between">
                                <svg
                                    class="features_card-icon"
                                    width="60"
                                    height="62"
                                    viewBox="0 0 60 62"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M53.2974 33.0918L58.9607 37.4956C60.0184 38.3305 60.306 39.7985 59.6512 40.9931L53.7311 51.177C53.0894 52.3462 51.626 52.867 50.3501 52.3743L43.6496 49.6988C42.312 50.6485 40.99 51.4119 39.6447 52.017L38.6255 59.0887C38.4613 60.4035 37.2906 61.4145 35.9068 61.4145H24.0976C22.7139 61.4145 21.5433 60.4035 21.3764 59.0632L20.3597 52.017C18.9709 51.3941 17.6256 50.618 16.3471 49.7014L9.66458 52.3693C8.33988 52.8466 6.89714 52.3156 6.25789 51.1515L0.368612 41.0187C-0.301436 39.7958 -0.0138256 38.3279 1.03625 37.5009L6.70471 33.0919C6.62 32.2289 6.57631 31.481 6.57631 30.7789C6.57631 30.0768 6.61987 29.3288 6.70977 28.4659L1.04648 24.0645C-0.0317561 23.217 -0.316719 21.7005 0.378962 20.5312L6.27594 10.3832C6.91771 9.21398 8.37599 8.68803 9.657 9.18586L16.3575 11.8613C17.6951 10.9116 19.0171 10.1483 20.3624 9.5432L21.3815 2.46887C21.5458 1.15404 22.7164 0.143066 24.1002 0.143066H35.9095C37.2933 0.143066 38.4639 1.15404 38.6307 2.49448L39.6473 9.5432C41.0363 10.1636 42.3789 10.9396 43.6574 11.8587L50.34 9.19089C51.657 8.70837 53.1022 9.24199 53.7466 10.4087L59.6359 20.5414C60.3085 21.7642 60.0185 23.2322 58.9659 24.0594L53.2974 28.4658C53.3693 29.1449 53.4309 29.9388 53.4309 30.7788C53.4309 31.6187 53.3719 32.4126 53.2974 33.0918ZM51.2923 50L57.4075 39.7422C57.4486 39.6708 57.4358 39.5559 57.3692 39.5023L51.1462 34.6618C50.792 34.3861 50.6071 33.9419 50.6636 33.4977C50.7611 32.7216 50.8613 31.7922 50.8613 30.7788C50.8613 29.7678 50.7611 28.8359 50.6636 28.0598C50.6071 27.6131 50.792 27.1714 51.1462 26.8957L57.3769 22.0527C57.4385 22.0043 57.4488 21.8919 57.3948 21.7923L51.5056 11.6596L43.945 14.4959C43.5214 14.667 43.0464 14.6006 42.6845 14.3249C41.2057 13.1939 39.6269 12.2825 37.9889 11.6161C37.5679 11.445 37.2702 11.0647 37.2034 10.6153L36.0841 2.83385L24.1002 2.69599L22.8012 10.6153C22.7369 11.0622 22.4392 11.4425 22.0181 11.6161C20.4418 12.257 18.9015 13.1454 17.3124 14.3325C16.9504 14.6006 16.4806 14.6644 16.0622 14.4959L8.71222 11.56L2.59706 21.8178L8.85831 26.8956C9.21259 27.1713 9.39743 27.613 9.34099 28.0597C9.20741 29.132 9.14327 29.9949 9.14327 30.7786C9.14327 31.5624 9.20488 32.4278 9.34099 33.4976C9.39743 33.9418 9.21259 34.386 8.85831 34.6617L2.62762 39.5047C2.56601 39.5531 2.55578 39.668 2.60969 39.7676L8.49897 49.9003L16.0595 47.064C16.2161 47.0002 16.3778 46.9721 16.5396 46.9721C16.8168 46.9721 17.0941 47.0615 17.3226 47.2377C18.7988 48.3661 20.3777 49.2776 22.0181 49.9464C22.4392 50.1175 22.7369 50.4978 22.8037 50.9472L23.9256 58.7262L35.907 58.8615L37.2034 50.9447C37.2675 50.4953 37.5679 50.1149 37.9889 49.9439C39.5653 49.3031 41.103 48.4121 42.6947 47.2275C43.0541 46.9621 43.5265 46.8982 43.9424 47.0641L51.2923 50Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M17.166 30.7786C17.166 23.74 22.9244 18.0137 30.0022 18.0137C37.0801 18.0137 42.8385 23.74 42.8385 30.7786C42.8385 37.8171 37.0801 43.5435 30.0022 43.5435C22.9244 43.5435 17.166 37.8171 17.166 30.7786ZM19.7333 30.7786C19.7333 36.4104 24.3389 40.9904 30.0022 40.9904C35.6655 40.9904 40.2711 36.4104 40.2711 30.7786C40.2711 25.1468 35.6655 20.5667 30.0022 20.5667C24.3389 20.5667 19.7333 25.1468 19.7333 30.7786Z"
                                        fill="currentColor"
                                    />
                                </svg>

                                <h3 class="features_card-title">Nous attachons de l'importance à la commodité et à la fonctionnalité</h3>
                                <p class="features_card-description">
                                    Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies
                                </p>
                            </div>
                        </div>
                        <div class="features_card col-12 col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="100" data-order="3">
                            <div class="wrapper d-flex flex-column align-items-start justify-content-between">
                                <svg
                                    class="features_card-icon"
                                    width="60"
                                    height="62"
                                    viewBox="0 0 60 62"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M58.7498 58.957H1.25004C0.560038 58.957 0 59.5298 0 60.2355C0 60.9413 0.560038 61.5141 1.25004 61.5141H58.75C59.44 61.5141 60 60.9413 60 60.2355C59.9999 59.5298 59.4398 58.957 58.7498 58.957Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M3.75004 43.6143H11.25C11.94 43.6143 12.5001 44.187 12.5001 44.8927V60.2356C12.5001 60.9413 11.94 61.5142 11.25 61.5142H3.75004C3.06004 61.5142 2.5 60.9413 2.5 60.2357V44.8929C2.5 44.1871 3.06004 43.6143 3.75004 43.6143ZM5.00007 58.9571H9.99999H10.0001V46.1714H5.00007V58.9571Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M18.75 30.8286H26.25C26.94 30.8286 27.5001 31.4015 27.5001 32.1072V60.2358C27.5001 60.9415 26.94 61.5144 26.25 61.5144H18.75C18.06 61.5144 17.5 60.9415 17.5 60.2358V32.1072C17.5 31.4015 18.06 30.8286 18.75 30.8286ZM20 58.9572H25V33.3857H20V58.9572Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M33.75 35.9429H41.25C41.94 35.9429 42.5001 36.5156 42.5001 37.2215V60.2357C42.5001 60.9415 41.94 61.5143 41.25 61.5143H33.75C33.06 61.5143 32.5 60.9415 32.5 60.2357V37.2215C32.5 36.5157 33.06 35.9429 33.75 35.9429ZM35 58.9571H40V38.5H35V58.9571Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M48.75 20.6001H56.25C56.94 20.6001 57.5001 21.1728 57.5001 21.8787V60.2358C57.5001 60.9415 56.94 61.5144 56.25 61.5144H48.75C48.06 61.5144 47.5 60.9415 47.5 60.2358V21.8787C47.5 21.1729 48.06 20.6001 48.75 20.6001ZM50 58.9572H55V23.1572H50V58.9572Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M2.5 28.2715C2.5 25.451 4.7425 23.1572 7.50003 23.1572C10.2576 23.1572 12.5001 25.451 12.5001 28.2715C12.5001 31.0921 10.2576 33.3859 7.50003 33.3859C4.7425 33.3859 2.5 31.0921 2.5 28.2715ZM5.00007 28.2715C5.00007 29.6804 6.12003 30.8286 7.50003 30.8286C8.88003 30.8286 9.99999 29.6804 9.99999 28.2715C9.99999 26.8626 8.88003 25.7144 7.50003 25.7144C6.12003 25.7144 5.00007 26.8625 5.00007 28.2715Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M17.5 15.4859C17.5 12.6653 19.7425 10.3716 22.5 10.3716C25.2576 10.3716 27.5001 12.6653 27.5001 15.4859C27.5001 18.3065 25.2576 20.6002 22.5 20.6002C19.7425 20.6002 17.5 18.3065 17.5 15.4859ZM20.0001 15.4859C20.0001 16.8948 21.12 18.043 22.5 18.043C23.88 18.043 25 16.8949 25 15.4859C25 14.077 23.88 12.9288 22.5 12.9288C21.12 12.9288 20.0001 14.0769 20.0001 15.4859Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M32.5 20.6002C32.5 17.7796 34.7425 15.4858 37.5 15.4858C40.2576 15.4858 42.5001 17.7796 42.5001 20.6002C42.5001 23.4207 40.2576 25.7145 37.5 25.7145C34.7425 25.7145 32.5 23.4207 32.5 20.6002ZM35.0001 20.6002C35.0001 22.0091 36.12 23.1573 37.5 23.1573C38.88 23.1573 40 22.0091 40 20.6002C40 19.1913 38.88 18.0431 37.5 18.0431C36.12 18.0431 35.0001 19.1911 35.0001 20.6002Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M47.5 5.25738C47.5 2.43682 49.7425 0.143066 52.5 0.143066C55.2576 0.143066 57.5001 2.43682 57.5001 5.25738C57.5001 8.07794 55.2576 10.3717 52.5 10.3717C49.7425 10.3717 47.5 8.07794 47.5 5.25738ZM50.0001 5.25738C50.0001 6.66629 51.12 7.81448 52.5 7.81448C53.88 7.81448 55 6.66629 55 5.25738C55 3.84848 53.88 2.70028 52.5 2.70028C51.12 2.70028 50.0001 3.84836 50.0001 5.25738Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M50.7354 7.06246C50.2479 6.56382 49.4554 6.56382 48.9679 7.06246L39.268 16.9841C38.7805 17.4828 38.7805 18.2934 39.268 18.792C39.513 19.04 39.8329 19.1654 40.153 19.1654C40.4704 19.1654 40.7905 19.0427 41.0355 18.792L50.7354 8.87039C51.2229 8.37175 51.2229 7.5611 50.7354 7.06246Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M34.4765 17.6491L26.4465 15.3068C25.774 15.1074 25.0915 15.5063 24.904 16.1865C24.714 16.8667 25.099 17.5725 25.7614 17.7668L33.7915 20.1091C33.9064 20.1423 34.0215 20.1577 34.134 20.1577C34.679 20.1577 35.179 19.792 35.3365 19.2294C35.5265 18.5518 35.1416 17.8434 34.4765 17.6491Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M20.5498 17.0792C20.1199 16.5269 19.3348 16.4374 18.7948 16.8746L9.36981 24.5614C8.82981 25.0038 8.73981 25.8067 9.17235 26.359C9.41984 26.6761 9.78488 26.8398 10.1498 26.8398C10.4223 26.8398 10.6973 26.7477 10.9273 26.5636L20.3524 18.8769C20.8924 18.4344 20.9824 17.6316 20.5498 17.0792Z"
                                        fill="currentColor"
                                    />
                                </svg>

                                <h3 class="features_card-title">L'expérience nous permet de mettre en œuvre de nouvelles idées</h3>
                                <p class="features_card-description">
                                    Viverra nibh cras pulvinar mattis nunc sed blandit libero volutpat. Enim diam vulputate ut pharetra
                                </p>
                            </div>
                        </div>
                        <div class="features_card col-12 col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="150" data-order="4">
                            <div class="wrapper d-flex flex-column align-items-start justify-content-between">
                                <svg
                                    class="features_card-icon"
                                    width="60"
                                    height="62"
                                    viewBox="0 0 60 62"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M26.25 61.5144H33.75C35.75 61.5144 37.5 59.7244 37.5 57.6787V51.7973C37.5 49.2401 38.75 46.4273 41 44.6373C45.25 41.313 47.5 36.1987 47.5 30.8287C47.5 25.9701 45.5 21.3673 42.25 18.043C39 14.7187 34.5 12.9287 29.75 12.9287C20.5 13.1844 12.75 20.8559 12.5 30.573C12.5 36.1987 14.75 41.313 19.25 44.893C21.25 46.683 22.5 48.9844 22.5 51.5416V56.9116C22.5 59.9801 24.5 61.5144 26.25 61.5144ZM15 30.573C15.25 22.3901 22 15.4859 30 15.4859C34 15.4859 37.75 17.0201 40.5 19.833C43.5 22.9016 45 26.7373 45 30.8287C45 35.4316 43 39.7787 39.5 42.5916C36.75 44.893 35 48.473 35 51.7973V57.6787C35 58.4459 34.5 58.9573 33.75 58.9573H26.25C25 58.9573 25 57.423 25 56.9116V51.5416C25 48.2173 23.5 45.1487 20.75 42.8473C17 40.0344 15 35.4316 15 30.573Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M36.25 53.8433H23.75C23 53.8433 22.5 53.3318 22.5 52.5647C22.5 51.7976 23 51.2861 23.75 51.2861H36.25C37 51.2861 37.5 51.7976 37.5 52.5647C37.5 53.3318 37 53.8433 36.25 53.8433Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M30 7.81449C29.25 7.81449 28.75 7.30307 28.75 6.53592V1.42164C28.75 0.654495 29.25 0.143066 30 0.143066C30.75 0.143066 31.25 0.654495 31.25 1.42164V6.53592C31.25 7.30307 30.75 7.81449 30 7.81449Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M46.75 14.9746C46.5 14.9746 46 14.9746 45.75 14.7189C45.25 14.2075 45.25 13.4403 45.75 12.9289L49.25 9.3489C49.75 8.83747 50.5 8.83747 51 9.3489C51.5 9.86033 51.5 10.6275 51 11.1389L47.5 14.7189C47.5 14.7189 47 14.9746 46.75 14.9746V14.9746Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M58.75 32.1074H53.75C53 32.1074 52.5 31.596 52.5 30.8289C52.5 30.0617 53 29.5503 53.75 29.5503H58.75C59.5 29.5503 60 30.0617 60 30.8289C60 31.596 59.5 32.1074 58.75 32.1074Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M50.25 52.8203C50 52.8203 49.5 52.8203 49.25 52.5646L45.75 48.9846C45.25 48.4732 45.25 47.706 45.75 47.1946C46.25 46.6832 47 46.6832 47.5 47.1946L51 50.7746C51.5 51.286 51.5 52.0532 51 52.5646C51 52.8203 50.75 52.8203 50.25 52.8203Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M9.75 52.8203C9.5 52.8203 9 52.8203 8.75 52.5646C8.25 52.0532 8.25 51.286 8.75 50.7746L12.25 47.1946C12.75 46.6832 13.5 46.6832 14 47.1946C14.5 47.706 14.5 48.4732 14 48.9846L10.5 52.5646C10.25 52.8203 10 52.8203 9.75 52.8203V52.8203Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M6.25 32.1074H1.25C0.5 32.1074 0 31.596 0 30.8289C0 30.0617 0.5 29.5503 1.25 29.5503H6.25C7 29.5503 7.5 30.0617 7.5 30.8289C7.5 31.596 7 32.1074 6.25 32.1074Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M13.25 14.9745C13 14.9745 12.5 14.9745 12.25 14.7188L8.75 10.883C8.25 10.3716 8.25 9.60447 8.75 9.09304C9.25 8.58162 10 8.58162 10.5 9.09304L14 12.673C14.5 13.1845 14.5 13.9516 14 14.463C13.75 14.7188 13.5 14.9745 13.25 14.9745V14.9745Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M40 32.1075C39.25 32.1075 38.75 31.5961 38.75 30.8289C38.75 25.9703 34.75 21.8789 30 21.8789C29.25 21.8789 28.75 21.3675 28.75 20.6003C28.75 19.8332 29.25 19.3218 30 19.3218C36.25 19.3218 41.25 24.4361 41.25 30.8289C41.25 31.5961 40.75 32.1075 40 32.1075Z"
                                        fill="currentColor"
                                    />
                                </svg>

                                <h3 class="features_card-title">Nous proposons des technologies innovantes</h3>
                                <p class="features_card-description">
                                    Consectetur adipiscing elit pellentesque habitant. Arcu felis bibendum ut tristique
                                </p>
                            </div>
                        </div>
                        <div class="features_card col-12 col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="200" data-order="5">
                            <div class="wrapper d-flex flex-column align-items-start justify-content-between">
                                <svg
                                    class="features_card-icon"
                                    width="60"
                                    height="62"
                                    viewBox="0 0 60 62"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M13 55.8886C12.5 55.3772 12.5 54.61 13 54.0986C14 53.0757 14.5 52.0529 14.5 50.7743C14.5 49.4957 14 48.2172 13 47.45C12.5 46.9386 12.5 46.1715 13 45.66L18 39.0115C18.5 38.2443 18.75 37.2215 18.25 36.1986C18.25 35.9429 18.25 35.9429 18 35.9429C18 35.9429 17.75 35.9429 17.5 36.1986L8.25 45.4043C7.75 45.9157 7 45.9157 6.5 45.4043C6 44.8929 6 44.1257 6.5 43.6143L15.75 34.4086C16.5 33.6415 17.5 33.3857 18.5 33.3857C19.5 33.6415 20.25 34.1529 20.75 34.92C21.75 36.71 21.5 38.7557 20.25 40.29L15.75 46.1715C16.75 47.45 17.25 48.9843 17.25 50.5186C17.25 52.5643 16.5 54.3543 15 55.8886C14.75 56.4 14.5 56.4 14 56.4C13.75 56.4 13.25 56.1443 13 55.8886Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M1.25 61.5143C0.5 61.5143 0 61.0028 0 60.2357V47.7057C0 43.3585 1.75 39.2671 4.75 35.9428L9.5 31.0843C10 30.5728 10.75 30.5728 11.25 31.0843C11.75 31.5957 11.75 32.3628 11.25 32.8743L6.5 37.7328C4 40.29 2.5 43.87 2.5 47.7057V58.9571H20V56.6557C20 56.1443 20.25 55.8885 20.5 55.6328C22.5 54.3543 23.5 52.3085 23.75 50.0071C23.75 49.24 24.25 48.7285 25 48.7285C25.75 48.7285 26.25 49.24 26.25 50.0071C26.25 52.82 24.75 55.6328 22.5 57.4228V60.2357C22.5 61.0028 22 61.5143 21.25 61.5143H1.25Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M41.4999 28.2717C40.4999 28.016 39.7499 27.5045 39.2499 26.7374C38.2499 24.9474 38.4999 22.9017 39.7499 21.3674L44.2499 15.486C43.2499 14.2074 42.7499 12.6731 42.7499 11.1388C42.7499 9.09311 43.4999 7.30311 44.9999 5.76883C45.4999 5.2574 46.2499 5.2574 46.7499 5.76883C47.2499 6.28025 47.2499 7.0474 46.7499 7.55883C45.7499 8.58168 45.2499 9.60454 45.2499 10.8831C45.2499 12.1617 45.7499 13.4403 46.7499 14.2074C47.2499 14.7188 47.2499 15.486 46.7499 15.9974L41.7499 22.646C41.2499 23.4131 40.9999 24.436 41.4999 25.4588C41.4999 25.7145 41.7499 25.7145 41.9999 25.7145C41.9999 25.7145 42.2499 25.7145 42.4999 25.4588L51.7499 16.2531C52.2499 15.7417 52.9999 15.7417 53.4999 16.2531C53.9999 16.7645 53.9999 17.5317 53.4999 18.0431L44.2499 27.2488C43.4999 28.016 42.7499 28.2717 41.9999 28.2717C41.7499 28.2717 41.7499 28.2717 41.4999 28.2717Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M49 30.5731C48.5 30.0616 48.5 29.2945 49 28.7831L53.75 23.9245C56.25 21.3674 57.75 17.7874 57.75 13.9516V2.70021H40.25V5.00164C40.25 5.51307 40 5.76878 39.75 6.02449C37.75 7.30307 36.75 9.34878 36.5 11.6502C36.25 12.4174 35.75 12.9288 35 12.9288C34.25 12.9288 33.75 12.4174 33.75 11.6502C33.75 8.83735 35.25 6.02449 37.5 4.23449V1.42164C37.5 0.654495 38 0.143066 38.75 0.143066H58.75C59.5 0.143066 60 0.654495 60 1.42164V13.9516C60 18.2988 58.25 22.3902 55.25 25.7145L50.5 30.5731C50.5 30.5731 50 30.8288 49.75 30.8288C49.5 30.8288 49 30.8288 49 30.5731Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M11.25 41.8244C10.5 41.8244 10 41.313 10 40.5459V11.6502C10 10.883 10.5 10.3716 11.25 10.3716H44C44.75 10.3716 45.25 10.883 45.25 11.6502C45.25 12.4173 44.75 12.9287 44 12.9287H12.5V40.5459C12.5 41.313 12 41.8244 11.25 41.8244Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M48.75 51.2859H16.25C16 51.2859 15.75 51.2859 15.5 51.2859C14.75 51.0301 14.5 50.5187 14.5 49.7516C14.5 48.9844 15.25 48.7287 16 48.7287H47.5V21.1116C47.5 20.3444 48 19.833 48.75 19.833C49.5 19.833 50 20.3444 50 21.1116V50.0073C50 50.7744 49.5 51.2859 48.75 51.2859Z"
                                        fill="currentColor"
                                    />
                                </svg>

                                <h3 class="features_card-title">Nous privilégions les relations à long terme</h3>
                                <p class="features_card-description">
                                    Purus in massa tempor nec feugiat. Euismod lacinia at quis risus sed vulputate odio
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="team primary-bg section">
                <div class="container">
                    <div class="wrapper d-flex flex-wrap align-items-end justify-content-center justify-content-sm-between">
                        <div class="team_header section_header">
                            <span class="subtitle">La vérité sur l'ingénierie</span>
                            <h2 class="title" data-aos="fade-right" data-aos-duration="500">
                                <span class="highlight">Notre équipe</span>
                                est responsable des meilleures constructions
                            </h2>
                        </div>
                        <a class="btn team_btn" href="team.html">Our team</a>
                    </div>
                    <div class="row g-0">
                        <div class="team_video col-12" data-aos="zoom-in" data-aos-duration="600" data-aos-once="true">
                            <picture>
                                <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                <img
                                    class="team_video-thumb lazy"
                                    data-src="img/placeholder.jpg"
                                    src="img/placeholder.jpg"
                                    alt="thumbnail"
                                />
                            </picture>
                            <a class="btn-play d-inline-flex align-items-center justify-content-center" href="#">
                                <i class="icon-play"></i>
                            </a>
                        </div>
                        <div class="team_main col-12 col-lg-6">
                            <p class="team_main-text" data-aos="fade-right" data-aos-duration="300">
                                Leo in vitae turpis massa sed elementum tempus egestas sed. Sed sed risus pretium quam vulputate dignissim
                                suspendisse in. Placerat orci nulla pellentesque dignissim enim. Tortor pretium viverra suspendisse potenti
                                nullam augue. Vestibulum lorem sed risus ultricies tristique nulla. Erat velit scelerisque in dictum non
                                consectetur
                            </p>
                            <ul class="team_main-list col-12">
                                <li class="team_main-list_item d-flex align-items-center" data-aos="fade-up">
                                    <i class="icon-check icon"></i>
                                    Ingenuity for life
                                </li>
                                <li class="team_main-list_item d-flex align-items-center" data-aos="fade-up" data-aos-delay="50">
                                    <i class="icon-check icon"></i>
                                    Lets you shine with skill
                                </li>
                                <li class="team_main-list_item d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
                                    <i class="icon-check icon"></i>
                                    Make science your obedient servant
                                </li>
                                <li class="team_main-list_item d-flex align-items-center" data-aos="fade-up" data-aos-delay="150">
                                    <i class="icon-check icon"></i>
                                    Development of Electrical Schematics
                                </li>
                            </ul>
                        </div>
                        <div class="team_quote col-12 col-lg-6" data-aos="fade-left" data-aos-duration="300">
                            <div class="team_quote-wrapper">
                                <q class="team_quote-quote">
                                    Senectus et netus et malesuada. Nunc proin pulvinar sapien et ligula ulamcorper malesuada proin
                                </q>
                                <div
                                    class="
                                        team_quote-author
                                        d-flex
                                        flex-wrap flex-sm-nowrap
                                        align-items-center
                                        justify-content-end justify-content-sm-between
                                    "
                                >
                                    <div class="wrapper d-flex align-items-center">
                                        <picture>
                                            <source
                                                data-srcset="img/placeholder.jpg"
                                                srcset="img/placeholder.jpg"
                                                type="image/webp"
                                            />
                                            <img
                                                class="team_quote-author_avatar lazy"
                                                data-src="img/placeholder.jpg"
                                                src="img/placeholder.jpg"
                                                alt="Daniel Strickland"
                                            />
                                        </picture>
                                        <div class="wrapper wrapper--info">
                                            <span class="team_quote-author_name">Daniel Strickland</span>
                                            <span class="team_quote-author_profession">Founder of the company</span>
                                        </div>
                                    </div>
                                    <svg
                                        class="quote-icon"
                                        width="83"
                                        height="73"
                                        viewBox="0 0 83 73"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M47 0V36.5H70.9999C70.9999 49.9171 60.2333 60.8333 47 60.8333V73C66.8516 73 83 56.6273 83 36.5V0L47 0Z"
                                            fill="#FFC631"
                                        />
                                        <path
                                            d="M0 36.5H23.9999C23.9999 49.9171 13.2333 60.8333 0 60.8333V73C19.8516 73 36 56.6273 36 36.5V0H0V36.5Z"
                                            fill="#FFC631"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="faq section-nopb">
                <div
                    class="container d-lg-flex flex-wrap flex-xl-nowrap justify-content-start align-items-start justify-content-xl-between"
                >
                    <div class="faq_header section_header col-lg-12 col-xl-auto">
                        <span class="subtitle">Dealing with your worries</span>
                        <h2 class="title">
                            If Your Question Is Not Here
                            <span class="highlight">Contact Us</span>
                        </h2>
                        <p class="text">
                            Porttitor rhoncus dolor purus non enim praesent elementum facilisis. Nisi scelerisque eu ultrices vitae auctor
                            eu augue ut lectus
                        </p>
                        <div class="wrapper">
                            <a class="btn" href="#">Contact Us</a>
                        </div>
                    </div>
                    <div class="accordion faq_accordion col-12 col-lg-12 col-xl-auto">

                        <div class="faq_accordion accordion-wrapper">
                            <button
                                class="faq_accordion-trigger accordion-trigger"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseOne"
                                aria-expanded="false"
                                aria-controls="collapseOne"
                            >
                                <span class="question">What is a Structural Engineer?</span>
                                <span class="faq_accordion-trigger_icon accordion-trigger_icon icon-plus"></span>
                            </button>
                            <div id="collapseOne" class="faq_accordion-content accordion-content collapse">
                                <p class="text">
                                    Condimentum id venenatis a condimentum vitae sapien pellentesque habitant. Non quam lacus suspendisse
                                    faucibus interdum posuere lorem. Ut diam quam nulla porttitor massa id neque aliquam vestibulum. Mattis
                                    rhoncus urna neque viverra justo nec ultrices dui sapien
                                </p>
                            </div>
                        </div>

                        <div class="faq_accordion accordion-wrapper expanded">
                            <button
                                class="faq_accordion-trigger accordion-trigger"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo"
                                aria-expanded="true"
                                aria-controls="collapseTwo"
                            >
                                <span class="question">Qu'est-ce qu'un ingénieur structurel ?</span>
                                <span class="faq_accordion-trigger_icon accordion-trigger_icon icon-minus"></span>
                            </button>
                            <div id="collapseTwo" class="faq_accordion-content accordion-content collapse show">
                                <p class="text">
                                    L'ingénieur structures met au point l'ossature d'une construction et s'assure de sa stabilité. Grâce à de savants calculs sur ordinateur, ce spécialiste en matériaux (béton, charpentes métalliques, bois, etc.) participe à l'avant-projet de la construction. À partir des plans de l'architecte, et avant le chiffrage du chantier, il prend en compte tous les facteurs (qualité du sol, dimensions, performances techniques des matériaux, risques de séisme ou conditions climatiques...) pour définir la taille des différents éléments de la structure du bâtiment et la quantité de matériaux à utiliser. Puis il réalise, sur ordinateur, des simulations de résistance, de déformation et d'élasticité pour tester ses hypothèses. Il réalise aussi le plan de coffrage, indiquant l'emplacement des murs, et le plan d'armature, qui représente les éléments porteurs du bâtiment. Il travaille en équipe avec des dessinateurs-projeteurs. Ce professionnel, indispensable dans la construction, est recherché par les employeurs.
                                </p>
                            </div>
                        </div>
                        <div class="faq_accordion accordion-wrapper">
                            <button
                                class="faq_accordion-trigger accordion-trigger"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseThree"
                                aria-expanded="false"
                                aria-controls="collapseThree"
                            >
                                <span class="question">Où se trouve l'entreprise ?</span>
                                <span class="faq_accordion-trigger_icon accordion-trigger_icon icon-plus"></span>
                            </button>
                            <div id="collapseThree" class="faq_accordion-content accordion-content collapse">
                                <p class="text">
                                    Condimentum id venenatis a condimentum vitae sapien pellentesque habitant. Non quam lacus suspendisse
                                    faucibus interdum posuere lorem. Ut diam quam nulla porttitor.
                                </p>
                            </div>
                        </div>
                        <div class="faq_accordion accordion-wrapper">
                            <button
                                class="faq_accordion-trigger accordion-trigger"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseFour"
                                aria-expanded="false"
                                aria-controls="collapseFour"
                            >
                                <span class="question">Combien de temps faut-il pour construire une maison ?</span>
                                <span class="faq_accordion-trigger_icon accordion-trigger_icon icon-plus"></span>
                            </button>
                            <div id="collapseFour" class="faq_accordion-content accordion-content collapse">
                                <p class="text">
                                    Condimentum id venenatis a condimentum vitae sapien pellentesque habitant. Non quam lacus suspendisse
                                    faucibus interdum posuere lorem. Ut diam quam nulla porttitor massa id neque aliquam vestibulum. Mattis
                                    rhoncus urna neque viverra justo nec ultrices dui sapien. Ut diam quam nulla porttitor massa
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="blog section">
                <div class="container">
                    <div class="wrapper d-flex flex-wrap align-items-end justify-content-sm-between">
                        <div class="blog_header section_header">
                            <span class="subtitle">Building The Future</span>
                            <h2 class="title" data-aos="fade-right" data-aos-duration="500">
                                Latest From the <span class="highlight">Blog</span>
                            </h2>
                        </div>
                        <a class="btn blog_btn" href="blog.html">Our blog</a>
                    </div>
                    <ul class="blog_list row g-0">
                        <li class="blog_list-item col-12 col-md-6 col-lg-4" data-aos="fade-up" data-order="1">
                            <div class="wrapper d-flex flex-column justify-content-between">
                                <div class="img-wrapper">
                                    <picture>
                                        <source
                                            data-srcset="img/placeholder.jpg"
                                            srcset="img/placeholder.jpg"
                                            type="image/webp"
                                        />
                                        <img
                                            class="lazy"
                                            data-src="img/placeholder.jpg"
                                            src="img/placeholder.jpg"
                                            alt="Impact of Technology on Construction Finance"
                                        />
                                    </picture>
                                </div>
                                <div class="text-wrapper d-flex flex-column justify-content-between">
                                    <div class="info d-flex align-items-center">
                                        <a class="category" href="#">Materials</a>
                                        <span class="divider"></span>
                                        <span class="date">August 30, 2021</span>
                                    </div>
                                    <h4 class="title">Impact of Technology on Construction Finance</h4>
                                    <p class="preview">
                                        Porttitor rhoncus dolor purus non enim praesent elementum facilisis. A diam sollicitudin tempor id
                                        eu nisl nunc fames
                                    </p>
                                    <div class="divider--link">
                                        <a class="link link-arrow" href="#">
                                            Read post
                                            <i class="icon-arrow_right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="blog_list-item col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50" data-order="2">
                            <div class="wrapper d-flex flex-column justify-content-between">
                                <div class="img-wrapper">
                                    <picture>
                                        <source
                                            data-srcset="img/placeholder.jpg"
                                            srcset="img/placeholder.jpg"
                                            type="image/webp"
                                        />
                                        <img
                                            class="lazy"
                                            data-src="img/placeholder.jpg"
                                            src="img/placeholder.jpg"
                                            alt="Composite Materials – Applications for the Future"
                                        />
                                    </picture>
                                </div>
                                <div class="text-wrapper d-flex flex-column justify-content-between">
                                    <div class="info d-flex align-items-center">
                                        <a class="category" href="#">Materials</a>
                                        <span class="divider"></span>
                                        <span class="date">August 30, 2021</span>
                                    </div>
                                    <h4 class="title">Composite Materials – Applications for the Future</h4>
                                    <p class="preview">
                                        Vel facilisis volutpat est velit egestas. Ut placerat orci nulla pellentesque dignissim enim sit
                                        amet. Ornare lectus sit amet est placerat
                                    </p>
                                    <div class="divider--link">
                                        <a class="link link-arrow" href="#">
                                            Read post
                                            <i class="icon-arrow_right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="blog_list-item col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100" data-order="3">
                            <div class="wrapper d-flex flex-column justify-content-between">
                                <div class="img-wrapper">
                                    <picture>
                                        <source
                                            data-srcset="img/placeholder.jpg"
                                            srcset="img/placeholder.jpg"
                                            type="image/webp"
                                        />
                                        <img
                                            class="lazy"
                                            data-src="img/placeholder.jpg"
                                            src="img/placeholder.jpg"
                                            alt="Possibly Perfect Way to Build Bridges"
                                        />
                                    </picture>
                                </div>
                                <div class="text-wrapper d-flex flex-column justify-content-between">
                                    <div class="info d-flex align-items-center">
                                        <a class="category" href="#">Materials</a>
                                        <span class="divider"></span>
                                        <span class="date">August 30, 2021</span>
                                    </div>
                                    <h4 class="title">Possibly Perfect Way to Build Bridges</h4>
                                    <p class="preview">
                                        Tincidunt praesent semper feugiat nibh sed pulvinar proin gravida. Eu ultrices vitae auctor eu augue
                                        ut lectus arcu bibendum
                                    </p>
                                    <div class="divider--link">
                                        <a class="link link-arrow" href="#">
                                            Read post
                                            <i class="icon-arrow_right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="gallery">
                <div class="container-fluid p-0">
                    <ul class="gallery_list d-flex flex-wrap">
                        <li class="gallery_list-item col-12 col-sm-6 col-xl-3">
                            <a
                                class="gallery_list-item_trigger"
                                href="img/placeholder.jpg"
                                data-caption="Fresh Concept Construction Renovation"
                                data-role="gallery-link"
                            >
                                <div class="img-wrapper">
                                    <picture>
                                        <source
                                            data-srcset="img/placeholder.jpg"
                                            srcset="img/placeholder.jpg"
                                            type="image/webp"
                                        />
                                        <img
                                            class="lazy"
                                            data-src="img/placeholder.jpg"
                                            src="img/placeholder.jpg"
                                            alt="Fresh Concept Construction Renovation"
                                        />
                                    </picture>
                                </div>
                                <div class="text-wrapper d-flex flex-column justify-content-end">
                                    <span class="subtitle">Our gallery</span>
                                    <h4 class="title">Fresh Concept Construction Renovation</h4>
                                    <span class="label">Special Projects</span>
                                </div>
                            </a>
                        </li>

                        <li class="gallery_list-item col-12 col-sm-6 col-xl-3">
                            <a
                                class="gallery_list-item_trigger"
                                href="img/placeholder.jpg"
                                data-caption="Fresh Concept Construction Renovation"
                                data-role="gallery-link"
                            >
                                <div class="img-wrapper">
                                    <picture>
                                        <source
                                            data-srcset="img/placeholder.jpg"
                                            srcset="img/placeholder.jpg"
                                            type="image/webp"
                                        />
                                        <img
                                            class="lazy"
                                            data-src="img/placeholder.jpg"
                                            src="img/placeholder.jpg"
                                            alt="Fresh Concept Construction Renovation"
                                        />
                                    </picture>
                                </div>
                                <div class="text-wrapper d-flex flex-column justify-content-end">
                                    <span class="subtitle">Our gallery</span>
                                    <h4 class="title">Fresh Concept Construction Renovation</h4>
                                    <span class="label">Special Projects</span>
                                </div>
                            </a>
                        </li>

                        <li class="gallery_list-item col-12 col-sm-6 col-xl-3">
                            <a
                                class="gallery_list-item_trigger"
                                href="img/placeholder.jpg"
                                data-caption="Fresh Concept Construction Renovation"
                                data-role="gallery-link"
                            >
                                <div class="img-wrapper">
                                    <picture>
                                        <source
                                            data-srcset="img/placeholder.jpg"
                                            srcset="img/placeholder.jpg"
                                            type="image/webp"
                                        />
                                        <img
                                            class="lazy"
                                            data-src="img/placeholder.jpg"
                                            src="img/placeholder.jpg"
                                            alt="Fresh Concept Construction Renovation"
                                        />
                                    </picture>
                                </div>
                                <div class="text-wrapper d-flex flex-column justify-content-end">
                                    <span class="subtitle">Our gallery</span>
                                    <h4 class="title">Fresh Concept Construction Renovation</h4>
                                    <span class="label">Special Projects</span>
                                </div>
                            </a>
                        </li>

                        <li class="gallery_list-item col-12 col-sm-6 col-xl-3">
                            <a
                                class="gallery_list-item_trigger"
                                href="img/placeholder.jpg"
                                data-caption="Fresh Concept Construction Renovation"
                                data-role="gallery-link"
                            >
                                <div class="img-wrapper">
                                    <picture>
                                        <source
                                            data-srcset="img/placeholder.jpg"
                                            srcset="img/placeholder.jpg"
                                            type="image/webp"
                                        />
                                        <img
                                            class="lazy"
                                            data-src="img/placeholder.jpg"
                                            src="img/placeholder.jpg"
                                            alt="Fresh Concept Construction Renovation"
                                        />
                                    </picture>
                                </div>
                                <div class="text-wrapper d-flex flex-column justify-content-end">
                                    <span class="subtitle">Our gallery</span>
                                    <h4 class="title">Fresh Concept Construction Renovation</h4>
                                    <span class="label">Special Projects</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="contact section">
                <div class="container d-flex flex-wrap align-items-end justify-content-lg-between justify-content-xl-start">
                    <div class="contact_form col-lg-6">
                        <div class="contact_form-header section_header">
                            <span class="subtitle">Contact us</span>
                            <h2 class="title">
                                Do You Have any
                                <span class="highlight">Questions?</span>
                            </h2>
                        </div>
                        <form
                            action="#"
                            class="contact_form-form contact-form d-flex flex-wrap justify-content-between"
                            method="POST"
                            name="feedbackForm"
                            data-type="feedback"
                        >
                            <input
                                class="contact-form_field contact-form_field--half field required"
                                name="feedbackName"
                                id="feedbackName"
                                type="text"
                                placeholder="Full name"
                            />
                            <input
                                class="contact-form_field contact-form_field--half field required"
                                data-type="tel"
                                type="text"
                                name="feedbackTel"
                                id="feedbackTel"
                                placeholder="Phone"
                            />
                            <input
                                class="contact-form_field field required"
                                data-type="email"
                                type="text"
                                name="feedbackEmail"
                                id="feedbackEmail"
                                placeholder="Email Address"
                            />
                            <textarea
                                class="contact-form_field field required"
                                data-type="message"
                                name="feedbackMessage"
                                id="feedbackMessage"
                                placeholder="Message"
                            ></textarea>
                            <button type="submit" class="contact-form_btn btn">Send message</button>
                        </form>
                    </div>
                    <div class="contact_info">
                        <h3 class="contact_info-header">Are You Going to Implement Project?</h3>
                        <ul class="contact-info">
                            <li class="contact-info_group">
                                <span class="name">Address</span>
                                <span class="content">2047 Cyrus Viaduct East Jadynchester</span>
                            </li>
                            <li class="contact-info_group">
                                <span class="name">Email</span>
                                <span class="content d-inline-flex flex-column">
                                    <a class="link" href="mailto:example.com">info@construct.com</a>
                                    <a class="link" href="mailto:example.com">support@construct.com</a>
                                </span>
                            </li>
                            <li class="contact-info_group">
                                <span class="name">Phone</span>
                                <span class="content d-inline-flex flex-column">
                                    <a class="link" href="tel:+13136453395">1 - 313 - 645 - 3395</a>
                                    <a class="link" href="tel:+14699702609">1 - 469 - 970 - 2609</a>
                                </span>
                            </li>
                        </ul>
                        <ul class="socials d-flex align-items-center justify-content-start">
                            <li class="socials_item">
                                <a class="socials_item-link" href="#" target="_blank" rel="noopener noreferrer">
                                    <i class="icon-facebook"></i>
                                </a>
                            </li>
                            <li class="socials_item">
                                <a class="socials_item-link" href="#" target="_blank" rel="noopener noreferrer">
                                    <i class="icon-instagram"></i>
                                </a>
                            </li>
                            <li class="socials_item">
                                <a class="socials_item-link" href="#" target="_blank" rel="noopener noreferrer">
                                    <i class="icon-twitter"></i>
                                </a>
                            </li>
                            <li class="socials_item">
                                <a class="socials_item-link" href="#" target="_blank" rel="noopener noreferrer">
                                    <i class="icon-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>
        <!--  HOMEPAGE CONTENT END  -->
        @include('footer')
