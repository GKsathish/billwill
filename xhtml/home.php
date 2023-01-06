<!DOCTYPE html>
  <html lang="en">
<?php include("sidebar.php");?>

  



  <body>

    <div class="main-part">

      <div id="main-wrapper">
       

        <div class="content-body">
          <!-- row -->

          <div class="row">
            <div class="col-xl-9 col-sm-12 col-md-12 mobile-respon">
              <div class="container-fluid main-content">
                <div class="row">

                  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">

                      <div class="carousel-item active">
                        <img class="d-block w-100" src="images/big/heading.gif" alt="Second slide">
                      </div>

                      <div class="carousel-item">
                        <img class="d-block w-100" src="images/big/Billwill444.jpg" alt="Third slide">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>


                <div class="row invoice-card-row">
                  <div class="col-xl-4 col-xxl-4 col-sm-4 proflie-box">
                    <div class="card bg-secondary invoice-card">
                      <div class="card-body d-flex">
                        <div class="icon me-3">
                          <i class="fa fa-users upside"></i>

                        </div>
                        <div style="text-align: center;">
                          <h2 class="text-white invoice-num">2478</h2>
                          <p class="text-white fs-18">Visitors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-xxl-4 col-sm-4 proflie-box">
                    <div class="card bg-success invoice-card">
                      <div class="card-body d-flex">
                        <div class="icon me-3">
                          <i class="fa fa-money-bill-wave upside"></i>

                        </div>
                        <div style="text-align: center;">
                          <h2 class="text-white invoice-num">5000</h2>
                          <span class="text-white fs-18" style="margin-left: -15px;">Cashback</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-xxl-4 col-sm-4 proflie-box">
                    <div class="card bg-primary invoice-card">
                      <div class="card-body d-flex">
                        <div class="icon me-3">
                          <i class="fa fa-gift upside"></i>

                        </div>
                        <div style="text-align: center;">
                          <h2 class="text-white invoice-num">90</h2>
                          <span class="text-white fs-18">Vochers</span>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="row allcontent-row">

                  <div class="col-xl-12 col-xxl-12">
                    <div class="card card-accordion" class="accordion" id="accordion-five">

                      <div class="accordion-item">
                        <div class="accordion-header  rounded-lg" id="headingfive" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-controls="collapsefive" aria-expanded="true" role="button">
                          <span class="accordion-header-icon"></span>
                          <h5 class="accordion-header-text">Recharge</h5>
                          <span class="accordion-header-indicator"></span>
                        </div>
                        <div id="collapsefive" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion-one">
                          <div class="accordion-body-text billing-recharge">
                            <div class="recharge col-xl-3 col-xxl-3 slide ">
                              <a href="Recharge.php"><img src="images/big/Airtel.jpg" class="rounded-circle"></a>

                            </div>
                            <div class="recharge col-xl-3 slide">
                              <a href="Recharge.php"><img src="images/big/Bsnl.jpg"></a>

                            </div>
                            <div class="recharge col-xl-3 slide">
                              <a href="Recharge.php"><img src="images/big/jio.jpg"></a>

                            </div>
                            <div class="recharge col-xl-3 slide">
                              <a href="Recharge.php"><img src="images/big/vi5.jpg" class="rounded-circle"></a>

                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="col-xl-12 col-xxl-12">
                    <div class="card card-accordion" class="accordion" id="accordion-one">

                      <div class="accordion-item">
                        <div class="accordion-header  rounded-lg" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne" aria-expanded="true" role="button">
                          <span class="accordion-header-icon"></span>
                          <h5 class="accordion-header-text">Bill Payments</h5>
                          <span class="accordion-header-indicator"></span>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion-one">
                          <div class="accordion-body-text">
                            <div class="recharge col-xl-3 col-xxl-3">
                              <a href="electricity.php"> <i class="fa fa-bolt icons"></i>
                                <p>Elecrticity</p>
                              </a>

                            </div>
                            <div class="recharge col-xl-3">
                              <a href="coming_soon.php
                                 ">
                                <i class="fa fa-satellite-dish icons"></i>
                                <p>Dth</p>
                              </a>

                            </div>
                            <div class="recharge col-xl-3">
                            <a href="
                                 coming_soon.php">
                              <i class="fa fa-wifi icons"></i>
                              <p>Broadband</p>

                            </div>
                            <div class="recharge col-xl-3">
                            <a href="
                                 coming_soon.php">
                              <i class="fa fa-faucet icons"></i>
                              <p>Water </p>
                            </div>

                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="col-xl-12 col-xxl-12">
                    <div class="card card-accordion" class="accordion " id="accordion-two">

                      <div class="accordion-item">
                        <div class="accordion-header collapsed rounded-lg" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo" role="button" aria-expanded="true">
                          <span class="accordion-header-icon"></span>
                          <h5 class="accordion-header-text">Entertainment</h5>
                          <span class="accordion-header-indicator"></span>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion-one">
                          <div class="accordion-body-text">
                            <div class="recharge col-xl-3 col-xxl-3 enter">
                            <a href="
                                 coming_soon.php">
                              <img src="images/big/amazon-prime.jpg">

                            </div>
                            <div class="recharge col-xl-3 enter">
                            <a href="
                                 coming_soon.php">
                              <img src="images/big/Disney.jpg">

                            </div>
                            <div class="recharge col-xl-3 enter">
                            <a href="
                                 coming_soon.php">
                              <img src="images/big/zee.jpg">

                            </div>
                            <div class="recharge col-xl-3 enter">
                            <a href="
                                coming_soon.php">
                              <img src="images/big/netflix.jpg">

                            </div>


                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                </div>

                <div class="row">
                  <div class="col-xl-12 col-xxl-12">
                    <div class="card card-accordion" class="accordion " id="accordion-two ">

                      <div class="accordion-item">
                        <div class="accordion-header collapsed rounded-lg" id="accord-3Three" data-bs-toggle="collapse" data-bs-target="#collapse3Three" aria-controls="collapse3Three" aria-expanded="true" role="button">
                          <h5 class="accordion-header-text">Coupons</h5>
                          <span class="accordion-header-indicator"></span>
                        </div>
                        <div id="collapse3Three" class="collapse accordion__body" aria-labelledby="accord-3Three" data-bs-parent="#accordion-three">
                          <div class="accordion-body-text">
                            <div class="col-xl-6 coupons-drop">
                              <div class="card coupon-card">

                                <div class="card-body d-sm-flex d-block align-items-center">
                                  <div class="store-offer-item shadow-box">
                                    <div class="store-thumb-link">
                                      <div class="offer-image">
                                        <a href="">
                                          <span class="offer-text">75% OFF</span></a>
                                      </div>
                                      <div class="store-name">
                                        <a href=""><span>Kmart Coupons</span> <i class="glyphicon glyphicon-menu-right" aria-hidden="true"></i></a>
                                      </div>
                                    </div>
                                    <div class="latest-coupon">
                                      <h3 class="coupon-title"><a href="#">Up To 40% - 70% Off January Savings Event</a></h3>
                                      <div class="coupon-des">
                                        Save with free shipping and free returns on all orders of $99. <span id="des-more12" class="des-more">... <a role="button" data-toggle="collapse" href="#seemore12" aria-expanded="false" aria-controls="seemore12">More <i class="glyphicon glyphicon-menu-down"></i></a></span>
                                        <div class="coupon-des-full collapse" id="seemore12">Some exclusions apply. No code required. Limited time offer.</div>
                                      </div>
                                    </div>
                                    <div class="coupon-detail coupon-button-type">
                                      <a href="#" class="coupon-button coupon-code" data-aff-url="https://google.com">
                                        <span class="code-text">EMIAXHGF</span>
                                        <span class="get-code">Get Code</span>
                                      </a>
                                      <div class="exp-text">Expires 6/25/2016 <a title="Save This Coupon" href="#" class="coupon-save"><i class="glyphicon glyphicon-star"></i></a></div>
                                    </div>

                                  </div>

                                </div>
                              </div>
                            </div>
                            <div class="col-xl-6 coupons-drop">
                              <div class="card coupon-card">

                                <div class="card-body d-sm-flex d-block align-items-center">
                                  <div class="store-offer-item shadow-box">
                                    <div class="store-thumb-link">
                                      <div class="offer-image">
                                        <a href="">
                                          <span class="offer-text">75% OFF</span></a>
                                      </div>
                                      <div class="store-name">
                                        <a href=""><span>Kmart Coupons</span> <i class="glyphicon glyphicon-menu-right" aria-hidden="true"></i></a>
                                      </div>
                                    </div>
                                    <div class="latest-coupon">
                                      <h3 class="coupon-title"><a href="#">Up To 40% - 70% Off January Savings Event</a></h3>
                                      <div class="coupon-des">
                                        Save with free shipping and free returns on all orders of $99. <span id="des-more12" class="des-more">... <a role="button" data-toggle="collapse" href="#seemore12" aria-expanded="false" aria-controls="seemore12">More <i class="glyphicon glyphicon-menu-down"></i></a></span>
                                        <div class="coupon-des-full collapse" id="seemore12">Some exclusions apply. No code required. Limited time offer.</div>
                                      </div>
                                    </div>
                                    <div class="coupon-detail coupon-button-type">
                                      <a href="#" class="coupon-button coupon-code" data-aff-url="https://google.com">
                                        <span class="code-text">EMIAXHGF</span>
                                        <span class="get-code">Get Code</span>
                                      </a>
                                      <div class="exp-text">Expires 6/25/2016 <a title="Save This Coupon" href="#" class="coupon-save"><i class="glyphicon glyphicon-star"></i></a></div>
                                    </div>

                                  </div>

                                </div>
                              </div>
                            </div>
                            <div class="col-xl-6 coupons-drop">
                              <div class="card coupon-card">

                                <div class="card-body d-sm-flex d-block align-items-center">
                                  <div class="store-offer-item shadow-box">
                                    <div class="store-thumb-link">
                                      <div class="offer-image">
                                        <a href="">
                                          <span class="offer-text">75% OFF</span></a>
                                      </div>
                                      <div class="store-name">
                                        <a href=""><span>Kmart Coupons</span> <i class="glyphicon glyphicon-menu-right" aria-hidden="true"></i></a>
                                      </div>
                                    </div>
                                    <div class="latest-coupon">
                                      <h3 class="coupon-title"><a href="#">Up To 40% - 70% Off January Savings Event</a></h3>
                                      <div class="coupon-des">
                                        Save with free shipping and free returns on all orders of $99. <span id="des-more12" class="des-more">... <a role="button" data-toggle="collapse" href="#seemore12" aria-expanded="false" aria-controls="seemore12">More <i class="glyphicon glyphicon-menu-down"></i></a></span>
                                        <div class="coupon-des-full collapse" id="seemore12">Some exclusions apply. No code required. Limited time offer.</div>
                                      </div>
                                    </div>
                                    <div class="coupon-detail coupon-button-type">
                                      <a href="#" class="coupon-button coupon-code" data-aff-url="https://google.com">
                                        <span class="code-text">EMIAXHGF</span>
                                        <span class="get-code">Get Code</span>
                                      </a>
                                      <div class="exp-text">Expires 6/25/2016 <a title="Save This Coupon" href="#" class="coupon-save"><i class="glyphicon glyphicon-star"></i></a></div>
                                    </div>

                                  </div>

                                </div>
                              </div>
                            </div>
                            <div class="col-xl-6 coupons-drop">
                              <div class="card coupon-card">

                                <div class="card-body d-sm-flex d-block align-items-center">
                                  <div class="store-offer-item shadow-box">
                                    <div class="store-thumb-link">
                                      <div class="offer-image">
                                        <a href="">
                                          <span class="offer-text">75% OFF</span></a>
                                      </div>
                                      <div class="store-name">
                                        <a href=""><span>Kmart Coupons</span> <i class="glyphicon glyphicon-menu-right" aria-hidden="true"></i></a>
                                      </div>
                                    </div>
                                    <div class="latest-coupon">
                                      <h3 class="coupon-title"><a href="#">Up To 40% - 70% Off January Savings Event</a></h3>
                                      <div class="coupon-des">
                                        Save with free shipping and free returns on all orders of $99. <span id="des-more12" class="des-more">... <a role="button" data-toggle="collapse" href="#seemore12" aria-expanded="false" aria-controls="seemore12">More <i class="glyphicon glyphicon-menu-down"></i></a></span>
                                        <div class="coupon-des-full collapse" id="seemore12">Some exclusions apply. No code required. Limited time offer.</div>
                                      </div>
                                    </div>
                                    <div class="coupon-detail coupon-button-type">
                                      <a href="#" class="coupon-button coupon-code" data-aff-url="https://google.com">
                                        <span class="code-text">EMIAXHGF</span>
                                        <span class="get-code">Get Code</span>
                                      </a>
                                      <div class="exp-text">Expires 6/25/2016 <a title="Save This Coupon" href="#" class="coupon-save"><i class="glyphicon glyphicon-star"></i></a></div>
                                    </div>

                                  </div>

                                </div>
                              </div>
                            </div>


                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="row">
                  <img src="images/big/banner.gif">
                </div>
              </div>
            </div>

            <div class="col-xl-3  advertisement">
              <h5 class="adv-title">ADVERTISEMENT</h5>

              <div class="Advert">
                <img src="https://tpc.googlesyndication.com/simgad/7774484849604714692?sqp=4sqPyQQrQikqJwhfEAEdAAC0QiABKAEwCTgDQPCTCUgAUAFYAWBfcAJ4AcUBLbKdPg&rs=AOga4qlYrg7HGpBlthYFUJnFHbYANvPqXg">
              </div>

              <div class="card" style="width:90%;height: auto;">
                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLpF5l9_7zm2vZcSXLRso_a_QT5SuaknTPWw&usqp=CAU" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Dell Inspiron</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn-ad  btn-primary text-white text-center">Buy Now</a>
                </div>
              </div>


              <div class="Advert2">
                <img src="https://tpc.googlesyndication.com/simgad/2903467761175015234">

              </div>

            </div>
          </div>
        </div>
        <div class="tab-nav-container">
          <div class="tab active purple">
            <i class="fas fa-home">
              <a href="home.php">
            </i>
            <p>Home</p>
            </a>
          </div>
          <div class="tab pink">
            <i class="fa-brands fa-paypal"></i>
            <a href="Recharge.php">
              <p>Recharge</p>
            </a>
          </div>
          <div class="tab yellow">

            <i class="fa fa-inr" aria-hidden="true"></i>
            <a href="coming_soon.php">
              <p>History</p>
            </a>
          </div>
          <div class="tab teal">

            <i class="far fa-user"></i>
            <a href="home.php">
              <p>User</p>
            </a>
          </div>
        </div>
      </div>
      

  </body>

  </html>
