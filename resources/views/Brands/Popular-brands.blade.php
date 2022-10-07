<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Brands-Prestige</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript" src="js/main.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- Header section -->

  <div class="container-fluid bg-white text-black headercontainer">
    <div class="firstnav mt-3 pe-5 text-center">
      <nav class="allnav">
        <ul class="nav-links">
          <li><a href="{{route('about')}}" class="leftmenu">ABOUT US</a></li>
          <li><a href="{{route('Brands')}}" class="leftmenu active">BRANDS</a></li>
          <li>
            <a href="{{route('Maisondeperfums')}}" class="leftmenu">MAISON DE PARFUMS</a>
          </li>
          <li>
            <a href="{{route('Index')}}" class="centermenu"><img src="pictures/logoblack.png" alt="" /></a>
          </li>
          <li><a href="{{route('Ourstores')}}" class="rightmenu">OUR STORES</a></li>
          <li>
            <a href="{{ route('createForm') }}" class="rightmenu">CONTACT US</a>
          </li>
          <li>
            <a href="{{route('Storelocator')}}" class="rightmenu">STORE LOCATOR</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="secondnav">
      <nav class="navbar navbar-expand-xm navbar-light p-md-3">
        <div class="container">
          <a class="navbar-brand" class="centermenu" href="{{route('Index')}}"><img src="pictures/logoblack.png" width="40%" alt="" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav mt-3">
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('about')}}">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('Brands')}}">BRANDS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('Maisondeperfums')}}">MAISON DE PARFUMS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('Ourstores')}}">OUR STORES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('createForm')}}">CONTACT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('Storelocator')}}">STORE LOCATOR</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>


  <x-brandbanner/>

  <div class="container-fluid text-center mt-5">
    <section id="tabs">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false">
            ALL
          </button>
          <button class="nav-link " id="nav-luxury-tab" data-bs-toggle="tab" data-bs-target="#nav-luxury" type="button" role="tab" aria-controls="nav-luxury" aria-selected="true">
            Luxury
          </button>
          <button class="nav-link " id="nav-prestige-tab" data-bs-toggle="tab" data-bs-target="#nav-prestige" type="button" role="tab" aria-controls="nav-prestige" aria-selected="false">
            Prestige
          </button>
          <button class="nav-link active" id="nav-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-popular" type="button" role="tab" aria-controls="nav-popular" aria-selected="false">
            Popular
          </button>
          <button class="nav-link" id="nav-fashion-tab" data-bs-toggle="tab" data-bs-target="#nav-fashion" type="button" role="tab" aria-controls="nav-fashion" aria-selected="false">
            Fashion
          </button>
          <button class="nav-link" id="nav-lifestyle-tab" data-bs-toggle="tab" data-bs-target="#nav-lifestyle" type="button" role="tab" aria-controls="nav-lifestyle" aria-selected="false">
            Lifestyle
          </button>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="container mt-4 mb-4">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Armaf.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/Armaf.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Aspen.jpg" width="100%" alt="" />
                  </figure>

                </div>


                <img src="pictures/Fashion/Logo/Aspen.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Betty-barclay.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/Betty-Barclay.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Essence.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/essence.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Mades.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/Mades.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/S-oliver.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/s.Oliver.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Alyssa-ashley.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/ALYSSA-ASHLEY.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Deborah-Milano.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Deborah.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Jeanne Arthes.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Jeanne-Arthes.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Loccitane.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Loccitane.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Maison-Berger.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Maison-Berger.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Samoural.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Samoural.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Yankee-Candles.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Yankee-Candles.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Bvlgari.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Bvlgari.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Chopard.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Chopard.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Ermenegildo-zegna.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Ermenegildo-Zegna.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Guerlain.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Guerlain.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Hermes.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Hermes.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Lalique.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Lalique.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Salvatore-ferragamo.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Salvatore-Ferragamo.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/4711.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/4711.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Aigner.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Aigner.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Bentley.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Bentley.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Cristiano-Ronaldo.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/CR7.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/David-beckham.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/David_Beckham.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Dorall collection.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Dorall-collection.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Franck-olivier.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Franck-olivier.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Guess.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Guess.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Hawkins-_-brimble.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Hawkins-_-brimble.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Jacques-Bogart.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Jacques-Bogart.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Jaguar.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Jaguar.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Mercedes-benz.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Mercedes-benz.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Nautica.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Nautica.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Playboy.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Playboy.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Police.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Police.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Replay.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Replay.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Tabac.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Tabac.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Victronix.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Victronix.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Aramis.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Aramis.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Brioni.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Brioni.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Clinique.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Clinique.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/DKNY.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/DKNY.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Estee-lauder.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Estee-Lauder.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/James-bond-007.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/james-bond-007.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Lolita-lempika.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Lolita-lempicka.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Luxie.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Luxie.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Michael-kors.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Michael-Kors.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Porsche.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Porsche.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Tommy-hilfiger.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Tommy-Hilfiger.png" class="mb-4" width="70%" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade " id="nav-luxury" role="tabpanel" aria-labelledby="nav-luxury-tab">
          <div class="container mt-4 mb-4">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Bvlgari.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Bvlgari.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Chopard.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Chopard.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Ermenegildo-zegna.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Ermenegildo-Zegna.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Guerlain.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Guerlain.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Hermes.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Hermes.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Lalique.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Lalique.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Salvatore-ferragamo.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Salvatore-Ferragamo.png" class="mb-4" width="70%" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade  " id="nav-prestige" role="tabpanel" aria-labelledby="nav-prestige-tab">
          <div class="container mt-4 mb-4">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Aramis.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Aramis.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Brioni.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Brioni.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Clinique.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Clinique.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/DKNY.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/DKNY.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Estee-lauder.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Estee-Lauder.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/James-bond-007.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/james-bond-007.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Lolita-lempika.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Lolita-lempicka.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Luxie.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Luxie.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Michael-kors.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Michael-Kors.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Porsche.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Porsche.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Tommy-hilfiger.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Tommy-Hilfiger.png" class="mb-4" width="70%" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade show active" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab">
          <div class="container mt-4 mb-4">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/4711.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/4711.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Aigner.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Aigner.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Bentley.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Bentley.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Cristiano-Ronaldo.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/CR7.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/David-beckham.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/David_Beckham.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Dorall collection.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Dorall-collection.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Franck-olivier.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Franck-olivier.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Guess.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Guess.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Hawkins-_-brimble.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Hawkins-_-brimble.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Jacques-Bogart.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Jacques-Bogart.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Jaguar.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Jaguar.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Mercedes-benz.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Mercedes-benz.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Nautica.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Nautica.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Playboy.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Playboy.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Police.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Police.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Replay.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Replay.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Tabac.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Tabac.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Victronix.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Victronix.png" class="mb-4" width="70%" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-fashion" role="tabpanel" aria-labelledby="nav-fashion-tab">
          <div class="container mt-4 mb-4">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Armaf.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/Armaf.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Aspen.jpg" width="100%" alt="" />
                  </figure>

                </div>


                <img src="pictures/Fashion/Logo/Aspen.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Betty-barclay.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/Betty-Barclay.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Essence.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/essence.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Mades.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/Mades.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/S-oliver.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/s.Oliver.png" class="mb-4" width="70%" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-lifestyle" role="tabpanel" aria-labelledby="nav-lifestyle-tab">
          <div class="container mt-4 mb-4">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Alyssa-ashley.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/ALYSSA-ASHLEY.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Deborah-Milano.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Deborah.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Jeanne Arthes.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Jeanne-Arthes.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Loccitane.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Loccitane.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Maison-Berger.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Maison-Berger.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Samoural.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Samoural.png" class="mb-4" width="70%" alt="" />
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Yankee-Candles.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Yankee-Candles.png" class="mb-4" width="70%" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- footer -->

<x-footer/>

</body>

</html>