@extends('layouts.app')

@section('content')

<section class="hero-area">
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-content-wrapper">
                                <div class="hero-content-wrap">
                                    <div class="hero-content-img">
                                        <img src="assets/img/hero-slider-1.jpg" alt>
                                    </div>
                                    <div class="hero-content">
                                        <h2>Propulser</h2>
                                        <h1>Meilleiur solution pour votre <span>Business.</span></h1>
                                        <p>Propulsez votre entreprise vers de nouveaux sommets avec notre agence, offrant la solution ultime pour optimiser votre succès commercial grâce à des stratégies innovantes et ciblées.</p>
                                        <a href="about.html" class="about-btn">A propos de nous </a>
                                        <a href="project-details.html" class="work-btn">Comment nous travaillons</a>
                                        <div class="slider-num">
                                            <span>01</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-content-wrapper">
                                <div class="hero-content-wrap">
                                    <div class="hero-content-img">
                                        <img src="assets/img/hero-slider-2.png" alt>
                                    </div>
                                    <div class="hero-content">
                                        <h2>Propulser</h2>
                                        <h1>Meilleiur solution pour votre <span>Financement.</span></h1>
                                        <p>Optimisez votre entreprise avec des solutions de pointe, tout en maîtrisant les coûts, grâce à notre agence de propulsion.</p>
                                        <a href="about.html" class="about-btn">A propos de nous</a>
                                        <a href="project-details.html" class="work-btn">Comment nous travaillons</a>
                                        <div class="slider-num">
                                            <span>02</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-content-wrapper">
                                <div class="hero-content-wrap">
                                    <div class="hero-content-img">
                                        <img src="assets/img/hero-slider-3.png" alt>
                                    </div>
                                    <div class="hero-content">
                                        <h2>Propulser</h2>
                                        <h1>Meilleiur solution pour votre <span>Marketing.</span></h1>
                                        <p>Le marketing digital est l'art de connecter les marques avec leur public cible dans le monde numérique en constante évolution, ouvrant ainsi les portes de la visibilité, de l'engagement et de la croissance exponentielle.</p>
                                        <a href="about.html" class="about-btn">A propos de nous</a>
                                        <a href="project-details.html" class="work-btn">Comment nous travaillons</a>
                                        <div class="slider-num">
                                            <span>03</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="social-media">
        <ul class="social-list">
            <li><a href="https://www.facebook.com/profile.php?id=100092353343000">Facebook</a></li>
            <li><a href="https://www.instagram.com/pro_pulser/">instagram</a></li>
            <li><a href="https://www.linkedin.com/company/propulsers/">Linked in</a></li>
        </ul>
    </div>
</section>


