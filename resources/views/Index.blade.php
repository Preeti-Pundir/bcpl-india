<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Beauty Concepts</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{url('css/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
    jQuery(document).ready(function($) {
        $(".counter").counterUp({
            delay: 10,
            time: 2000,
        });
    });
    </script>
</head>

<body>

    <body>
        <header>
            <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
            <div class="overlay"></div>
            <div id="audio-control" class=" mute-btn muted"><i onclick="myFunction(this)"
                    class="fa-solid fa-volume-mute"></i>
            </div>
            <input id="volume" class="volume-btn" type="range"></input>
            <!-- <div><input id="volume" type="range"></input> </div> -->

            <!-- The HTML5 video element that will create the background video on the header -->
            <video playsinline="playsinline" id="myVideo" autoplay muted preload="yes" loop="loop" class="video-js"
                data-setup='{"autoplay":"any"}'>
                <source src="video/Bvlgari Rose Goldea Blossom Delight EDT.mp4" type="video/mp4" />
            </video>

            <!-- The header content -->
            <div class="container-fluid headercontainer">
                <header>
                    <div class="firstnav mt-4 pe-5 text-center">
                        <nav>
                            <ul class="nav-links">
                                <li>
                                    <a href="{{route('about')}}" class="leftmenu active">ABOUT US</a>
                                </li>
                                <li><a href="{{route('Brands')}}" class="leftmenu">BRANDS</a></li>
                                <li>
                                    <a href="{{route('Maisondeperfums')}}" class="leftmenu">MAISON DES PARFUMS</a>
                                </li>
                                <li>
                                    <a href="{{route('Index')}}" class="centermenu">
                                        <img src="pictures/logowhite.png" alt="" /></a>
                                </li>
                                <li><a href="{{route('Ourstores')}}" class="rightmenu">OUR STORES</a></li>
                                <li>
                                    <a href="{{ route('createForm') }}" class="rightmenu">CONTACT US</a>
                                </li>
                                <li>
                                    <a href="{{route('Storelocator')}}" class="rightmenu">STORE LOCATOR</a>
                                </li>

                            </ul>
                            <div class="float-end language-class">
                                    <!-- Button trigger modal -->

    <img src="/pictures/internet.png" alt="" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width:25px" >

<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body">
      <div class="google-class" id="google_element"></div>
      </div>

    </div>
  </div>
</div>



                            </div>


                        </nav>

                    </div>
                    <div class="secondnav">
                        <nav class="navbar navbar-expand-xm navbar-dark p-md-3">
                            <div class="container">
                                <a class="navbar-brand" width="20%" class="centermenu" href="{{route('Index')}}"><img
                                        src="pictures/home-white-logo.png" width="40%" alt="" /></a>
                                        <div class="navbar-nav ml-auto">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                               
</div>

                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <div class="mx-auto"></div>
                                    <ul class="navbar-nav d-flex flex-column text-start">
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="{{route('about')}}">ABOUT US</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="{{route('Brands')}}">BRANDS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="{{route('Maisondeperfums')}}">MAISON
                                                DES PARFUMS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="{{route('Ourstores')}}">OUR STORES</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="{{ route('createForm') }}">CONTACT
                                                US</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="{{route('Storelocator')}}">STORE
                                                LOCATOR</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </header>
            </div>
        </header>


        <!-- Main Content Area -->

        <div class="container mt-5">
            <div class="language">
          </div>
            <p class="text-center " style="color: #707070;
    font-size: 30px;
    font-family: montserrat, sans-serif !important;">A LEADING DISTRIBUTOR OF GLOBAL BRANDS</p>
            <div class="owl-carousel owl-theme slidercard2 pb-2">
                
                    <div class="item ">
                        <img src="/pictures/index-logo/AcquaDiParma.jpg" alt="">
                    </div>

                    <div class="item ">
                        <img src="/pictures/index-logo/Amouge.jpg" alt="">
                    </div>

                    <div class="item ">
                        <img src="/pictures/index-logo/Bvlgari.jpg" alt="">
                    </div>

                    <div class="item ">
                        <img src="/pictures/index-logo/CAVIAR.jpg" alt="">
                    </div>

                    <div class="item ">
                        <img src="/pictures/index-logo/Chopard.jpg" alt="">
                    </div>

                    <div class="item ">
                        <img src="/pictures/index-logo/EVELOM.jpg" alt="">
                    </div>

                    <div class="item ">
                        <img src="/pictures/index-logo/Ermenegildo-Zegna.jpg" alt="">
                    </div>

                    <div class="item ">
                        <img src="/pictures/index-logo/Guerlain.jpg" alt="">
                    </div>

                    <div class="item ">
                        <img src="/pictures/index-logo/Hermes.jpg" alt="">
                    </div>


                    <div class="item ">
                        <img src="/pictures/index-logo/lalique.jpg" alt="">
                    </div>


                    <div class="item ">
                        <img src="/pictures/index-logo/MemoParis.jpg" alt="">
                    </div>

                    <div class="item ">
                        <img src="/pictures/index-logo/Moresque.jpg" alt="">
                    </div>

                    <div class="item ">
                        <img src="/pictures/index-logo/MARGY.jpg" alt="">
                    </div>

                    <div class="item ">
                        <img src="/pictures/index-logo/MZSKIN.jpg" alt="">
                    </div>


                    <div class="item ">
                        <img src="/pictures/index-logo/ORLANE.jpg" alt="">
                    </div>

                    <div class="item ">
                        <img src="/pictures/index-logo/PHILIPB.jpg" alt="">
                    </div>

                    <div class="item ">
                        <img src="/pictures/index-logo/SACHA.jpg" alt="">
                    </div>

                    <div class="item ">
                        <img src="/pictures/index-logo/SWISS.jpg" alt="">
                    </div>

                    <div class="item ">
                        <img src="/pictures/index-logo/SF.jpg" alt="">
                    </div>

                    <div class="item ">
                        <img src="/pictures/index-logo/VERSO.jpg" alt="">
                    </div>
                

            </div>
        </div>

        <div class="container-fluid text-center counter-section">
            <div class="container text-center">
                <div class="row pt-5 pb-5">
                    <div class="col-md-7 col-sm-12">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <span class="counter-number counter">100 </span><span class="counter-number">+</span>
                                <p class="counter-name">Brands</p>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <span class="counter-number counter">3000</span><span class="counter-number">+</span>
                                <p class="counter-name">Point of sales</p>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <span class="counter-number counter">10</span><span class="counter-number">+</span>

                                <p class="counter-name">Warehouses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <span class="counter-number counter">900 </span><span class="counter-number">+</span>
                                <p class="counter-name">Team Strength</p>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <span class="counter-number counter">50000</span><span class="counter-number">+</span>
                                <p class="counter-name">SKUs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5 mb-5">
            <div class="row knowusallcontent">
                <div class="col-md-6 col-sm-12 mb-3">
                    <p class="knowushead">Know About Us</p>

                    <p class="knowuscontent" style="text-align: justify;">
                        BCPL - BEAUTY CONCEPTS, established in the year 1998 is an integral part of the Bahety Group of
                        Companies. With a brand portfolio of over 100+ brands, BCPL is the preferred partner for
                        international
                        brands foraying into the emerging and challenging Indian Market. After being in business for
                        across 4 decades.
                        <br><br>
                        We are well equipped to build brands taking them to new heights of success with our excellent
                        business relationships, infrastructure, innovations, technological know-how, financial muscle
                        and
                        vision. With a network of 3000+ POS, 900+ employees and growing, 10+ warehouses, 50,000+
                        offered SKUs, we are the preferred choice of retailers and brands
                    </p>
                    <a href="{{route('about')}}"><button class="knowusbtn">Know More</button></a>
                </div>
                <div class="col-md-6 col-sm-12 mt-4 text-center">
                    <img src="pictures/Group 1.png" width="80%" alt="" />
                </div>
            </div>
        </div>
        <div class="container mb-5">
            <div class="mt-3 mb-3 text-center justify-content-between">
                <span><img src="pictures/ring-homepage.png" style="width: 10%" /></span>&nbsp;
                &nbsp;&nbsp;<span class="chooseushead">Why Choose Us</span>&nbsp;
                &nbsp;&nbsp;&nbsp;<span><img src="pictures/ring-homepage.png" style="width: 10%" /></span>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
                    <div class="card text-white whychooseusimg">
                        <div class="flip-cardl">
                            <div class="flip-card-innerl">
                                <div class="flip-card-frontl">
                                    <p>We're brand builders</p>
                                </div>
                                <div class="flip-card-backl">
                                    <p>Building brands is our passion that runs in our DNA. We are…but an
                                        extension of you, be it your brand or your customers, we understand you 100 per
                                        cent.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
                    <div class="card text-white whychooseusimg">
                        <div class="flip-cardt">
                            <div class="flip-card-innert">
                                <div class="flip-card-frontt">
                                    <p> We’ve deep-rooted relationships </p>
                                </div>
                                <div class="flip-card-backt">
                                    <p>With over 30 years of experience, our teams have
                                        established a deep-rooted bond and excellent working relationship with all
                                        leading retailers and
                                        end customers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
                    <div class="card text-white whychooseusimg">
                        <div class="flip-cards">
                            <div class="flip-card-inners">
                                <div class="flip-card-fronts">
                                    <p>We’ve strong Infrastructure</p>
                                </div>
                                <div class="flip-card-backs">
                                    <p>Our expansive logistics infrastructure ensures that our supply
                                        chain works clockwise and efficiently making timely deliveries for our rapidly
                                        growing network of
                                        retail partners.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
                    <div class="card text-white whychooseusimg">
                        <div class="flip-cardf">
                            <div class="flip-card-innerf">
                                <div class="flip-card-frontf">
                                    <p>We’re financially stable</p>
                                </div>
                                <div class="flip-card-backf">
                                    <p>BCPL, as an integral part of the Bahety Group of Companies, is
                                        independently funded. Therefore, have the financial muscle to invest in creating
                                        brand visibility
                                        and awareness based on merit and global demand.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid clientbg pt-3 pb-3">
            <p class="text-center clienthead">Client Reviews</p>
            <div class="container">
                <div class="owl-carousel owl-theme slidercard3">
                    <div class="item">
                        <div class="m-3">
                            <div class="card cardbg">
                                <img src="pictures/Rectangle 51.png" class="card-img-top ps-5 pe-5" alt="..." />
                                <div class="card-body">
                                    <p class="card-text clienttext">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                        aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                        sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                        ipsum dolor sit
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="m-3">
                            <div class="card cardbg">
                                <img src="pictures/Rectangle 52.png" class="card-img-top ps-5 pe-5" alt="..." />
                                <div class="card-body">
                                    <p class="card-text clienttext">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                        aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                        sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                        ipsum dolor sit
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="m-3">
                            <div class="card cardbg">
                                <img src="pictures/Rectangle 53.png" class="card-img-top ps-5 pe-5" alt="..." />
                                <div class="card-body">
                                    <p class="card-text clienttext">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                        aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                        sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                        ipsum dolor sit
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="m-3">
                            <div class="card cardbg">
                                <img src="pictures/Rectangle 51.png" class="card-img-top ps-5 pe-5" alt="..." />
                                <div class="card-body">
                                    <p class="card-text clienttext">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                        aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                        sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                        ipsum dolor sit
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="m-3">
                            <div class="card cardbg">
                                <img src="pictures/Rectangle 52.png" class="card-img-top ps-5 pe-5" alt="..." />
                                <div class="card-body">
                                    <p class="card-text clienttext">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                        aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                        sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                        ipsum dolor sit
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="m-3">
                            <div class="card cardbg">
                                <img src="pictures/Rectangle 53.png" class="card-img-top ps-5 pe-5" alt="..." />
                                <div class="card-body">
                                    <p class="card-text clienttext">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                        aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                        sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                        ipsum dolor sit
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <p class="text-center segmenthead">Product Segments</p>
            <div class="row ms-3 me-3">
                <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                    <div class="card text-white segmentimg">
                        <div>
                            <figure>
                                <img src="pictures/fragrances.png" class="card-img" alt="..." />
                            </figure>
                            <div class="card-img-overlay">
                                <p class="card-text segmenttext">Fragrances</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                    <div class="card text-white segmentimg">
                        <figure>
                            <img src="pictures/beauty-products.png" class="card-img" alt="..." />
                        </figure>
                        <div class="card-img-overlay">
                            <p class="card-text segmenttext">Beauty Products</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                    <div class="card text-white segmentimg">
                        <figure>
                            <img src="pictures/cosmetics.png" class="card-img" alt="..." />
                        </figure>
                        <div class="card-img-overlay">
                            <p class="card-text segmenttext">Cosmetics</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                    <div class="card text-white segmentimg">
                        <figure>
                            <img src="pictures/home.png" class="card-img" alt="..." />
                        </figure>
                        <div class="card-img-overlay">
                            <p class="card-text segmenttext">Home Fragrances</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="container">

            </div>
        <div class="container mt-5 mb-5">
            <p class="text-center instahead mb-4">Insta Updates</p>
            <div class="embedsocial-hashtag" data-ref="ef264166c7940858786ef07bf47f8a5f54472371"> <a class="feed-powered-by-es feed-powered-by-es-feed-new" href="https://embedsocial.com/social-media-aggregator/" target="_blank" title="Widget by EmbedSocial"> Widget by EmbedSocial<span>→</span> </a> </div> <script> (function(d, s, id) { var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/cdn/ht.js"; d.getElementsByTagName("head")[0].appendChild(js); }(document, "script", "EmbedSocialHashtagScript")); </script>





        </div>

        <!-- footer -->

        <x-footer />

        <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>

<script>
  function loadGoogleTranslate() {
    new google.translate.TranslateElement("google_element");
  }
</script>

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://use.fontawesome.com/abfdd2ac1e.js"></script>
        <script>
        const nextIcon = '<img class="iconnext" src="./pictures/right.svg">';
        const prevIcon = '<img class="iconprev" src="./pictures/left.svg">';

        $(".slidercard").owlCarousel({
            loop: true,
            margin: 10,
            dots: true,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            navText: [prevIcon, nextIcon],

            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });
        </script>

        <script>
        $(".slidercard2").owlCarousel({
            loop: true,
            margin: 10,
            dots: false,
            nav: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            navText: [prevIcon, nextIcon],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 4,
                },
            },
        });
        </script>

        <script>
        $(".slidercard3").owlCarousel({
            loop: true,
            margin: 10,
            dots: true,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            navText: [prevIcon, nextIcon],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });
        </script>

        <script>
        $('#audio-control').click(function() {
            if ($("#myVideo").prop('muted')) {
                $("#myVideo").prop('muted', false);

                // or toggle class, style it with a volume icon sprite, change background-position
            } else {
                $("#myVideo").prop('muted', true);

            }
        });
        </script>
        <script>
        function myFunction(x) {
            x.classList.toggle("fa-volume-up");
        }
        </script>
        <script>
        var video = document.querySelector('.video-js'),
            volume = document.querySelector('#volume');
        console.log(volume);

        volume.addEventListener('change', function(e) {
            video.volume = e.currentTarget.value / 100;
        });


        const muted = volume === 0
        // iOS workaround when volume is 0
        this.sound.muted = muted
        this.sound.volume = volume
        </script>

        <!-- -------------------------------------- -->

        <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
        <!-- <script type="text/javascript" src="{{URL::asset('assets/js/main.js')}}"></script> -->

        <!-- <script type="text/javascript">
      var nav = document.querySelector("nav");

      window.addEventListener("scroll", function () {
        if (window.pageYOffset > 100) {
          nav.classList.add("bg-dark", "sticky");
        } else {
          nav.classList.remove("bg-dark", "sticky");
        }
      });
    </script> -->

        <!-- ------------------------------------------- -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="/js/jquery.counterup.min.js"></script>
        <script src="/js/main.js"></script>


    </body>

</html>
