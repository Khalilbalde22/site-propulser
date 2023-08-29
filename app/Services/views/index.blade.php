@extends('layouts.app')


@section('content')


<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrapper">
                    <h1>Service</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Service</li>
                    </ul>
                </div>
            </div>
        </div>
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


<section class="how-we-work sec-mar-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xl-4">
                <div class="title black">
                    <span>Comment nous travaillons </span>
                    <h2>Notre processus de travail unique.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="swiper work-process">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="work-process-wrapper">
                                <img src="assets/img/etude.png" alt>
                                <div class="work-process-inner">
                                    <b>01</b>
                                    <h4>Etude du projet</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="work-process-wrapper">
                                <img src="assets/img/work-process-slider-1.png" alt>
                                <div class="work-process-inner">
                                    <b>02</b>
                                    <h4>Prototypage</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="work-process-wrapper">
                                <img src="assets/img/developemet.png" alt>
                                <div class="work-process-inner">
                                    <b>03</b>
                                    <h4>Developpement</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="work-process-wrapper">
                                <img src="assets/img/work-process-slider-2.jpg" alt>
                                <div class="work-process-inner">
                                    <b>04</b>
                                    <h4>Teste</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="work-process-wrapper">
                                <img src="assets/img/livraison1.png" alt>
                                <div class="work-process-inner">
                                    <b>05</b>
                                    <h4>Livraison</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pricing-plan sec-mar">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-6 col-xl-5 or2">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Mensuel</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Annuelle</button>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-6 col-xl-5 or1">
                <div class="title black">
                    <span>Nos plans tarification</span>
                    <h2>Rejoignez-nous maintenant pour votre entreprise.</h2>
                </div>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="single-price-box">
                            <h3>Small Business</h3>
                            <span>Single Business</span>
                            <h2>$15.99/<sub>Per Month</sub></h2>
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i>10 Pages Responsive Website</li>
                                <li><i class="fas fa-check"></i>5PPC Campaigns</li>
                                <li><i class="fas fa-check"></i>10 SEO Keyword</li>
                                <li><i class="fas fa-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="fas fa-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="pay-btn">
                                <a href="contact.html">Pay Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="single-price-box">
                            <h3>Professional</h3>
                            <span>Small team</span>
                            <h2>$99.99/<sub>Per Month</sub></h2>
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i>10 Pages Responsive Website</li>
                                <li><i class="fas fa-check"></i>5PPC Campaigns</li>
                                <li><i class="fas fa-check"></i>10 SEO Keyword</li>
                                <li><i class="fas fa-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="fas fa-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="pay-btn">
                                <a href="contact.html">Pay Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="single-price-box">
                            <h3>Enterprice</h3>
                            <span>Large Team</span>
                            <h2>$120.99/<sub>Per Month</sub></h2>
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i>10 Pages Responsive Website</li>
                                <li><i class="fas fa-check"></i>5PPC Campaigns</li>
                                <li><i class="fas fa-check"></i>10 SEO Keyword</li>
                                <li><i class="fas fa-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="fas fa-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="pay-btn">
                                <a href="contact.html">Pay Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="single-price-box">
                            <h3>Small Business</h3>
                            <span>Single Business</span>
                            <h2>$150.99/<sub>Per Yearly</sub></h2>
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i>10 Pages Responsive Website</li>
                                <li><i class="fas fa-check"></i>5PPC Campaigns</li>
                                <li><i class="fas fa-check"></i>10 SEO Keyword</li>
                                <li><i class="fas fa-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="fas fa-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="pay-btn">
                                <a href="contact.html">Pay Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="single-price-box">
                            <h3>Professional</h3>
                            <span>Small team</span>
                            <h2>$199.99/<sub>Per Yearly</sub></h2>
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i>10 Pages Responsive Website</li>
                                <li><i class="fas fa-check"></i>5PPC Campaigns</li>
                                <li><i class="fas fa-check"></i>10 SEO Keyword</li>
                                <li><i class="fas fa-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="fas fa-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="pay-btn">
                                <a href="contact.html">Pay Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="single-price-box">
                            <h3>Enterprice</h3>
                            <span>Large Team</span>
                            <h2>$220.99/<sub>Per Yearly</sub></h2>
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i>10 Pages Responsive Website</li>
                                <li><i class="fas fa-check"></i>5PPC Campaigns</li>
                                <li><i class="fas fa-check"></i>10 SEO Keyword</li>
                                <li><i class="fas fa-check"></i>5 Facebook Camplaigns</li>
                                <li><i class="fas fa-check"></i>2 Video Camplaigns</li>
                            </ul>
                            <div class="pay-btn">
                                <a href="contact.html">Pay Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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