<section class="service-area sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="title">
                    <span>Ce que nous faisons </span>
                    <h2>Nous travaillons pour rendre nos clients heureux !</h2>
                    <div class="cmn-btn">
                        <a href="services.html">Voir nos projets +</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-8">
                <div class="row g-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="single-service">
                            <span class="count">01</span>
                            <div class="service-icon">
                                <i><img src="assets/img/icons/service-icon-1.png" alt></i>
                            </div>
                            <div class="service-content">
                                <h4>Developpement web</h4>
                                <p>Création professionnelle de sites web captivants pour présenter vos services avec impact.</p>
                                <a href="{{ route('services.detailsWeb') }}">Voir plus<i><img src="assets/img/icons/arrow-circle.png" alt></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="single-service">
                            <span class="count">02</span>
                            <div class="service-icon">
                                <i><img src="assets/img/icons/service-icon-2.png" alt></i>
                            </div>
                            <div class="service-content">
                                <h4>Design graphic </h4>
                                <p>Conception visuelle remarquable pour donner vie à votre identité et messages uniques.</p>
                                <a href="{{ route('services.detailsDesign') }}">Voir plus<i><img src="assets/img/icons/arrow-circle.png" alt></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="single-service">
                            <span class="count">03</span>
                            <div class="service-icon">
                                <i><img src="assets/img/icons/service-icon-3.png" alt></i>
                            </div>
                            <div class="service-content">
                                <h4>Marketing</h4>
                                <p>Stratégies numériques puissantes pour stimuler la croissance et maximiser la visibilité en ligne.</p>
                                <a href="{{ route('services.detailsMarketing') }}">Voir plus<i><img src="assets/img/icons/arrow-circle.png" alt></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="single-service">
                            <span class="count">04</span>
                            <div class="service-icon">
                                <i><img src="assets/img/icons/service-icon-4.png" alt></i>
                            </div>
                            <div class="service-content">
                                <h4>SEO</h4>
                                <p>Optimisation ciblée pour propulser votre site en tête des résultats de recherche.</p>
                                <a href="{{ route('services.detailsSeo') }}">Voir plus<i><img src="assets/img/icons/arrow-circle.png" alt></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="about-area sec-mar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="about-left">
                    <div class="title black">
                        <span>Apropos de nous </span>
                        <h2 class="mb-15">Direction de notre startup</h2>
                    </div>
                    <p>Notre équipe est composée de jeunes talents passionnés, dévoués à propulser votre projet vers de nouveaux sommets. Nos développeurs chevronnés possèdent une expertise approfondie dans les langages de programmation et les technologies web les plus récentes. Leur créativité et leur rigueur leur permettent de concevoir des solutions techniquement solides et performantes. Nos talentueux designer apportent une vision artistique et esthétique à chaque projet, en créant des interfaces visuellement captivantes et en veillant à ce que chaque détail soit harmonieux. Ensemble, nous formons une équipe complémentaire, unissant nos forces pour offrir une expérience utilisateur exceptionnelle, un code propre et une esthétique soignée. Nous sommes passionnés par notre métier et engagés à fournir des résultats qui dépassent les attentes de nos clients.</p>
                    <div class="our-mission">
                        <div class="msn-icon">
                            <i><img src="assets/img/icons/mission-icon.png" alt></i>
                        </div>
                        <div class="msn-content">
                            <h5>Notre mission </h5>
                            <p>Notre mission est de propulser votre présence en ligne en fournissant des solutions de communication innovantes et percutantes.</p>
                        </div>
                        <div class="cto">
                            <img src="assets/img/ctoFounder.png" alt>
                        </div>
                    </div>
                    <div class="cmn-btn">
                        <a href="about.html">A propos</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="about-right">
                    <div class="group-images">
                        <img src="assets/img/about-bottom.jpg" alt>
                        <div class="about-top">
                            <img src="assets/img/about-top.png" alt>
                        </div>
                        <div class="about-skills">
                            <div class="signle-skill">
                                <div class="progress-bar-circle" data-percent="90" data-duration="1000"></div>
                                <div class="skill-content">
                                    <h6>web</h6>
                                    <p>Clean Design</p>
                                </div>
                            </div>
                            <div class="signle-skill xsm">
                                <div class="progress-bar-circle" data-percent="85" data-duration="1000"></div>
                                <div class="skill-content">
                                    <h6>App</h6>
                                    <p>Developing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="features-count">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="single-count">
                        <i><img src="assets/img/icons/count-1.png" alt></i>

                        <div class="counter">
                            <span class="odometer">9</span><sup>+</sup>
                        </div>
                        <p>Projets Réaliser</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="single-count">
                        <i><img src="assets/img/icons/count-2.png" alt></i>
                        <div class="counter">
                            <span class="odometer">12</span><sup>+</sup>
                        </div>
                        <p> Clients Satisfaits</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="single-count">
                        <i><img src="assets/img/icons/count-3.png" alt></i>
                        <div class="counter">
                            <span class="odometer">5</span><sup>+</sup>
                        </div>
                        <p>Equipe</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="our-partner">
    <div class="container-fluid g-0 overflow-hidden">
        <div class="row align-items-center g-0">
            <div class="col-12 col-xl-6">
                <div class="newsletter">
                    <div class="subscribes">
                        <span>Entrer en contact</span>
                        <h1>S'inscrire au </h1>
                        <h2>Newsletter</h2>
                        <div class="subscribe-form">
                            <form action="#" method="post">
                                <input type="email" name="email" placeholder="Entrez votre mail">
                                <input type="submit" value="S'inscrire">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="our-clients">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-4 col-xl-6">
                            <div class="title">
                                <span>Nos partenaires</span>
                                <h2>Rejoignez notre communauté.</h2>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-1.png" alt>
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-2.png" alt>
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-3.png" alt>
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-4.png" alt>
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-5.png" alt>
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-6.png" alt>
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-7.png" alt>
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-8.png" alt>
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-9.png" alt>
                                <div class="client-hover">
                                    <span>www.example.org</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="single-client">
                                <img src="assets/img/partner-icons/partner-10.png" alt>
                                <div class="client-hover">
                                    <span>www.example.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="portfolio-area sec-mar-top">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-5">
                <div class="title black">
                    <span>Étude de cas</span>
                    <h2>Un portefeuille diversifié et résilient.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper portfolio-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="single-portfolio">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/portfolio-1.jpg" alt></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>Template</span>
                        <h4>Creative Agency</h4>
                        <div class="portfolio-hover">
                            <a href="project-details.html" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/portfolio-1.jpg"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="single-portfolio">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/portfolio-2.jpg" alt></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>UI Kit</span>
                        <h4>E-Shop Ecommerce</h4>
                        <div class="portfolio-hover">
                            <a href="project-details.html" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/portfolio-2.jpg"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="single-portfolio">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/portfolio-3.jpg" alt></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>Software</span>
                        <h4>Desktop Mockup</h4>
                        <div class="portfolio-hover">
                            <a href="project-details.html" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/portfolio-3.jpg"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="single-portfolio">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/portfolio-4.jpg" alt></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>Graphic</span>
                        <h4>Art Deco Cocktails</h4>
                        <div class="portfolio-hover">
                            <a href="project-details.html" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/portfolio-4.jpg"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="single-portfolio">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/portfolio-5.jpg" alt></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>App</span>
                        <h4>Mobile Crypto Wallet</h4>
                        <div class="portfolio-hover">
                            <a href="project-details.html" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/portfolio-5.jpg"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="single-portfolio">
                    <div class="portfolio-data">
                        <a href="#"><img src="assets/img/portfolio/portfolio-3.jpg" alt></a>
                    </div>
                    <div class="portfolio-inner">
                        <span>Template</span>
                        <h4>Creative Agency</h4>
                        <div class="portfolio-hover">
                            <a href="project-details.html" class="case-btn">Case Study</a>
                            <a data-lightbox="image1" href="assets/img/portfolio/portfolio-3.jpg"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>


