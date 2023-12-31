@extends('layouts.app')

@section('content')



<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrapper">
                    <h1>Contactez Nous</h1>
                    <ul>
                        <li><a href="index.html">Accueil</a></li>
                        <li>Contactez Nous</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-area sec-mar">
    <div class="container">
        <div class="row">
            <div class="col col-xl-6">
                <div class="title black">
                    <span>Prendre contact</span>
                    <h2>Contactez nous si vous avez plus de questions.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="office-info">
                    <div class="icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <h4>Adresse</h4>
                    <p>Rue 6 /4 MEDINA, DAKAR SENEGAL</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="office-info">
                    <div class="icon">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <h4>Téléphone</h4>
                    <a href="tel:+221768198199">+221768198199</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="office-info">
                    <div class="icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <h4>Email</h4>
                    <a href="mailto:propulser20@gmail.com"><span>propulser20@gmail.com</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-information">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="contact-form">
                        <h3>Pour plus d'infos </h3>
                        <form id="contact-form" action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="nom" placeholder="Entrez votre nom">
                                </div>
                                <div class="col-xl-6">
                                    <input type="email" name="email" placeholder="Entrez votre mail">
                                </div>
                                <div class="col-xl-6">
                                    <input type="text" name="sujet" placeholder="Object">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" cols="30" rows="10" placeholder="Votre message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit">Envoyer</button>
                                </div>
                                <p class="form-message"></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.3701967527613!2d90.39056151540181!3d23.734174695311943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8c1f25e613d%3A0xaad562eec578f8ff!2sArts%20Faculty%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1644381552436!5m2!1sen!2sbd" style="border:0;" allowfullscreen loading="lazy"></iframe>
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
                    <span>Parlons</span>
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