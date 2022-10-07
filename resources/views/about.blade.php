<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>About us</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 

  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{url('css/style.css')}}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

</head>

<body>

  <!-- Header section -->

  <div class="container-fluid bg-white text-black headercontainer">
    <div class="firstnav mt-3 pe-5 text-center">
      <nav class="allnav">
        <ul class="nav-links">
          <li><a href="{{route('about')}}" class="leftmenu active">ABOUT US</a></li>
          <li><a href="{{route('Brands')}}" class="leftmenu ">BRANDS</a></li>
          <li>
            <a href="{{route('Maisondeperfums')}}" class="leftmenu">MAISON DES PARFUMS</a>
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
        <div class="float-end language-class">
                                    <!-- Button trigger modal -->

    <img src="/pictures/internet-black.png" alt="" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width:25px" >

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
      <nav class="navbar navbar-expand-xm navbar-light p-md-3">
        <div class="container">
          <a class="navbar-brand" class="centermenu" href="{{route('Index')}}"><img src="pictures/logoblack.png" width="40%" alt="" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav d-flex flex-column text-start mt-3">
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('about')}}">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('Brands')}}">BRANDS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('Maisondeperfums')}}">MAISON DES PARFUMS</a>
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


  <img src="pictures/about us-01.png" width="100%" alt="">



  <div class="container mt-5">
    <p class="leadingbrands">A LEADING DISTRIBUTOR OF GLOBAL BRANDS</p>
    <p style="text-align: justify;">BCPL - BEAUTY CONCEPTS, established in the year 1998 is a member of the Bahety Group of Companies. With a brand
      portfolio of over 100+ brands, BCPL is the preferred partner for International brands foraying the emerging and
      challenging Indian Market.<br><br>
      After being in business for across 4 decades, our team has established excellent bond with all the leading perfume
      and cosmetic retailers, providing our clients, brands and products with over 200 of the highest quality doors
      across the country. With growing accessibility and reach, we aim to bridge the gap between the brands and their
      target market.</p>
  </div>

  <div class="container-fluid mt-5 aboutustabs">
    <div class="container pt-4 pb-3">
      <p class="bcplbrands">BCPL Brands</p>
    </div>



    <section id="tabs" class="text-center">
      <nav>
        <div class="nav nav-tabs " id="nav-tab" role="tablist">
          <button class="nav-link " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
            ALL
          </button>
          <button class="nav-link active" id="nav-second-tab" data-bs-toggle="tab" data-bs-target="#nav-second" type="button" role="tab" aria-controls="nav-second" aria-selected="false">
            Luxury
          </button>
          <button class="nav-link" id="nav-third-tab" data-bs-toggle="tab" data-bs-target="#nav-third" type="button" role="tab" aria-controls="nav-third" aria-selected="false">
            Niche
          </button>
          <button class="nav-link" id="nav-fourth-tab" data-bs-toggle="tab" data-bs-target="#nav-fourth" type="button" role="tab" aria-controls="nav-fourth" aria-selected="false">
            Prestige
          </button>
          <button class="nav-link" id="nav-fifth-tab" data-bs-toggle="tab" data-bs-target="#nav-fifth" type="button" role="tab" aria-controls="nav-fifth" aria-selected="false">
            Popular
          </button>
          <button class="nav-link" id="nav-sixth-tab" data-bs-toggle="tab" data-bs-target="#nav-sixth" type="button" role="tab" aria-controls="nav-sixth" aria-selected="false">
            Fashion
          </button>
          <button class="nav-link" id="nav-seventh-tab" data-bs-toggle="tab" data-bs-target="#nav-seventh" type="button" role="tab" aria-controls="nav-seventh" aria-selected="false">
            Lifestyle
          </button>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        
        
        
        
        <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="container mt-3 pb-3">

            <div class="owl-carousel owl-theme slidercard8">
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Armaf.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/Armaf.png" class="mb-4" width="20%" alt="" />

              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Aspen.jpg" width="100%" alt="" />
                  </figure>

                </div>


                <img src="pictures/Fashion/Logo/Aspen.png" class="mb-4" width="60%" alt="" />

              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Betty-barclay.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/Betty-Barclay.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Essence.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/essence.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Mades.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/Mades.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/S-oliver.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/s.Oliver.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Alyssa-ashley.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/ALYSSA-ASHLEY.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Deborah-Milano.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Deborah.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Jeanne Arthes.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Jeanne-Arthes.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Loccitane.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Loccitane.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Maison-Berger.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Maison-Berger.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Samoural.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Samoural.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Yankee-Candles.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Yankee-Candles.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Bvlgari.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Bvlgari.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Chopard.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Chopard.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Ermenegildo-zegna.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Ermenegildo-Zegna.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Guerlain.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Guerlain.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Hermes.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Hermes.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Lalique.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Lalique.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Salvatore-ferragamo.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Salvatore-Ferragamo.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/4711.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/4711.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Aigner.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Aigner.png" class="mb-4" width="60%" alt="" />
              </div>
              
              
              
              
              
              
              
              <div class="item">
                <div class="card text-white brand-tab-img">
                  <figure>
                    <img src="pictures/Niche/Evelom.jpg" width="100%" alt="" />
                  </figure>
                </div>
                <img src="pictures/Niche/Logo/Evelom.png" class="mb-4" width="60%" alt="" />
              </div>
              
              <div class="item">
                <div class="card text-white brand-tab-img">
                  <figure>
                    <img src="pictures/Niche/Margys.jpg" width="100%" alt="" />
                  </figure>
                </div>
                <img src="pictures/Niche/Logo/Margys.png" class="mb-4" width="60%" alt="" />
              </div>
              
              
              <div class="item">
                <div class="card text-white brand-tab-img">
                  <figure>
                    <img src="pictures/Niche/MZSkin.jpg" width="100%" alt="" />
                  </figure>
                </div>
                <img src="pictures/Niche/Logo/MZSkin.png" class="mb-4" width="60%" alt="" />
              </div>
              
              <div class="item">
                <div class="card text-white brand-tab-img">
                  <figure>
                    <img src="pictures/Niche/Orlane.jpg" width="100%" alt="" />
                  </figure>
                </div>
                <img src="pictures/Niche/Logo/Orlane.png" class="mb-4" width="60%" alt="" />
              </div>
              
              <div class="item">
                <div class="card text-white brand-tab-img">
                  <figure>
                    <img src="pictures/Niche/PhilipB.jpg" width="100%" alt="" />
                  </figure>
                </div>
                <img src="pictures/Niche/Logo/PhilipB.png" class="mb-4" width="60%" alt="" />
              </div>
              
              <div class="item">
                <div class="card text-white brand-tab-img">
                  <figure>
                    <img src="pictures/Niche/Sachajuan.jpg" width="100%" alt="" />
                  </figure>
                </div>
                <img src="pictures/Niche/Logo/Sachajuan.png" class="mb-4" width="60%" alt="" />
              </div>
              
              
              <div class="item">
                <div class="card text-white brand-tab-img">
                  <figure>
                    <img src="pictures/Niche/Swissperfection.jpg" width="100%" alt="" />
                  </figure>
                </div>
                <img src="pictures/Niche/Logo/Swissperfection.png" class="mb-4" width="60%" alt="" />
              </div>
              
              
              <div class="item">
                <div class="card text-white brand-tab-img">
                  <figure>
                    <img src="pictures/Niche/Verso.jpg" width="100%" alt="" />
                  </figure>
                </div>
                <img src="pictures/Niche/Logo/Verso.png" class="mb-4" width="60%" alt="" />
              </div>
              
              
              <div class="item">
                <div class="card text-white brand-tab-img">
                  <figure>
                    <img src="pictures/Niche/Caviar.jpg" width="100%" alt="" />
                  </figure>
                </div>
                <img src="pictures/Niche/Logo/Caviar.png" class="mb-4" width="60%" alt="" />
              </div>
              
              
              
              
              
              
              
              
              
              
              
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Bentley.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Bentley.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Cristiano-Ronaldo.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/CR7.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/David-beckham.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/David_Beckham.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Dorall collection.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Dorall-collection.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Franck-olivier.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Franck-olivier.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Guess.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Guess.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Hawkins-_-brimble.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Hawkins-_-brimble.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Jacques-Bogart.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Jacques-Bogart.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Jaguar.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Jaguar.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Mercedes-benz.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Mercedes-benz.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Nautica.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Nautica.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Playboy.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Playboy.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Police.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Police.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Replay.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Replay.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Tabac.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Tabac.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Victronix.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Victronix.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Aramis.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Aramis.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Brioni.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Brioni.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Clinique.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Clinique.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/DKNY.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/DKNY.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Estee-lauder.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Estee-Lauder.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/James-bond-007.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/james-bond-007.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Lolita-lempika.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Lolita-lempicka.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Luxie.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Luxie.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Michael-kors.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Michael-Kors.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Porsche.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Porsche.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Tommy-hilfiger.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Tommy-Hilfiger.png" class="mb-4" width="60%" alt="" />
              </div>

            </div>
          </div>
        </div>
        
        
        
        <!-- Luxury Image Code Starts here -->
        
        
        <div class="tab-pane fade show active" id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab">



          <div class="container mt-3 pb-3">

            <div class="owl-carousel owl-theme slidercard8">
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Bvlgari.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Bvlgari.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Chopard.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Chopard.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Ermenegildo-zegna.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Ermenegildo-Zegna.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Guerlain.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Guerlain.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Hermes.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Hermes.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Lalique.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Lalique.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Luxury/Salvatore-ferragamo.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Luxury/Logo/Salvatore-Ferragamo.png" class="mb-4" width="60%" alt="" />
              </div>
              
            </div>
          </div>
        </div>
        
        <!-- Luxury Image Code Ends here -->
        
        
        
        
        <!-- Niche Image Code Starts here -->
        <div class="tab-pane fade show active" id="nav-third" role="tabpanel" aria-labelledby="nav-third-tab">

          <div class="container mt-3 pb-3">

            <div class="owl-carousel owl-theme slidercard8">
              
              <div class="item">
                <div class="card text-white brand-tab-img">
                  <figure>
                    <img src="pictures/Niche/Evelom.jpg" width="100%" alt="" />
                  </figure>
                </div>
                <img src="pictures/Niche/Logo/Evelom.png" class="mb-4" width="60%" alt="" />
              </div>
              
              <div class="item">
                <div class="card text-white brand-tab-img">
                  <figure>
                    <img src="pictures/Niche/Margys.jpg" width="100%" alt="" />
                  </figure>
                </div>
                <img src="pictures/Niche/Logo/Margys.png" class="mb-4" width="60%" alt="" />
              </div>
              
              
              <div class="item">
                <div class="card text-white brand-tab-img">
                  <figure>
                    <img src="pictures/Niche/MZSkin.jpg" width="100%" alt="" />
                  </figure>
                </div>
                <img src="pictures/Niche/Logo/MZSkin.png" class="mb-4" width="60%" alt="" />
              </div>
              
              <div class="item">
                <div class="card text-white brand-tab-img">
                  <figure>
                    <img src="pictures/Niche/Orlane.jpg" width="100%" alt="" />
                  </figure>
                </div>
                <img src="pictures/Niche/Logo/Orlane.png" class="mb-4" width="60%" alt="" />
              </div>
              
              <div class="item">
                <div class="card text-white brand-tab-img">
                  <figure>
                    <img src="pictures/Niche/PhilipB.jpg" width="100%" alt="" />
                  </figure>
                </div>
                <img src="pictures/Niche/Logo/PhilipB.png" class="mb-4" width="60%" alt="" />
              </div>
              
              <div class="item">
                <div class="card text-white brand-tab-img">
                  <figure>
                    <img src="pictures/Niche/Sachajuan.jpg" width="100%" alt="" />
                  </figure>
                </div>
                <img src="pictures/Niche/Logo/Sachajuan.png" class="mb-4" width="60%" alt="" />
              </div>
              
              
              <div class="item">
                <div class="card text-white brand-tab-img">
                  <figure>
                    <img src="pictures/Niche/Swissperfection.jpg" width="100%" alt="" />
                  </figure>
                </div>
                <img src="pictures/Niche/Logo/Swissperfection.png" class="mb-4" width="60%" alt="" />
              </div>
              
              
              <div class="item">
                <div class="card text-white brand-tab-img">
                  <figure>
                    <img src="pictures/Niche/Verso.jpg" width="100%" alt="" />
                  </figure>
                </div>
                <img src="pictures/Niche/Logo/Verso.png" class="mb-4" width="60%" alt="" />
              </div>
              
              
              <div class="item">
                <div class="card text-white brand-tab-img">
                  <figure>
                    <img src="pictures/Niche/Caviar.jpg" width="100%" alt="" />
                  </figure>
                </div>
                <img src="pictures/Niche/Logo/Caviar.png" class="mb-4" width="60%" alt="" />
              </div>
              
              
              
            </div>
          </div>
        </div>
        
        <!-- Niche Image Code Starts here -->
        
        
        
        
        
        
        
        <!-- Prestige Image Code Starts here -->

        <div class="tab-pane fade" id="nav-fourth" role="tabpanel" aria-labelledby="nav-fourth-tab">
          <div class="container mt-3 pb-3">

            <div class="owl-carousel owl-theme slidercard8">
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Aramis.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Aramis.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Brioni.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Brioni.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Clinique.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Clinique.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/DKNY.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/DKNY.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Estee-lauder.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Estee-Lauder.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/James-bond-007.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/james-bond-007.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Lolita-lempika.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Lolita-lempicka.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Luxie.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Luxie.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Michael-kors.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Michael-Kors.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Porsche.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Porsche.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Prestige/Tommy-hilfiger.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Prestige/Logo/Tommy-Hilfiger.png" class="mb-4" width="60%" alt="" />
              </div>
            </div>
          </div>
        </div>
       
       <!-- Prestige Image Code Ends here -->
       
       
       
       
       <!-- Popular Image Code Starts here -->
       
       <div class="tab-pane fade" id="nav-fifth" role="tabpanel" aria-labelledby="nav-fifth-tab">
          <div class="container mt-3 pb-3">

            <div class="owl-carousel owl-theme slidercard8">
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/4711.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/4711.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Aigner.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Aigner.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Bentley.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Bentley.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Cristiano-Ronaldo.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/CR7.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/David-beckham.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/David_Beckham.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Dorall collection.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Dorall-collection.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Franck-olivier.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Franck-olivier.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Guess.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Guess.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Hawkins-_-brimble.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Hawkins-_-brimble.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Jacques-Bogart.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Jacques-Bogart.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Jaguar.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Jaguar.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Mercedes-benz.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Mercedes-benz.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Nautica.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Nautica.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Playboy.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Playboy.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Police.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Police.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Replay.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Replay.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Tabac.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Tabac.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Popular/Victronix.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Popular/Logo/Victronix.png" class="mb-4" width="60%" alt="" />
              </div>

            </div>
          </div>
        </div>

    <!-- Popular Image Code Ends here -->
       
       
       
       
       
       
     <!-- Fashion Image Code Starts here -->  
       
       
       <div class="tab-pane fade" id="nav-sixth" role="tabpanel" aria-labelledby="nav-sixth-tab">
          <div class="container mt-3 pb-3">

            <div class="owl-carousel owl-theme slidercard8">
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Armaf.jpg" width="100%" alt="" />
                  </figure>

                </div>
                <img src="pictures/Fashion/Logo/Armaf.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Aspen.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/Aspen.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Betty-barclay.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/Betty-Barclay.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Essence.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/essence.png" class="mb-4" width="60%" alt="" />
              </div>

              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/S-oliver.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/s.Oliver.png" class="mb-4" width="60%" alt="" />
              </div>

              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Mades.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/Mades.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Fashion/Betty-barclay.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Fashion/Logo/Betty-Barclay.png" class="mb-4" width="60%" alt="" />
              </div>
            </div>
          </div>
        </div>

    <!-- Fashion Image Code Ends here -->

        
        
        
        
        
        
     <!-- Lifestyle Image Code Starts here -->   
        
        <div class="tab-pane fade" id="nav-seventh" role="tabpanel" aria-labelledby="nav-seventh-tab">
          <div class="container mt-3 pb-3">

            <div class="owl-carousel owl-theme slidercard8">
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Alyssa-ashley.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/ALYSSA-ASHLEY.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Deborah-Milano.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Deborah.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Jeanne Arthes.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Jeanne-Arthes.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Loccitane.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Loccitane.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Maison-Berger.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Maison-Berger.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Samoural.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Samoural.png" class="mb-4" width="60%" alt="" />
              </div>
              <div class="item">
                <div class="card text-white brand-tab-img">

                  <figure>
                    <img src="pictures/Lifestyle/Yankee-Candles.jpg" width="100%" alt="" />
                  </figure>

                </div>

                <img src="pictures/Lifestyle/Logo/Yankee-Candles.png" class="mb-4" width="60%" alt="" />
              </div>

            </div>
          </div>
        </div>
        
        <!-- Lifestyle Image Code Starts here -->
        

    </section>

  </div>


  <!-- <div class="container mt-5 mb-5">
    <p class="credentialshead pb-3">Credentials</p>
    <ul>
      <li>A brand portfolio of over 100 + leading international brands.</li><br>
      <li>An established player in the lifestyle accessories segment with fragrances, cosmetics, beauty products &
        luggage </li><br>
      <li>Preferred partner with all the leading large format departmental stores
        Distribution network of over 3000 points of sales across the brands & categories</li><br>
      <li>Business offices in all leading cities of India Mumbai, New Delhi, Chennai, Calcutta, Bangalore & Hyderabad,
        Ahmadabad, Jaipur, Pune with full marketing & logistics infrastructure.</li><br>
      <li>Dedicated warehouses in leading cities of India with a Central Warehouse in Kolkata to follow the hub & spoke
        model of logistics.</li><br>
      <li>A Management team well versed with the distribution & retail business with over 100 years of cumulative
        experience </li><br>
      <li>Team strength of over 800+ employees.</li><br>
    </ul>
  </div> -->


  <div class="container-fluid mvsection">
    <div class="container pt-5 pb-5">
      <div class="row ">
        <div class="col-md-6  pe-5 pt-2">
          <h1>Vision</h1>
          <p style="text-align: justify;">Enhancing Innovation and Creativity
            <br><br>
            BCPL aims to upload the spirit of innovation – not just in
            terms of product, but also in retail methods and experience creation.
            <br><br>
            With our unfettered passion,
            innovation and impactful marketing in the lifestyle space, we aim to lead India into a new story in
            Beauty, Fragrances, Fashion and Lifestyle accessories.
          </p>
        </div>
        <div class="col-md-6"><img src="{{url('pictures/about/vision.jpg')}}" class="img-vi" alt=""></div>
      </div>
      <div class="row mt-5">
        <div class="col-md-6" id="midiv"><img src="{{url('pictures/about/mission.jpg')}}" class="img-mi" alt=""></div>
        <div class="col-md-6" id="mtdiv">
          <h1>Mission</h1>
          <p style="text-align: justify;">Becoming India’s Leading Distribution House for Lifestyle & Fashion Accessories
            <br><br>
            Our mission
            is to partner with select global companies that aim to build their brand and distribution network in India
            and deliver extraordinary fragrance and beauty products to consumers in India. We believe in long
            term association and creation of value through mutual respect and understanding, trust and
            transparency and aim to be the most reliant partner to our principles, the able brand custodian and a
            supportive associate to our channel and customers towards the cause of the business.
            <br><br>
            As an
            organisation, and as individuals, we value honesty, integrity, empowerment and openness. By
            consistently aiming for breakthrough excellence in creation, design and experience, we believe we will
            stay close to our consumers and communities.
          </p>
        </div>
      </div>
      <div class="row mt-5 ">
        <div class="col-md-6  pe-5 pt-2">
          <h1 class="csr">Corporate Social Responsibility</h1>
          <p style="text-align: justify;">
          We are associated with mulitple NGOs, where we train the unprivileged with skills and help them start their career with us. 
          We are also reducing plastic in every step of 
          supply chain for a sustainable environment.
          </p>
        </div>
        <div class="col-md-6"><img src="{{url('pictures/about/hands-reaching-out-help.jpg')}}" class="img-vi" alt=""></div>
      </div>
    </div>
  </div>

  <div class="container mt-5 mb-5 strengthsection ">



    <div class="container  ">
      <p class="strengthhead">Strengths</p>
      <div class="container mt-5 ">
        <div class="row text-center">
          <div class="col-md-6  mt-3 ">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <p>Excellent Retail Relationships In Selective Distribution</p>
                </div>
                <div class="flip-card-back">

                  <p>With over 30 year of business relationships with our customer, our team has established excellent
                    bond & working equation with all the leading perfume and cosmetic retailers, providing our clients
                    brands and products with over 200 of the highest quality doors across the country.</p>

                </div>
              </div>
              <span class="circle1"></span>

            </div>



          </div>
          <div class="col-md-6 mt-3">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <p>Logistical Advantage</p>
                </div>
                <div class="flip-card-back">

                  <p>Logistics infrastructure ensures that our supply chain can support and fulfill the needs of the
                    rapidly growing network of our retail partners. Warehousing & distribution system are designed to
                    expand in tandem with retailer’s growth as this will ensure regular, on time delivery to all retail
                    formats across India.</p>

                </div>
              </div>
              <span class="circle2"></span>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-md-6 mt-3">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <p>Financial Stability</p>
                </div>
                <div class="flip-card-back">

                  <p>Self funded & Debt Free, BCPL as part of the Bahety Group of Companies, is an independently owned
                    company. Our financial strength makes lends us the advantage of not being dependent on any brand’s
                    financial resources and thus market each brand purely based on its own merits.</p>

                </div>
              </div>
              <span class="circle3"></span>
            </div>
          </div>
          <div class="col-md-6 mt-3">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <p>Market Know- How</p>
                </div>
                <div class="flip-card-back">

                  <p>A team of experienced, professional talents equipped with in-depth knowledge of the Indian market
                    to provide out-of-the-box marketing ideas as well as manage complicated bureaucratic regulations of
                    India</p>

                </div>
              </div>
              <span class="circle4"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>



  <!-- footer -->

  <x-footer/>

  <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>

<script>
  function loadGoogleTranslate() {
    new google.translate.TranslateElement("google_element");
  }
</script>


  <!-- ****************************************************** -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://use.fontawesome.com/abfdd2ac1e.js"></script>
  <script>
    const nextIcon = '<img class="iconnext" src="./pictures/right.svg">';
    const prevIcon = '<img class="iconprev" src="./pictures/left.svg">';

    $(".slidercard8").owlCarousel({
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
          items: 2,
        },
        600: {
          items: 3,
        },
        1000: {
          items: 6,
        },
      },
    });
  </script>





</body>

</html>
