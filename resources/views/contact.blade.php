@extends('layouts.home-layout')

@section('content')

<main>
    <!--? Contacte -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Contactez-moi</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact End -->
    <!--?  Contact Area stat  -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2878.4583176234896!2d4.330805415503338!3d43.82559407911586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b42dcb75687ccd%3A0x9a9c386b9eab1070!2s1%20Rue%20Matisse%2C%2030900%20N%C3%AEmes!5e0!3m2!1sfr!2sfr!4v1642499110972!5m2!1sfr!2sfr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">CONTACTEZ-MOI</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="" method="post" >
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer un message'" placeholder=" Entrer un message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrez votre nom'" placeholder="Entrez votre nom">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Entrez le sujet">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" name="submit" class="button button-contactForm boxed-btn">Envoyer</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>1 Rue Matisse </h3>
                            <p>30900, Nimes</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>0033769092324</h3>
                            <p>Du lundi au vendredi de 9h à 18h</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>abdelmounaimelhouzi@gmail.com</h3>
                            <p>Envoyez-nous votre requête à tout moment !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
    <!-- ? services-area -->
    <section class="services-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">

                        <div class="features-caption">
                            <h3>Localisation</h3>
                            <p>1 Rue Matisse Nimes France</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">

                        <div class="features-caption">
                            <h3>Nr.Telephone</h3>
                            <p>0033769092324</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">

                        <div class="features-caption">
                            <h3>E-mail</h3>
                            <p>abdelmounaimelhouzi@gmail.com</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