<section class="why-choose-us sec-mar">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="title black">
                    <span>Pourquoi nous ?</span>
                    <h2 class="mb-15">Le succés est juste autour du prochain coin en ligne</h2>
                </div>
                <div class="video-demo">
                    <img src="assets/img/play-video.jpg" alt>
                    <div class="play-btn">
                        <a class="popup-video" href="https://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fas fa-play"></i>Lire </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="valuable-skills">
                    <img src="assets/img/valuable-skill.jpg" alt>
                    <div class="signle-bar">
                        <h6>Design Graphic</h6>
                        <div id="bar1" class="barfiller">
                            <span class="tip"></span>
                            <span class="fill" data-percentage="90"></span>
                        </div>
                    </div>
                    <div class="signle-bar">
                        <h6>Developpement web</h6>
                        <div id="bar2" class="barfiller">
                            <span class="tip"></span>
                            <span class="fill" data-percentage="80"></span>
                        </div>
                    </div>
                    <div class="signle-bar">
                        <h6>Marketing</h6>
                        <div id="bar3" class="barfiller">
                            <span class="tip"></span>
                            <span class="fill" data-percentage="80"></span>
                        </div>
                    </div>
                    <div class="signle-bar">
                        <h6>SEO </h6>
                        <div id="bar4" class="barfiller">
                            <span class="tip"></span>
                            <span class="fill" data-percentage="70"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-content">
                                <div class="quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="client-info">
                                    <div class="client-pic">
                                        <img src="assets/img/client.jpg" alt>
                                    </div>
                                    <div class="client-details">
                                        <h4>Savannah Nguyen</h4>
                                        <span>Executive CEO</span>
                                    </div>
                                </div>
                                <p><i class="fas fa-quote-left"></i> Curabitur magna nisi, egestas quis est in, finibus pulvinar ipsum. Nunc sit amet odio interdum, maximus dolor quis, ullamcorper lectus. Mauris vitae faucibus libero. Curabitur eu convallis purus. Nunc accumsan diam in arcu pellentesque sagittis. Curabitur dolor odio, aliquam vitae noday backowner condimentum this fire ongon then only on <i class="fas fa-quote-right"></i></p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-content">
                                <div class="quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="client-info">
                                    <div class="client-pic">
                                        <img src="assets/img/client-2.jpg" alt>
                                    </div>
                                    <div class="client-details">
                                        <h4>Nailong Jeso</h4>
                                        <span>CTO Founder</span>
                                    </div>
                                </div>
                                <p><i class="fas fa-quote-left"></i> Curabitur magna nisi, egestas quis est in, finibus pulvinar ipsum. Nunc sit amet odio interdum, maximus dolor quis, ullamcorper lectus. Mauris vitae faucibus libero. Curabitur eu convallis purus. Nunc accumsan diam in arcu pellentesque sagittis. Curabitur dolor odio, aliquam vitae noday backowner condimentum this fire ongon then only on <i class="fas fa-quote-right"></i></p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-content">
                                <div class="quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="client-info">
                                    <div class="client-pic">
                                        <img src="assets/img/client-3.jpg" alt>
                                    </div>
                                    <div class="client-details">
                                        <h4>Gautam Yamni</h4>
                                        <span>Designer Head</span>
                                    </div>
                                </div>
                                <p><i class="fas fa-quote-left"></i> Curabitur magna nisi, egestas quis est in, finibus pulvinar ipsum. Nunc sit amet odio interdum, maximus dolor quis, ullamcorper lectus. Mauris vitae faucibus libero. Curabitur eu convallis purus. Nunc accumsan diam in arcu pellentesque sagittis. Curabitur dolor odio, aliquam vitae noday backowner condimentum this fire ongon then only on <i class="fas fa-quote-right"></i></p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Section blog 
