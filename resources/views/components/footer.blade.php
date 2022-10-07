<div class="container-fluid ftoor pb-4 bg-black text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="row">
            <div class="col-md-8 col-sm-6 text-center mt-5">
              <img src="pictures/logobig3.svg" width="80%" alt="" />
              <p class="mt-5 afterlogo">
                Vardaan 403 25A, Camac Street <br />
                Kolkata- 700016, India <br />
                ph: +91-33-2287-2358
              </p>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="row text-center">
                <div class="col-lg-12 col-xm-6">
                  <div class="fabev foot-about">
                    <div class="ftheadabout">
                      <span class="foothead">ABOUT US</span>
                    </div>
                    <div class="footdataaa">
                    <a href="{{route('about')}}" class="fbrands">
                        <li>Vision</li>
                      </a>
                      <a href="{{route('about')}}" class="fbrands">
                        <li>Mission</li>
                      </a>
                      <a href="{{route('about')}}" class="fbrands">
                        <li>CSR</li>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-xm-6">
                  <div class="fabev">
                    <div class="ftheadevent">
                      <span class="footheadevent">OUR STORES</span>
                    </div>
                    <div class="footdataaa">
                      <a href="{{route('Ourstores')}}" class="fbrands">
                        <li>MDP</li>
                      </a>
                      <a href="{{route('Ourstores')}}" class="fbrands">
                        <li>Beaute Luxe</li>
                      </a>
                      <a href="{{route('Ourstores')}}" class="fbrands"><li>Beauty Scentiments</li></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="row brandmaison">
                <div class="col-lg-12">
                  <div class="ftheadbrands">
                    <span class="foothead">BRANDS</span>
                  </div>
                  <div class="footdataaa">
                    <a href="{{route('Brands')}}" class="fbrands">
                      <li>Luxury</li>
                    </a>
                    <a href="{{route('Prestige')}}" class="fbrands " id="brand">
                      <li>Prestige</li>
                    </a>
                    <a href="{{route('Popular')}}" class="fbrands">
                      <li>Popular</li>
                    </a>
                    <a href="{{route('Fashion')}}" class="fbrands">
                      <li>Fashion</li>
                    </a>
                    <a href="{{route('Lifestyle')}}" class="fbrands">
                      <li>Lifestyle</li>
                    </a>
                  </div>
                </div>
                <div class="col-lg-12">
                  <!-- <div class="ftheadmaison">
                      <span class="footheadmaison">MAISON DE PARFUMS</span>
                      <div class="footdataaa">
                        <a href="#" class="fbrands"><li>Mumbai store</li></a>
                        <a href="#" class="fbrands"><li>delhi store</li></a>
                      </div>
                    </div> -->
                </div>
              </div>
            </div>
            <div class="col-md-8 col-sm-6 mt-3">

              <div class="text-center mt-3">
                <div class="fabev">
                  <div class="mb-3">
                    <span class="icontext">Follow us: </span>&nbsp;&nbsp;
                    <span>
                      <a href="https://www.instagram.com/beautyconcepts_india/" target="_blank"><img
                          src="/pictures/insta.png" width="12%" alt=""></a>&nbsp;&nbsp;

                         

                      <a href="https://www.facebook.com/BeautyConceptsIndia" target="_blank"><img src="/pictures/fb.png"
                          width="12%" alt=""></a>&nbsp;&nbsp;

                      <a href="https://www.linkedin.com/company/beauty-concepts-pvt.-ltd./" target="_blank"><img
                          src="/pictures/linkedin.png" width="12%" alt=""></a>

                    </span>
                  </div>
                  <img src="pictures/letterbox.png" width="20%" alt="" />
                  <p class="mt-3">Subscribe to our newsletter</p>
                  <input type="email" class="femail" id="sub" placeholder="Email to...." required /><br />
                  <button class="fbtn" onclick="subscribe()">Subscribe</button>
                  <br><span class="subscribemailerror m-2"></span></br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-white text-black">
    <div class="row text-center p-3">
      <div class="col-md-4 wfoot">Copyright 2021</div>
      <div class="col-md-4 wfoot">Rights reserved by Beauty Concepts</div>
      <div class="col-md-4 wfoot"> <a href="https://www.roots-and-stalks.com/" target="_blank"> Powered by Roots and Stalks Digital</a></div>
    </div>
  </div>
  <script src="{{url('js/subscribe.js')}}"></script>
