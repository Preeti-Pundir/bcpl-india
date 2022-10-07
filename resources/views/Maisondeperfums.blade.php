<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Maison Des Perfums</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 

  <link rel="stylesheet" href="{{url('css/style.css')}}" />
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <a href="{{route('Maisondeperfums')}}" class="leftmenu active">MAISON DES PARFUMS</a>
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
          <a class="navbar-brand" class="centermenu" href="{{route('Index')}}" ><img src="pictures/logoblack.png" width="40%"
              alt="" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link text-black"  href="{{route('Maisondeperfums')}}">MAISON DES PARFUMS</a>
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

  <img src="pictures/mdp-01.png" width="100%" alt="" />

<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <img src="pictures/maisonperfumes.svg" width="100%" alt="" />
    </div>
    <div class="col-md-8 mt-5">
      <p style="text-align: justify;">
        Maison des Parfums (MDP), launched in 2017 is a luxury retail
        boutique concept that houses a collection of fine artisanal luxury
        fragrances that are curated from around the world.<br /><br />
        Maison des Parfums, a venture of Beauty Concepts, is the first of
        its kind concept in India, it caters to the discerning Indian
        consumer for niche & luxury perfumery brands. <br /><br />The
        boutique provides a unique shopping experience with bespoke instore
        service and attention to details to engage each & every customer.
        The flagship Maison des Parfums boutique was inaugurated in Select
        Citywalk Mall, New Delhi closely followed by the second presence at
        Palladium Mall, Mumbai. Our third store which is in Jio World Drive Mall, Mumbai.<br /><br />
        Maison des Parfums has curated a wide range of exclusive artisanal
        fragrances that reflect top quality with creative excellence
        including those of Memo, Amouage, NASOMATTO, Juliette has a gun,
        Jean Patou, Xerjoff, Bulgari Le Gemme, The Different Company, Amouroud,
        Houbigant, Etat Libre D’Orange, Rance, Lalique Premier Noir, Olfactive
        Studio, Rance, Franck Boclet, One of Those and other well-known brand
        names to come.
      </p>
      <p style="text-align: justify;">
      The MDP Concept Stores are a new beginning for BCPL to cater to
      the discerning individual & take luxury retailing for fragrances to
      new levels of desirability, service & engagement.
    </p>
    
    </div>
  </div>
 <!-- <div class="row">
    <p style="text-align: justify;">
      The MDP Concept Stores are a new beginning for BCPL to cater to
      the discerning individual & take luxury retailing for fragrances to
      new levels of desirability, service & engagement.
    </p>
  </div>-->
</div>
<div class="container mt-5 mb-5">
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
