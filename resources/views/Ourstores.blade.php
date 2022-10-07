<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Our Stores</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 

  <link rel="stylesheet" href="{{url('css/style.css')}}" />
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
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
          <li><a href="{{route('Brands')}}" class="leftmenu">BRANDS</a></li>
          <li>
            <a href="{{route('Maisondeperfums')}}" class="leftmenu">MAISON DES PARFUMS</a>
          </li>
          <li>
            <a href="{{route('Index')}}" class="centermenu"><img src="pictures/logoblack.png" alt="" /></a>
          </li>
          <li><a href="{{route('Ourstores')}}" class="rightmenu active">OUR STORES</a></li>
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

  <img src="pictures/our-store-01.png" width="100%" alt="" />

  <!-- <div class="container mt-5 mb-5">
    <p class="retailmainhead">Maison Des Parfums</p>
  </div> -->
  <div class="container-fluid">
    <div class="row m-5">
      <div class="left">
        <img src="pictures/Maison-De-Parfums.jpg" class="retailimg-1" alt="" />
      </div>
      <div class="right">
        <p class="retailtext" style="text-align: justify;">
          <strong> Smell good, feel good </strong>
          <br><br>

          Maison Des Parfums is a luxury retail boutique that houses a collection of ﬁne artisanal niche fragrances that
          are curated from around the world.<br><br>

          Being the ﬁrst of its kind concept in India, Maison Des Parfums caters to the discerning Indian consumer for
          niche and luxury perfumery brands. The boutique provides a unique shopping experience with bespoke in store
          service and attention to detail to engage each & every customer.
          <br><br>
          Bringing together top quality niche brands under one roof comprising of the most exciting names in the world
          of artisanal perfumery including: Acqua di Parma, Amouage, Amouroud, Atelier Des Ors, Blend Oud, BOIS 1920,
          Bond No. 9, Etat Libre D' Orange, ETRO, Franck Boclet, Goutal Paris, Houbigant, Juliette Has A Gun, Lalique,
          Les Parfum Des Rosine, Memo Paris, Moresque, Nasomatto, Nishane, Olfactive Studio, One of Those, Orto Parisi,
          Perris Monte Carlo, Rancé 1795 and Xerjoff as well as many other well-known brands.
        </p>
        <div class="row maisoncontent ">
          <div class="main">
            <div class="child">
              <p class="maisontext"> To know more please connect to our website :
              </p>
            </div>
            <div class="child">
              <a href="https://mdpindia.com/" target="_blank"> <button class="maisonbtn">Maison des parfums</button>
              </a>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
  <!-- <div class="container mt-5 mb-5">
    <p class="retailmainhead">Beaute Luxe</p>
  </div> -->
  <div class="container-fluid pt-2">
    <div class="row m-5">
      <div class="left">
        <img src="pictures/beaute luxe.svg" class="retailimg-2" alt="" />
      </div>
      <div class="right">
        <p class="retailtext" style="text-align: justify;">
          <strong> Making Luxury Accessible </strong>
          <br><br>
          Beaute Luxe are luxury retail stores that house BCPL’s Luxury and Niche
          brands reaching out to the most discerning customers at their desirable locations.
          <br><br>
          The main aim of
          Beaute Luxe is to bring all luxury brands in the categories of Beauty, Fragrance, Fashion and Lifestyle
          Accessories under one umbrella. With the aim to make luxury accessible to the Indian customer, we
          are available in multiple stores all over the subcontinent.
        </p>
        <!-- <div class="row maisoncontent ">
          <div class="main">
            <div class="child">
              <p class="maisontext"> To know more please connect to our website :
              </p>
            </div>
            <div class="child">
                <button type="button" class="maisonbtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 Beaute Luxe
                </button>
                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <div class="modal-body">
                        <strong> Website under construction</strong>
                      </div>

                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>

        </div> -->

      </div>
    </div>
  </div>
  <!-- <div class="container mt-5 mb-5">
    <p class="retailmainhead">Beauty Scentiments</p>
  </div> -->
  <div class="container-fluid pt-3">
    <div class="row m-5">
      <div class="left">
        <img src="pictures/Beauty-Scentiments.svg" class="retailimg-3" alt="" />
      </div>
      <div class="right">
        <p class="retailtext" style="text-align: justify;">
          <strong> Bringing You Everything Beautiful </strong>
          <br><br>
          Beauty Scentiments are retail stores that cater to aspirational
          customers with BCPL’s lifestyle and prestige brands.
          <br><br>
          With a vision to reach out to the burgeoning
          middle class in multi-cities, it has re-defined the conventional shopping experience with a very
          comfortable customer-friendly approach
        </p>
        <div class="row maisoncontent ">
          <div class="main">
            <div class="child">
              <p class="maisontext"> To know more please connect to our website :
              </p>
            </div>
            <div class="child">
              <a href="https://beautyscentiments.com/" target="_blank"> <button class="maisonbtn">Beauty Scentiments</button>
              </a>
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

</body>

</html>