<section class="latest-news sec-mar">
<div class="container">
<div class="row gx-4">
<div class="col-md-6 col-lg-4 col-xl-4">
<div class="signle-news">
<div class="tag">
<a href="#">Web Design</a>
</div>
<div class="post-img">
<a href="blog_details.html"><img src="assets/img/post/post-1.jpg" alt></a>
</div>
<div class="news-content">
<div class="author">
<div class="author-pic">
<img src="assets/img/author/author-1.jpg" alt>
</div>
<div class="author-info">
<h5>Posted by, Alen Jodge</h5>
<span>05 January, 2022</span>
</div>
</div>
<h3><a href="blog_details.html">Donec a porttitor phari sod tellus Nunc quis erosn.</a></h3>
<p>Aptent taciti sociosqu ad litora torquent pi himenaeos. Praesent nec neque at dolor ti venenatis consectetur eu quis ex.</p>
<div class="view-btn">
<a href="blog_details.html">View details</a>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 col-xl-4">
<div class="signle-news">
<div class="tag">
<a href="#">Software</a>
</div>
<div class="post-img">
<a href="blog_details.html"><img src="assets/img/post/post-2.jpg" alt></a>
</div>
<div class="news-content">
<div class="author">
<div class="author-pic">
<img src="assets/img/author/author-2.jpg" alt>
</div>
<div class="author-info">
<h5>Posted by, Kim karden</h5>
<span>05 January, 2022</span>
</div>
</div>
<h3><a href="blog_details.html">Mekusa a porttitor phari sod tellus algo quis ksro.</a></h3>
<p>Aptent taciti sociosqu ad litora torquent pi himenaeos. Praesent nec neque at dolor ti venenatis consectetur eu quis ex.</p>
<div class="view-btn">
<a href="blog_details.html">View details</a>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 col-xl-4">
<div class="title black">
<span>Blog</span>
<h2>Latest news And Article modern design.</h2>
<div class="cmn-btn">
<a href="blog.html">View All Blog</a>
</div>
</div>
</div>
</div>
</div>
</section>
-->

<section class="lets-talk sec-pad">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
                <div class="title special">
                    <span>Parlons </span>
                    <h2>A propos de votre futur <br><b>Projet</b> votre esprit</h2>
                </div>
            </div>
            <div class="col-md-3 col-lg-4 col-xl-5 text-end">
                <div class="getin-touch">
                    <div class="cmn-btn">
                        <a href="contact.html">Prendre contact ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection