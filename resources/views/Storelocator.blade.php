<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Store Locator</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <link rel="stylesheet" href="{{url('css/style.css')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

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

    {{-- jquery cdn link --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
        @media (min-width: 576px){
            .modal-dialog {
              max-width: 964px !important;
              margin: 4.75rem auto !important;
            /* margin-right: 20px !important; */
             }
        }

        .get_directions{
            padding: 6px 4%;
            background: transparent;
            color: black;
            border: 2px solid black;
            margin: unset;
            font-size: unset;
        }
        .get_directions:hover{
            background: black;
            color: white;
            transition: .5s;
        }
        .store_details{
            color: black;
        }
        .store_details:hover{
            color: black;
        }
        .four_img img{
            width: 50%;
            float: left;
            padding: 3%;
        }
        .btn-close{
            float: right;
            font-size: 24px;
            background: #ff003e;
            opacity: 1;
            border-radius: 50%;
            position: absolute;
            top: -12px;
            right: -13px;
            color: #fff !important;
        }
        .btn-close span{
            position: absolute;
            top: 0px;
            left: 11px;
        }

        .prev{
                position: absolute;
                left: 0;
                 top: 45%
        }
        .next{
                position: absolute;
                right: 0;
                 top: 45%
        }
        .close{
                position: absolute;
    top: 0;
    right: 3px;
    font-size: 32px;
    line-height: 32px;
        z-index: 2;
        }
    </style>
</head>

<body>

    <div class="container-fluid bg-white text-black headercontainer">
        <div class="firstnav mt-3 pe-5 text-center">
            <nav class="allnav">
                <ul class="nav-links">
                    <li><a href="{{ route('about') }}" class="leftmenu">ABOUT US</a></li>
                    <li><a href="{{ route('Brands') }}" class="leftmenu">BRANDS</a></li>
                    <li>
                        <a href="{{ route('Maisondeperfums') }}" class="leftmenu">MAISON DES PARFUMS</a>
                    </li>
                    <li>
                        <a href="{{ route('Index') }}" class="centermenu"><img src="pictures/logoblack.png"
                                alt="" /></a>
                    </li>
                    <li><a href="{{ route('Ourstores') }}" class="rightmenu">OUR STORES</a></li>
                    <li>
                        <a href="{{ route('createForm') }}" class="rightmenu">CONTACT US</a>
                    </li>
                    <li>
                        <a href="{{ route('Storelocator') }}" class="rightmenu active">STORE LOCATOR</a>
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
                    <a class="navbar-brand" class="centermenu" href="{{ route('Index') }}"><img
                            src="pictures/logoblack.png" width="40%" alt="" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="mx-auto"></div>
                        <ul class="navbar-nav d-flex flex-column text-start mt-3">
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('about') }}">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('Brands') }}">BRANDS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{route('Maisondeperfums')}}">MAISON DES PARFUMS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('Ourstores') }}">OUR STORES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('createForm') }}">CONTACT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('Storelocator') }}">STORE LOCATOR</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <img src="pictures/store-locator-01.png" width="100%" alt="" />


    <div class="container mt-5 mb-5">
        <div class="row">
            <!-- <div class="col-md-1"></div>
            <div class="col-md-10">
                <div style="padding-left: 17px;">
                    <p><b>Inorbit Mall – Vadodara</b></p>
                    <p>Ground Floor Alembic Rd, Opposite to Alembic School, <br> Gorwa, Vadodara, Gujarat - 390023.</p>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="four_img">
                            <img src="http://localhost/beuty_concept/public/pictures/popup1.png" alt="">
                            <img src="http://localhost/beuty_concept/public/pictures/popup2.png" alt="">
                            <img src="http://localhost/beuty_concept/public/pictures/popup3.png" alt="">
                            <img src="http://localhost/beuty_concept/public/pictures/popup4.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-7" style="padding-top: 4%;">
                        <video style="width: 100%;" controls>
                            <source src="http://localhost/beuty_concept/public/video/Bvlgari Rose Goldea Blossom Delight EDT.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div> -->
            <div class="col-md-6 storecard">
                <div class="wrapper mt-3 mb-5">
                    <div class="st">
                        <label class="storelabel">
                            <select onchange="store()" id="store" class="form-select form-store"
                                aria-label="Default select example">
                                <option selected value="0">Store</option>


                                <!---   store data   --->
                                @foreach ($storedata as $store)
                                <option value="{{ $store->id }}">{{ $store->name }}</option>
                                @endforeach
                                <!---   store data   --->


                            </select>
                        </label>
                    </div>
                    
                    <div class="st">
                        <label class="storelabel-2">
                            <select onchange="storeCity()" id="storeCity" class="form-select form-store appendcity"
                                aria-label="Default select example">
                                <option selected value="0">City</option>


                                <!---   city data   --->
                                @foreach ($storecity as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                                <!---   city data   --->


                            </select>
                        </label>
                    </div>
                </div>
                <div class="scroll-container">


                    <!--------- Your Store Data-------->

                    <div class="scroll-page store">
                     

                        <p class="mt-m"><b>SELECT CITY WALK</b></p>

                            <p>G – 55, Ground Floor, 
                            Select City Walk, New Delhi - 110017</p>
                            <a class="getdirectionbtn" href="https://www.google.com/maps/place/Maison+Des+Parfums/@28.528447,77.218974,17z/data=!3m1!4b1!4m5!3m4!" target="_blank" >Get direction</a>
                             <a data-bs-toggle="modal" data-bs-target="#examplal"  id="button_1" class="pt-3 d-block store_details button_1 store-link" href="javascript: void(0);" >Store Details</a>

                             <hr>
                           
                      

                        <p class="mt-3"><b>PALLADIUM MUMBAI</b></p>

                        <p>F-15A, 1st Floor, Palladium Mall, Lower Parel, Mumbai - 400013</p>

                        <a class="getdirectionbtn" href="https://www.google.com/maps/place/Maison+Des+Parfums/@18.9949051,72.8245914,17z/data=!3m1!4b1!4m5!3m" target="_blank" >Get direction</a>
                         <a data-bs-toggle="modal" data-bs-target="#examplal"  id="button_1" class="pt-3 d-block store_details button_1 store-link" href="javascript: void(0);" >Store Details</a>
                         <hr>



                        <p class="mt-3"> <b>JIO WORLD DRIVE</b></p>

                        <p>F-32, 1st Floor, Jio World Drive Mall, Bandra Kurla Complex, Bandra East, Mumbai - 400051</p>

                        <a class="getdirectionbtn" href="https://www.google.com/maps/place/Maison+Des+Parfums+Jio+world+drive/@19.05313,72.8496273,17z/data=!" target="_blank" >Get direction</a>
                         <a data-bs-toggle="modal" data-bs-target="#examplal"  id="button_1" class="pt-3 d-block store_details button_1 store-link" href="javascript: void(0);" >Store Details</a>

                         <hr>


                        <p class="mt-3"><b>BEAUTE LUXE, KOLKATA:</b></p>

                        <p>Domestic Airport ,Jessore Rd, Dum Dum, Kolkata, West Bengal - 700052</p>

                        <a class="getdirectionbtn" href="https://www.google.com/maps/place/Netaji+Subhash+Chandra+Bose+International+Airport/@22.6531496,88.4" target="_blank" >Get direction</a>
                         <a data-bs-toggle="modal" data-bs-target="#examplal"  id="button_1" class="pt-3 d-block store_details button_1 store-link" href="javascript: void(0);" >Store Details</a>

                         <hr>


                        <p class="mt-3"><b>BEAUTE LUXE, MUMBAI</b></p>

                        <p>Gr Floor, Inorbit Mall, New Link Rd, Malad West, Mumbai, Maharashtra 400064</p> 

                        <a class="getdirectionbtn" href="https://www.google.com/maps/place/Inorbit+Mall(India)+Pvt.+Ltd,+Malad,+Mindspace,+Malad+West,+Mumbai" target="_blank" >Get direction</a>
                         <a data-bs-toggle="modal" data-bs-target="#examplal"  id="button_1" class="pt-3 d-block store_details button_1 store-link" href="javascript: void(0);" >Store Details</a>

                         <hr>

                        <p class="mt-3"><b>INORBIT MALL, VADODARA </b></p>

                        <p>Ground Floor Alembic Rd, Opposite to Alembic School,
                             Gorwa, Vadodara, Gujarat-390023 </p> 

                        <a class="getdirectionbtn" href="https://www.google.com/maps/place/Inorbit+Mall+Vadodara/@22.3223271,73.1655842,17z/data=!3m1!4b1!4m5" target="_blank" >Get direction</a>
                         <a data-bs-toggle="modal" data-bs-target="#examplal"  id="button_1" class="pt-3 d-block store_details button_1 store-link" href="javascript: void(0);" >Store Details</a>

                         <hr>

                   
                        <p class="mt-3"><b>VR MALL NAGPUR</b></p>

                        <p>VR Mall unit no. K03 Upper Ground Floor Medical Square Nagpur: 440003</p> 

                        <a class="getdirectionbtn" href="https://www.google.com/maps/place/VR+Mall/@21.1326898,79.0960455,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xb" target="_blank" >Get direction</a>
                         <a data-bs-toggle="modal" data-bs-target="#examplal"  id="button_1" class="pt-3 d-block store_details button_1 store-link" href="javascript: void(0);" >Store Details</a>

                         <hr>



                        <p class="mt-3"><b>WORLD TRADE PARK, JAIPUR</b></p>

                        <p>World Trade Park, B-Block, 1st Floor, Near to Shoppers Stop, Jawahar Lal Nehru Marg, Jaipur – 302017.</p> 

                        <a class="getdirectionbtn" href="https://www.google.com/maps/place/World+Trade+Park/@26.853021,75.8046688,17z/data=!3m1!4b1!4m5!3m4!1" target="_blank" >Get direction</a>
                         <a data-bs-toggle="modal" data-bs-target="#examplal"  id="button_1" class="pt-3 d-block store_details button_1 store-link" href="javascript: void(0);" >Store Details</a>

                         <hr>


                            <p class="mt-3"><b>INORBIT MALL, VADODARA</b></p>

                        <p>Ground Floor Alembic Rd, Opposite to Alembic School, Gorwa, Vadodara, Gujarat-390023 </p> 

                        <a class="getdirectionbtn" href="https://www.google.com/maps/place/Inorbit+Mall+Vadodara/@22.3223271,73.1655842,17z/data=!3m1!4b1!4m5" target="_blank" >Get direction</a>
                         <a data-bs-toggle="modal" data-bs-target="#examplal"  id="button_1" class="pt-3 d-block store_details button_1 store-link" href="javascript: void(0);" >Store Details</a>

                         <hr>


                        <p class="mt-3"><b>WORLD TRADE PARK, JAIPUR</b></p>

                        <p>World Trade Park, B-Block, 
                            1st Floor,Near to Shoppers Stop, 
                             Jawahar Lal Nehru Marg, Jaipur – 302017.</p> 

                        <a class="getdirectionbtn" href="https://www.google.com/maps/place/World+Trade+Park/@26.853021,75.8046688,17z/data=!3m1!4b1!4m5!3m4!1" target="_blank" >Get direction</a>
                         <a data-bs-toggle="modal" data-bs-target="#examplal"  id="button_1" class="pt-3 d-block store_details button_1 store-link" href="javascript: void(0);" >Store Details</a>

                         <hr>

                        <p class="mt-3"><b>Beaute Luxe, Kochi</b></p>

                        <p>Shop No 8, Domestic Departure Terminal, 
                            Cochin International Airport Limited, 
                            Aluva, Ernakulam, Kerala - 683111</p> 

                        <a class="getdirectionbtn" href="https://www.google.com/maps/place/Cochin+International+Airport/@10.1517834,76.392958,17z/data=!3m1!4" target="_blank" >Get direction</a>
                         <a data-bs-toggle="modal" data-bs-target="#examplal"  id="button_1" class="pt-3 d-block store_details button_1 store-link" href="javascript: void(0);" >Store Details</a>

                         <hr>


                        <p class="mt-3"><b>Pune SGS Mall</b></p>

                                <p>Pune Ground floor Next to Sugar Kiosk, 
                                    23, Moledina Road,Camp, 
                                    Pune Maharashtra 411001</p> 

                        <a class="getdirectionbtn" href="https://www.google.com/maps/place/SGS+Mall,+231,+Moledina+Rd,+Camp,+Pune,+Maharashtra+411001/@18.519" target="_blank" >Get direction</a>
                         <a data-bs-toggle="modal" data-bs-target="#examplal"  id="button_1" class="pt-3 d-block store_details button_1 store-link" href="javascript: void(0);" >Store Details</a>

                         <hr>


                        <p class="mt-3"><b>Kanpur Z Square Mall</b></p>

                                <p>Ground floor behind life style store, 
                                    Civil Lines, Kanpur, uttar Pardesh 208001.</p> 

                        <a class="getdirectionbtn" href="https://www.google.com/maps/place/Z+Square+Mall/@26.4732721,80.352673,17z/data=!3m1!4b1!4m5!3m4!1s0x" target="_blank" >Get direction</a>
                         <a data-bs-toggle="modal" data-bs-target="#examplal"  id="button_1" class="pt-3 d-block store_details button_1 store-link" href="javascript: void(0);" >Store Details</a>

                         <hr>

                        <p class="mt-3"><b>Amritsar Mall of Amritsar</b></p>
                        <p>MBM Farms, G.T road, 
                            Rajinder Nagar, Amritsar, Maqbool Pura, 
                            Amritsar Punjab :143 001.</p> 

                        <a class="getdirectionbtn" href="https://www.google.com/maps/place/Nexus+Amritsar/@31.6197701,74.9054437,17z/data=!3m2!4b1!5s0x39197c" target="_blank" >Get direction</a>
                         <a data-bs-toggle="modal" data-bs-target="#examplal"  id="button_1" class="pt-3 d-block store_details button_1 store-link " href="javascript: void(0);" >Store Details</a>

                       
                         <hr>

                         <p class="mt-3"><b>Ambuja Mall, Raipur</b></p>
                         <p>Ambuja Mall Ground Floor Ambuja City Centre Vidhan...</p> 
 
                         <a class="getdirectionbtn" href="https://www.google.com/maps/d/u/0/embed?mid=19f9bWKPWoHTxV0eoy_yJoSWCJTvLCRk&ehbc=2E312F" width="100" target="_blank" >Get direction</a>
                          <a data-bs-toggle="modal" data-bs-target="#examplal"  id="button_1" class="pt-3 d-block store_details button_1 store-link " href="javascript: void(0);" >Store Details</a>
 

                          <hr>

                          <p class="mt-3"><b>MBD Neopolis Mall, Jalandhar</b></p>
                          <p>BS Jalandhar Opp Desh Dhagat Yaadgaar Halls BMC Ch...</p> 
  
                          <a class="getdirectionbtn" href="https://www.google.com/maps/d/u/0/embed?mid=1UPaIwmPGrGHOVZAokmZLljfJELn8CvY&ehbc=2E312F" width="100" target="_blank" >Get direction</a>
                           <a data-bs-toggle="modal" data-bs-target="#examplal"  id="button_1" class="pt-3 d-block store_details button_1 store-link " href="javascript: void(0);" >Store Details</a>
 
                           
                           <hr>

                           <p class="mt-3"><b>Nashik City Mall</b></p>
                           <p>Nashik City Mall Upper Ground Floor Sambhaji Chowk...</p> 
   
                           <a class="getdirectionbtn" href="https://www.google.com/maps/d/u/0/embed?mid=1amapMs_MhceO9AfYCfn1B35YTvGTws0&ehbc=2E312F" width="100" target="_blank" >Get direction</a>
                            <a data-bs-toggle="modal" data-bs-target="#examplal"  id="button_1" class="pt-3 d-block store_details button_1 store-link " href="javascript: void(0);" >Store Details</a>
   
                    </div>
                    

                    <!--------- Your Store Data-------->
                </div>
            </div>

            <!-------------map ifram--------------->
            <div class="col-lg-6">
                <div class="iframes">
                     <iframe
                        src="https://www.google.com/maps/d/embed?mid=1MuChuinf5MEmMcCwBcM3bZjpuILEPyc&hl=en&ehbc=2E312F"
                        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="iframe">

                </div>
            </div>


            <!-------------map ifram--------------->
        </div>
    </div>
    <!-- footer -->

    <x-footer />
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade store-modal" id="examplal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-sm-down">



    <div class="modal-content">
        {{-- <span class="close">&times;</span> --}}
        <div class="modal-body">
          <div class="container">
            <div class="slideshow-container">
              <div class="mySlides1">
                <img src="/testimonial-1.png" id="imageResult" style="width:100%" height="600px" />
                <div class="note">
                </div>
              </div>

              <div class="mySlides1">
                <img src="/Rectangle 4.png" style="width:100%" height="600px" />
                <div class="note">
                </div>
              </div>

              <div class="mySlides1">
                <img src="/clientele-img.png" style="width:100%" height="600px" />
                <div class="note">
                </div>
              </div>

              <div class="mySlides1">
                <img src="/Rectangle 4.png" style="width:100%" height="600px" />
                <div class="note">
                </div>
              </div>


            </div>
            <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
              <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
          </div>
        </div>
      </div>
    </div>
    </div>

    <script type="text/javascript" src="{{url('js/storelocator.js')}}"></script>
    <script> <link rel="stylesheet" href="style.css"></script>
    <script src="main.js"></script>

    <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

<script>
  function loadGoogleTranslate() {
    new google.translate.TranslateElement("google_element");
  }
</script>

<script>

$(".button_1").click(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "/pages/test/",
        data: {
            id: $(this).val(), // < note use of 'this' here
            access_token: $("#access_token").val()
        },
        // success: function(result) {
        //     alert('ok');
        // },
        // error: function(result) {
        //     alert('error');
        // }
    });
});

    </script>

</body>

</html>
