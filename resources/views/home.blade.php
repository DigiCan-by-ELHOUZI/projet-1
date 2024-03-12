@extends('layouts.home-layout')

@section('content')

<main style="background-color: black" >

    <!--? Zone Debut-->
    <div class="slider-area position-relative" style="background-image: url(img/gallery/karate.jpg)">
        <div class="slider-active">

            <!-- titre -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <span style="font-size: 60px;" data-animation="fadeInLeft" data-delay="0.1s">Salut c'est Abdelmounaim EL HOUZI</span>
                                <h1 style="font-size: 130px;" data-animation="fadeInLeft" data-delay="0.4s">karate shotokan</h1>
                                <a href="courses.html" class="border-btn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">Mes cours</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Zone debut End-->



    <!--? Equipe -->
    <section class="team-area fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <h2> katas  karate shotokan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="cat-icon">
                            <img src="img/gallery/photo1.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="">Heian Shodan</a></h5>
                            <p><strong>Heian Shodan</strong> est le premier kata que chaque karateka apprend, il reprend des mouvement de base tel que gedan-barai, oi-zuki, age-uke en position zenkutsu-dashi et shuto-uke en kokutsu-dashi. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="img/gallery/photo2.jpg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Heian Nidan</a></h5>
                            <p>Heian Nidan est le deuxieme kata Heian, il reprend des mouvement tel que Yoko Geri, Mae Geri, Nukite. Kokutsu-dashi est une des position principale de ce kata. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="cat-icon">
                            <img src="img/gallery/photo3.jpg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Heian Sandan</a></h5>
                            <p>Heian Sandan est le troisieme kata Heian, il aborde la position kiba-dashi, les blocages ushi-uke, morote-uke, Empi-Uke, les attaques uraken, Fumikomi, Ushiro-Empi ,... </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="img/gallery/photo4.jpg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Heian Yondan</a></h5>
                            <p>Heian Yondan est le quatrieme kata Heian, il est caracterise par une grande dynamique, il contient beaucoup de techniques de jambes (yoko-geri, mae-geri, hiza-geri) ainsi que des doubles blocages (Morote-Uke, kakiwake-uke).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="img/gallery/photo5.jpg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Heian Godan</a></h5>
                            <p>Cinquieme et dernier kata Heian, Heian Godan aborde de nombreuses nouvelles techniques et positions tel que kosa-dachi, renoji-dachi, mikazuki-geri. Il s'effectue a un rythme particulier avec une alternance de temps rapides
                                et de temps plus lents. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="img/gallery/photo6.jpg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Tekki Shodan</a></h5>
                            <p>Tekki Shodan s'effectue entierement en kiba-dachi, une autre de ses particularite est qu'il s'effectue sur un seul axe. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="img/gallery/photo7.jpg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Bassai Dai</a></h5>
                            <p>Bassai dai est un kata puissant et dynamique. Ce kata comporte plus de techniques de defense que d'attaque. Il represente la transformation d'une situation de combat defavorable en situation favorable. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="img/gallery/photo8.jpg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Kanku Dai</a></h5>
                            <p>Kanku dai est le plus long kata shotokan, il est aussi particulier par son debut, les mains forment une ouverture en triangle vers le ciel le regard suivant cette ouverture. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="img/gallery/photo9.jpg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Empi</a></h5>
                            <p> Empi est un kata s'effectuant sur un tempo rapide, il est caracterise par ses pivots, ses evolutions au ras du sol, des montees et de descentes du centre de gravite.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="img/gallery/photo10.jpg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Jion</a></h5>
                            <p>Jion fait reference a un vieux temple, il provient certainement de chine la position de depart faire clairement reference a la boxe chinoise </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="img/gallery/photo11.jpg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Hangetsu</a></h5>
                            <p>C'est un kata en partie respiratoire, lors des deplacements, le pied decrivent un arc de cercle</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="img/gallery/photo12.jpg" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Tekki Nidan</a></h5>
                            <p>Tekki Nidan est le deuxieme kata Tekki, il s'effectue egalement entierement en kiba-dachi et sur un seul axe. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  EquipeEnd -->
    <!--? Gallery Area Start -->
    <div class="gallery-area section-padding30 ">
        <div class="container-fluid ">
        </div>
    </div>
    <!-- Gallery Area End -->
    <!-- tarif start -->
    <section class="pricing-area section-padding40 fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                        <h2>tarifs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="img/icon/price.svg" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">1 mois</span>
                                <p class="mb-25">15$/m + 20$/ans d'assurance</p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>les enfants moins de 12ans</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Equipements illimites</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Entraineur</p>
                                    </div>
                                </div>

                                <a href="contact.html" class="border-btn border-btn2">Valider</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="img/icon/price.svg" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">1 mois</span>
                                <p class="mb-25">25$/m + 60$/ans d'assurance</p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Entre 12 et 18ans </p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Equipements illimites</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Entraineur</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Cours de detente</p>
                                    </div>
                                </div>
                                <a href="contact.html" class="border-btn border-btn2">Valider</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="img/icon/price.svg" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month">1 mois</span>
                                <br/>
                                <p class="mb-25">35$/m + 60$/ans d'assurance</p>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>plus de 18 ans</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Equipements illimites</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Entraineur</p>
                                    </div>
                                </div>
                                <div class="single-features">
                                    <div class="features-icon">
                                        <img src="img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>Cours de detente</p>
                                    </div>
                                </div>
                                <div class="single-features mb-20">
                                    <div class="features-icon">
                                        <img src="img/icon/check.svg" alt="">
                                    </div>
                                    <div class="features-caption">
                                        <p>musculation</p>
                                    </div>
                                </div>
                                <a href="contact.html" class="border-btn border-btn2">Valider</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tarif  End -->
    <!--? About Area-2 Start -->
    <section class="about-area2 fix pb-padding pt-50 pb-80">
        <div class="support-wrapper align-items-center">
            <div class="right-content2">
                <!-- img -->
                <div class="right-img wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <img src="img/gallery/moi.jpg" alt="">
                </div>
            </div>
            <div class="left-content2">
                <!-- section tittle -->
                <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="front-text">
                        <h2 class="">À propos de moi</h2>
                        <p>Karaté c'est une sporte que j'ai commencé à l'âge de 11 ans et jusqu'à l'âge de 16ans dans cette periode j'ai obtenue 3 médaille d'or et j'ai gagne 25 combat et 3 perdu.</p>
                        <p class="mb-40">Dans la periode d'entrainement je conseille les nouveaux de suivre les étapes suivants:</p>
                        <p> <strong>1.</strong> Échauffez-vous 10 minutes.<br/>
                            <strong>2.</strong> Étirez-vous 15 minutes.<br/>
                            <strong>3.</strong> Méditez 5 minutes ou plus.<br/>
                            <strong>4.</strong> Entrainez-vous aux coups de main et aux défenses 15 minutes.<br/>
                            <strong>5.</strong> Entrainez-vous avec quelqu'un 15 minutes ou plus.<br/>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->
    <!--? Blog Area Start -->
    <section class="home-blog-area pt-10 pb-50">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9 col-sm-10">
                    <div class="section-tittle text-center mb-100 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2>ceintures</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="img/gallery/ceinture.jpeg" alt="">
                            </div>
                            <div class="blog-cap">
                                <span>les différents ceintures</span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="img/gallery/img_ceint.jpg" usemap="#ceint" alt="">
                                <map name="ceint">
                                    <area shape="rect" coords="0,0,175,122" href="https://www.youtube.com/watch?v=w6RBC-Br_hI" alt="">
                                    <area shape="rect" coords="191,0,364,122" href="https://www.youtube.com/watch?v=6jM5shnI7rE" alt="">
                                    <area shape="rect" coords="372,0,556,122" href="https://www.youtube.com/watch?v=Q4T30L7Wx24" alt="">
                                    <area shape="rect" coords="0,125,186,244" href="https://www.youtube.com/watch?v=9n7okNdpmJU" alt="">
                                    <area shape="rect" coords="190,125,363,244" href="https://www.youtube.com/watch?v=6UEtkdHNYJ8" alt="">
                                    <area shape="rect" coords="370,125,555,244" href="https://www.youtube.com/watch?v=VCtZ3_Vn-ew" alt="">
                                    <area shape="rect" coords="0,255,186,378" href="https://www.youtube.com/watch?v=uBOHJ4MI7y0" alt="">
                                    <area shape="rect" coords="190,255,357,378" href="https://www.youtube.com/watch?v=ICoNHxQb0GU" alt="">
                                    <area shape="rect" coords="370,255,556,378" href="https://www.youtube.com/watch?v=h9xESr_8E0U" alt="">
                                 </map>

                            </div>
                            <div class="blog-cap">
                                <span> Cliquez sur chaque ceintures pour voir les katas</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
    <!--? video_start -->
    <div class="video-area section-bg2 d-flex align-items-center" data-background="img/gallery/video.jpg">
        <div class="container">
            <div class="video-wrap position-relative">
                <div class="video-icon">
                    <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=fTWciJZw6rI"><i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- video_end -->
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
