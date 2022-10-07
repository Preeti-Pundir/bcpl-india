<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{url('css/style.css')}}" />
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<div class="container-fluid brand-bg">
    <div class="container">
        <div class="brand-banner  row">
            <div class="b-child col-lg-6 col-md-6">
                <h1>Our Brands</h1>
            </div>
            <div class="b-child col-lg-6 col-md-6 ">
            
            
            
                <div class="owl-carousel owl-theme slidercardbrand">
                
                
                
                    <div class="item p-4">
                        <img src="pictures/brand-bb1.png" alt="" />
                    </div>
                    <div class="item ps-4 pe-4 " style="padding-top:35px;">
                        <img src="pictures/brand-bb2.png" alt="" />

                    </div>
                    <div class="item p-5">
                        <img src="pictures/brand-bb3.png" alt="" />

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://use.fontawesome.com/abfdd2ac1e.js"></script>


<script>
//const nextIcon = '<img class="iconnext" src="./pictures/right.svg">';
//const prevIcon = '<img class="iconprev" src="./pictures/left.svg">';

$(".slidercard8").owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    nav: false,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
   //navText: [prevIcon, nextIcon],

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



<script>
$(".slidercardbrand").owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    nav: false,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    //navText: [prevIcon, nextIcon],

    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
    },
});
</script>












