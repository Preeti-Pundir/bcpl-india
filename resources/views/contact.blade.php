<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Contact us</title>
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
  <script type="text/javascript" src="js/main.js"></script>
  <link rel="stylesheet" href="css/style.css">

  {{-- jquery cdn link --}}
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Header section -->
<div class="error"></div>
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
          <li><a href="{{route('Ourstores')}}" class="rightmenu">OUR STORES</a></li>
          <li>
            <a href="{{ route('createForm') }}" class="rightmenu active">CONTACT US</a>
          </li>
          <li>
            <a href="{{route('Storelocator')}}" class="rightmenu">STORE LOCATOR</a>
          </li>
        </ul>
        <div class="float-end language-class">
                                    <!-- Button trigger modal -->

    <img src="http://localhost/beuty_concept/public/pictures/internet-black.png" alt="" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width:25px" >

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
                    <a class="navbar-brand" class="centermenu" href="{{route('Index')}}"><img
                            src="pictures/logoblack.png" width="40%" alt="" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="mx-auto"></div>
                        <ul class="navbar-nav  flex-column text-start mt-3">
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

  <img src="pictures/CONTACT-US-01.png" width="100%" alt="" />

  <div class="container">
    <div class="row">
      <div class="col-md-6 pt-5">
        <div id="map">
          <div class=" mt-3">
            <!--<img src="http://localhost/beuty_concept/public/pictures/bcpl/map bcpl.png" width="100%" alt="Map">-->
            <!--<img src="http://localhost/beuty_concept/public/pictures/bcpl/map-bcpl-101.png" width="100%" alt="Map">-->
            <img src="http://localhost/beuty_concept/public/pictures/bcpl/BCPL-map-latest-.png" width="100%" alt="Map">
          </div>
          <div id="dots">
            <div class="dot dot-1"><img src="http://localhost/beuty_concept/public/pictures/bcpl/warehouse.svg" />
              <span class="tooltiptext p-2">
                <h5 style="padding-top: 12px;">Warehouse</h5>
                <!--<hr />
                <p>Block No.209,NH.No 08, Jasmine Agro Industries Compound, Behind Prakash Petrol Pump, Jetalpur, Ahmedabad-382426
                </p>-->
              </span>
            </div>
            <div class="dot dot-2"><img src="http://localhost/beuty_concept/public/pictures/bcpl/office.svg" />
              <span class="tooltiptext p-2">
                <h5 style="padding-top: 12px;">Office</h5>
               <!-- <hr />
                <p>Block No.209,NH.No 08, Jasmine Agro Industries Compound, Behind Prakash Petrol Pump, Jetalpur, Ahmedabad-382426
                </p>-->
              </span>
            </div>
            <div class="dot dot-3"><img src="http://localhost/beuty_concept/public/pictures/bcpl/beauty scentiments.svg" />
              <span class="tooltiptext p-2">
                <h5>Beauty Scentiments</h5>
                <hr />
                <p>INORBIT MALL – VADODARA
                  Ground Floor Alembic Rd, Opposite to Alembic School, Gorwa, Vadodara, Gujarat 390023
                </p>
              </span>
            </div>
            <div class="dot dot-4"><img src="http://localhost/beuty_concept/public/pictures/bcpl/warehouse.svg" />
              <span class="tooltiptext p-2">
                <h5 style="padding-top: 12px;">Warehouse</h5>
                <!--<hr />
                <p>H.No.1433, 1st flr, Munisurat Compound, Nr. Aadinath Compound, Rahnal, Bhiwandi, Thane, Maharashtra - 421302
                </p>-->
              </span>
            </div>
            <div class="dot dot-5"><img src="http://localhost/beuty_concept/public/pictures/bcpl/office.svg" />
              <span class="tooltiptext p-2">
                <h5 style="padding-top: 12px;">Office</h5>
                <!--<hr />
                <p><b>(1)</b>&nbsp;D -1902, Lotus Corporate Park, Near Jai Coach compound, off Western Express Highway, Goregaon,(East) Mumbai 400063
                </p>
                <p><b>(2)</b>&nbsp;Techno IT Park, 7th Floor, Office No. 709-710, Near SK Resorts, Opp. Eksar Metro Station, Link Road, Borivali (West), Mumbai – 400092
                </p>-->
              </span>
            </div>
            <div class="dot dot-6"><img src="http://localhost/beuty_concept/public/pictures/bcpl/maison de parfums.svg" />

              <span class="tooltiptext p-2">
                <h5>Maison des parfums</h5>
                <hr />
                <p><b>(1)</b>&nbsp; PALLADIUM MUMBAI
                  ,F-30, 1st Floor, Palladium Lower Parel, Mumbai-400013</p>

                <p><b>(2)</b> &nbsp;JIO WORLD DRIVE
                  ,F-32, 1st Floor, Jio World Drive Mall, Bandra Kurla Complex, Bandra East, Mumbai - 400051</p>

              </span>

            </div>
            <div class="dot dot-20"><img src="http://localhost/beuty_concept/public/pictures/bcpl/beaute luxe.svg" />
            <span class="tooltiptext p-2">
                <h5>Beaute Luxe</h5>
                <hr />
                <p>Mumbai:
                Gr Floor, Inorbit Mall, New Link Rd, Malad West, Mumbai,Maharashtra 400064.
                </p>
              </span>
            </div>
            <!-- <div class="dot dot-7"><img src="http://localhost/beuty_concept/public/pictures/bcpl/beauty scentiments.svg" />
              <span class="tooltiptext p-2">
                <h5>Beauty Scentiments</h5>
                <hr/>
                <p>SELECT CITY WALK
                  G – 55, Ground Floor, Select City Walk, New Delhi -
                </p>
              </span>
            </div> -->
            <div class="dot dot-8"><img src="http://localhost/beuty_concept/public/pictures/bcpl/beaute luxe.svg" />
              <span class="tooltiptext p-2">
                <h5>Beaute Luxe</h5>
                <hr />
                <p>Kochi:
                  Shop No 8, Domestic Departure Terminal,
                  Cochin International Airport Limited,
                  Aluva, Ernkulam, Kerala - 683111
                </p>
              </span>
            </div>
            <div class="dot dot-9"><img src="http://localhost/beuty_concept/public/pictures/bcpl/maison de parfums.svg" />
              <span class="tooltiptext p-2">
                <h5>Maison Des Parfums</h5>
                <hr />
                <p>SELECT CITY WALK
                  ,G – 55, Ground Floor, Select City Walk, New Delhi - 110017
                </p>
              </span>
            </div>
            <div class="dot dot-10"><img src="http://localhost/beuty_concept/public/pictures/bcpl/office.svg" />
              <span class="tooltiptext p-2">
                <h5 style="padding-top: 12px;">Office</h5>
                <!--<hr />
                <p>A-163/1, H.K. House, 1st Floor, Lado Sarai, New Delhi 110030, India
                </p>-->
              </span>
            </div>
            <div class="dot dot-11"><img src="http://localhost/beuty_concept/public/pictures/bcpl/warehouse.svg" />
              <span class="tooltiptext p-2">
                <h5 style="padding-top: 12px;">Warehouse</h5>
                <!--<hr />
                <p>F-4, Phase-1, Okhla Industrial Area, New Delhi, South Delhi, Delhi, 110020
                </p>-->
              </span>
            </div>
            <div class="dot dot-12"><img src="http://localhost/beuty_concept/public/pictures/bcpl/beauty scentiments.svg" />
              <span class="tooltiptext p-2">
                <h5>Beauty Scentiments</h5>
                <hr />
                <p>VR MALL NAGPUR
                  ,VR Mall unit no. K03 Upper Ground Floor Medical Square Nagpur : 440003
                </p>
              </span>
            </div>
            <div class="dot dot-21"><img src="http://localhost/beuty_concept/public/pictures/bcpl/beauty scentiments.svg" />
              <span class="tooltiptext p-2">
                <h5>Beauty Scentiments</h5>
                <hr />
                <p>JAIPUR WTC Mall 2nd floor near Opposite Cinepolis, Jawahar Lal Nehru Marg, D -bloc, Malviya Nagar, Jaipur , Rajasthan 302017
                </p>
              </span>
            </div>
            <div class="dot dot-22"><img src="http://localhost/beuty_concept/public/pictures/bcpl/beauty scentiments.svg" />
              <span class="tooltiptext p-2">
                <h5>Beauty Scentiments</h5>
                <hr />
                <p>KANPUR Z Square Mall, Ground floor behind life style store, Civil Lines, Kanpur, uttar Pardesh 208001.
                </p>
              </span>
            </div>
            <div class="dot dot-23"><img src="http://localhost/beuty_concept/public/pictures/bcpl/beauty scentiments.svg" />
              <span class="tooltiptext p-2">
                <h5>Beauty Scentiments</h5>
                <hr />
                <p>PUNE SGS Mall Pune Ground floor Next to Sugar Kiosk, 23, Moledina Road,Camp, Pune Maharashtra 411001
                </p>
              </span>
            </div>
            <div class="dot dot-24"><img src="http://localhost/beuty_concept/public/pictures/bcpl/beauty scentiments.svg" />
              <span class="tooltiptext p-2">
                <h5>Beauty Scentiments</h5>
                <hr />
                <p>AMRITSAR Mall of Amritsar MBM Farms, G.T road, Rajinder Nagar, Amritsar, Maqbool Pura, Amritsar Punjab :143 001.
                </p>
              </span>
            </div>
            
            
             <div class="dot dot-25"><img src="http://localhost/beuty_concept/public/pictures/bcpl/beauty scentiments.svg" />
              <span class="tooltiptext p-2">
                <h5>Beauty Scentiments</h5>
                <hr />
                <p>Ambuja Mall Ground Floor Ambuja City Centre Vidhan Sabha Road Raipur 492007.
                </p>
              </span>
            </div>
            
            
            
            <div class="dot dot-26"><img src="http://localhost/beuty_concept/public/pictures/bcpl/beauty scentiments.svg" />
              <span class="tooltiptext p-2">
                <h5>Beauty Scentiments</h5>
                <hr />
                <p>BS Jalandhar Opp Desh Bhagat Yaadgaar Halls MBC Chowk MBD Neopolis Civil Line Jalandhar 144001.
                </p>
              </span>
            </div>
            
            
            <div class="dot dot-27"><img src="http://localhost/beuty_concept/public/pictures/bcpl/beauty scentiments.svg" />
              <span class="tooltiptext p-2">
                <h5>Beauty Scentiments</h5>
                <hr />
                <p>BS Nashik City Mall Upper Ground Floor Sambhaji Chowk Law Gate Nagar Untwadi Nashik 422002.
                </p>
              </span>
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <div class="dot dot-13"><img src="http://localhost/beuty_concept/public/pictures/bcpl/warehouse.svg" />
              <span class="tooltiptext p-2">
                <h5 style="padding-top: 12px;">Warehouse</h5>
                <!--<hr />
                <p>3-4-616/1, Ground Floor ,Street No .7, Narayanaguda, Hyderabad 500029
                </p>-->
              </span>
            </div>
            <div class="dot dot-14"><img src="http://localhost/beuty_concept/public/pictures/bcpl/office.svg" />
              <span class="tooltiptext p-2">
                <h5 style="padding-top: 12px;">Office</h5>
                <!--<hr />
                <p>3-4-616/1, Ground Floor ,Street No .7, Narayanaguda, Hyderabad 500029
                </p>-->
              </span>
            </div>
            <div class="dot dot-15"><img src="http://localhost/beuty_concept/public/pictures/bcpl/warehouse.svg" />
              <span class="tooltiptext p-2">
                <h5 style="padding-top: 12px;">Warehouse</h5>
                <!--<hr />
                <p>No. 1 - 7, Carmel Complex, Hennur Main Road, Geddelahalli, Kothanur Post, Bangalore - 560077, Karnataka
                </p>-->
              </span>
            </div>
            <div class="dot dot-16"><img src="http://localhost/beuty_concept/public/pictures/bcpl/office.svg" />
              <span class="tooltiptext p-2">
                <h5 style="padding-top: 12px;">Office</h5>
                <!--<hr />
                <p>NBR Tulip, 1st Floor, 45 & 46, 17th A-Main, Indiranagar, HAL 2nd Stage, Bangalore – 560008
                </p>-->
              </span>
            </div>
            <div class="dot dot-17"><img src="http://localhost/beuty_concept/public/pictures/bcpl/warehouse.svg" />
              <span class="tooltiptext p-2">
                <h5 style="padding-top: 12px;">Warehouse</h5>
                <!--<hr />
                <p>21-5, OLD NIMTA ROAD, BELGHARIA, North 24 Parganas, North 24 Parganas 700056, West Bengal
                </p>-->
              </span>
            </div>
            <div class="dot dot-18"><img src="http://localhost/beuty_concept/public/pictures/bcpl/office.svg" />
              <span class="tooltiptext p-2">
                <h5 style="padding-top: 12px;">Office</h5>
                <!--<hr />
                <p>Vardaan 403, 25A Camac Street, Kolkata 700016, India
                </p>-->
              </span>
            </div>
            <div class="dot dot-19"><img src="http://localhost/beuty_concept/public/pictures/bcpl/beaute luxe.svg" />
              <span class="tooltiptext p-2">
                <h5>Beaute Luxe</h5>
                <hr />
                <p>Kolkata:
                  Domestic Airport
                  Jessore Rd, Dum Dum, Kolkata, West Bengal
                </p>
              </span>
            </div>


          </div>
        </div>
        <div class="row">
          <p>

          </p>
        </div>
      </div>

      <div class="col-md-6 mt-5 mb-5 formbg pb-5">
        <div class="container">
            <center>
                <div class="succeess">

                </div>
            </center>
          <form method="POST" id="formSubmit">
            @csrf
            <p class="text-center formhead">We are here to help you</p>
            <input class="fname" type="text" id="FullName" placeholder="Full name"  />
            <!-- Error -->
            <div class="name_error"></div>
            <input class="feemail" id="email" type="text" placeholder="E-Mail Address"  />
            <div class="email_error"></div>

            <input class="fnumber" id="mobail" type="text"  placeholder="Contact details"  />
            <div class="mobaile_error"></div>
            <select id="subject" value="Select Subject" class="selectsubject" >
              <option value="Select Subject">Select Subject</option>
              <option value="Brand Partnership">Brand Partnership</option>
              <option value="Retail Partnership">Retail Partnership</option>
              <option value="Career Options">Career Options</option>
              <option value="customer enquiries">Customer Enquiries</option>
              <option value="Feedback">Feedback</option>
              <option value="Others">Others</option>
            </select>
            <div class="sub_error"></div>
            <div class="mb-5">
                <input class="fmessage" id="msg" type="text" placeholder="Your message"  />
                <div class="msg_error"></div>
            </div>
            <button class="fsubmit" type="submit">Talk to us</button><br />
        </div>
        </form>

      </div>
    </div>
  </div>

  <!-- footer -->
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
  <x-footer/>
  <script src="js/main.js" async defer></script>
  <script src="{{url('js/contactus.js')}}" async defer></script>

  <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>

<script>
  function loadGoogleTranslate() {
    new google.translate.TranslateElement("google_element");
  }
</script>

</body>

</html>
