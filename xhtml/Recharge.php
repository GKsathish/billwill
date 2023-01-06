<!DOCTYPE html>
<html lang="en">
<?php include("sidebar.php");?>

  <style type="text/css">
    .col-xl-3 {
      float: left;
    }

    .custtabs {
      height: 500px;
      overflow-y: scroll;
    }

    .recharge {
      width: 25%;
      text-align: center;
    }

    .recharge img {
      width: 20%;
    }

    .dlabnav .metismenu>li>a {
      font-weight: 400;
      display: inline-block;
      font-size: 18px;
      color: #000d12 !important;
    }

    label {
      color: black !important;
    }

    a:hover {
      text-decoration: none;
      color: #fe495d;
    }

    .section-heading {
      font-size: 21px;
      letter-spacing: -0.3px;
      font-weight: 300;
      margin-bottom: 14px;
    }

    .store-offer-item {

      margin-bottom: 15px;
      display: block;
    }

    .store-offer-item:after {
      content: ".";
      display: block;
      height: 0;
      clear: both;
      visibility: hidden;

    }

    .shadow-box {
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.02);
      background: #FFFFFF;
    }

    .store-offer-item .store-thumb-link {
      float: left;
      margin-right: 20px;
    }

    .store-offer-item .store-thumb-link .offer-image {
      max-width: 126px;
      line-height: 0px;
      margin-bottom: 5px;
      text-align: center;
    }

    .offer-image a {
      border: 2px solid #f5f5f5;
      -webkit-border-radius: 2px;
      -moz-border-radius: 2px;
      border-radius: 2px;
      display: block;
    }

    .offer-image a:hover {
      border-color: #fe495d;
    }

    .offer-image img {
      width: 80%;
    }

    .offer-text {
      display: block;
      width: 100%;
      height: 100px;
      font-size: 42px;
      line-height: 36px;
      margin: 10px 0 0 0;
      display: table-cell;
      vertical-align: middle;
      text-align: center;
      font-family: 'Passion One', cursive;
    }

    .store-offer-item .store-thumb-link .store-name a {
      display: inline-block;
      line-height: 1;
      font-size: 13px;
      color: #1c9ab3;
      text-align: center;
      width: 100%;
    }

    .store-offer-item .store-thumb-link .store-name a:hover {
      color: #fe495d;
    }

    .store-offer-item .store-thumb-link .store-name a span {
      overflow: hidden;
      text-overflow: ellipsis;
      width: 85%;
      display: block;
      float: left;
      white-space: nowrap;
    }

    .store-offer-item .store-thumb-link .store-name a i,
    .des-more i {
      font-size: 9px;
    }

    .store-offer-item .store-thumb-link .store-name a i {}

    .store-offer-item .latest-coupon {
      max-width: 300px;
      margin-right: 20px;
      float: left;
      width: 100%;
    }

    .latest-coupon .coupon-title {
      font-size: 16px;
      margin-bottom: 5px;
      font-weight: 500;
      margin-top: -2px;
      line-height: 1.5;
    }

    .latest-coupon .coupon-des {
      font-size: 13px;
      line-height: 1.7;
      position: relative;
    }

    .store-offer-item .coupon-detail {
      float: right;
      margin-top: 25px;
    }

    .coupon-button-type .coupon-deal,
    .coupon-button-type .coupon-print,
    .coupon-button-type .coupon-code {
      line-height: 1;
      padding: 14px 38px;
      background: #fc8c99;
      color: #FFFFFF;
      font-size: 16px;
      font-weight: 600;
      display: inline-block;
      letter-spacing: 1px;
      text-transform: uppercase;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;
      margin-bottom: 2px;
      min-width: 195px;
      text-align: center;
    }

    .coupon-button-type .coupon-code {
      color: #444444;
      background: linear-gradient(315deg, rgba(0, 0, 0, 0.06) 10%, rgba(0, 0, 0, 0) 15%, rgba(0, 0, 0, 0) 35%, rgba(0, 0, 0, 0.06) 40%, rgba(0, 0, 0, 0.06) 60%, rgba(0, 0, 0, 0) 65%, rgba(0, 0, 0, 0) 85%, rgba(0, 0, 0, 0.06) 90%) repeat scroll 0 0/6px 6px rgba(0, 0, 0, 0);
      text-align: right;
      padding: 10px 12px;
      font-size: 20px;
      border: 2px solid #DDDDDD;
      position: relative;
    }

    .coupon-button-type .coupon-code .code-text {
      text-transform: uppercase;
    }

    .coupon-button-type .coupon-code .get-code {
      position: absolute;
      left: -2px;
      top: -2px;
      background: #f7011e;
      color: #FFFFFF;
      font-size: 16px;
      padding: 14px 15px 14px 14px;
      border-top-left-radius: 2px;
      border-bottom-left-radius: 2px;
      transition: all 0.5s ease;
    }

    .coupon-button-type .coupon-code .get-code:after {
      content: "";
      display: block;
      width: 0;
      height: 0;
      border-top: 44px solid transparent;
      border-left: 44px solid #f90024;
      position: absolute;
      right: -44px;
      top: 0;
    }

    .coupon-button-type .coupon-code .get-code:hover {
      padding-right: 5px;
      transition: all 0.5s ease;
    }

    .coupon-detail .exp-text {
      font-size: 13px;
      display: block;
      margin-top: 5px;
      margin-bottom: -2px;
      color: #888888;
    }

    .coupon-save {
      float: right;
      font-size: 15px;
      margin-right: -4px;
      margin-top: -2px;
      color: #999999;
    }

    .widget-area .widget .widget-title {
      font-size: 13px;
      text-transform: uppercase;
      margin-bottom: 10px;
      letter-spacing: 1.2px;
      font-weight: 600;
    }

    .newsletter-box-wrapper.shadow-box {
      padding: 20px;
    }

    a.store-gird img {
      border: 1px solid #f1f1f1;
      display: table;
    }

    a.store-gird:hover img {
      display: table;
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.08);
    }

    a.store-gird span {
      margin: 5px 0 15px 0;
      display: block;
      text-align: center;
      line-height: 1.4;
    }

    /* store coupon style */
    .coupon-listing-item {
      padding-bottom: 0px;
    }

    .coupon-listing-item .offer-image img {
      width: 100%;
    }

    .coupon-listing-item .c-type .c-code {
      background: #b9dc2f;
      color: #FFFFFF;
      padding: 4px 10px 4px;
      line-height: 1;
      text-transform: uppercase;
      font-size: 13px;
      font-weight: bold;
      letter-spacing: 1px;
      display: inline-block;
      -webkit-border-radius: 2px;
      -moz-border-radius: 2px;
      border-radius: 2px;
    }

    .coupon-listing-item .c-type .exp {
      font-size: 12px;
      color: #999999;
      margin-left: 10px;
    }

    .coupon-listing-item .coupon-detail .voted-value {
      font-size: 11px;
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }

    .coupon-listing-footer {
      margin: 18px -20px 0px;
      padding: 10px 20px 12px;
      border-top: 1px solid #f5f5f5;
    }

    .coupon-listing-footer ul {
      margin: 0px;
      padding: 0px;
      list-style: none;
    }

    .coupon-listing-footer ul li {
      padding: 0;
      display: inline-block;
      float: left;
      margin-left: 15px;
    }

    .ui.buttons {
      display: inline-block;
      vertical-align: middle;
      margin: 5px .25em 0 0;
    }

    .ui.basic.buttons .button {
      border-left: 1px solid rgba(39, 41, 43, .15);
      box-shadow: none;
    }

    .coupon-listing-item .coupon-detail .ui.basic.buttons {
      border-radius: 2px;
      border: 1px solid #ccc;
    }

    .ui.buttons:not(.basic):not(.inverted)>.button,
    .ui.buttons>.ui.button:not(.basic):not(.inverted) {
      box-shadow: 0 0 0 1px transparent inset, 0 0 0 0 rgba(39, 41, 43, .15) inset;
    }

    .coupon-listing-item .coupon-detail .user-ratting .ui.button {
      padding: 5px 10px 5px;
    }

    .ui.buttons .button {
      float: left;
      border-radius: 0;
      margin: 0;
    }

    .ui.buttons .button:first-child {
      border-left: none;
    }

    .coupon-listing-footer ul li:first-child {
      margin-left: 0px;
    }

    .coupon-listing-footer ul li a,
    .coupon-listing-footer ul li span {
      font-size: 12px;
      color: #999999;
    }

    .coupon-listing-footer ul li a:hover,
    .coupon-listing-footer ul li span:hover {
      color: #1c9ab3;
    }

    .coupon-listing-footer ul li:last-child {
      float: right;
      margin-left: 0px;
    }

    .coupon-listing-footer .reveal-content {
      padding: 30px 20px 40px;
      border-top: 1px solid #f5f5f5;
      margin: 12px -20px -12px;
      display: none;
      position: relative;
    }



    .tab {
      overflow: hidden;

    }


    .tab button {

      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 10px;
      width: 14%;

    }

    .tabcontent {
      display: none;

    }


    .tab button.active {
      background-color: #57d0c5;
    }



    .tablinks {
      width: 33%;
    }

    .plans {
      display: none;
    }

    .card1 {

      height: 180px;
      border-radius: 5px;
      box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2);
      background-color: #fff;
      padding: 10px 10px;
      position: relative;
    }

    .main,
    .copy-button {
      display: flex;
      justify-content: space-between;
      padding: 0 10px;
      align-items: center;
    }

    .card1::after {
      position: absolute;
      content: "";
      height: 40px;
      right: -20px;
      border-radius: 40px;
      z-index: 1;
      top: 70px;
      background-color: #f6f6f6;
      border-left: 1px dashed black;
      width: 40px;
    }

    .card1::before {
      position: absolute;
      content: "";
      height: 40px;
      left: -20px;
      border-radius: 40px;
      z-index: 1;
      top: 70px;
      background-color: #f6f6f6;
      width: 40px;
      border-right: 1px dashed black;
    }

    .co-img img {
      width: 100px;
      height: 100px;
    }

    .vertical {
      border-left: 2px dashed black;
      height: 100px;
      position: absolute;
      left: 40%;
    }

    .content h1 {
      font-size: 35px;
      margin-left: -20px;
      color: #565656;
    }

    .content h1 span {
      font-size: 18px;
    }

    .content h2 {
      font-size: 18px;
      margin-left: -20px;
      color: #565656;
      text-transform: uppercase;
    }

    .content p {
      font-size: 16px;
      color: #696969;
      margin-left: -20px;
    }

    .copy-button {
      margin: 0px 0 -5px 0;
      height: 45px;
      border-radius: 4px;
      padding: 0 5px;
      border: 1px solid #e1e1e1;
    }

    .copy-button input {
      width: 100%;
      height: 100%;
      border: none;
      outline: none;
      font-size: 15px;
    }

    .copy-button button {
      padding: 5px 20px;
      background-color: #dc143c;
      color: #fff;
      border: 1px solid transparent;
    }

    .buy {
      position: absolute;
      content: "";
      bottom: 20px;
      left: 20px;
      background-color: #dc143c;
    }

    .badge {
      color: #000 !important;
    }
  </style>

</head>

<body>


  <div id="main-wrapper">


    <div class="nav-header">
      <a href="index.php" class="brand-logo">
        <img src="images/logo.png">


      </a>
      <div class="nav-control">
        <div class="hamburger">
          <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
      </div>
    </div>

    <div class="header">
      <div class="header-content">
        <nav class="navbar navbar-expand">
          <div class="collapse navbar-collapse justify-content-between">
            <div class="header-left">
              <div class="dashboard_bar">
                Billwill
              </div>
            </div>
            <ul class="navbar-nav header-right">
              <li class="nav-item">
                <div class="input-group search-area">
                  <input type="text" class="form-control" placeholder="Search here...">
                  <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                </div>
              </li>
              <li class="nav-item dropdown notification_dropdown">
                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <i class="fa fa-clock-rotate-left"></i>

                  <span class="badge light text-white bg-primary rounded-circle">2</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                  <div id="dlab_W_TimeLine02" class="widget-timeline dlab-scroll style-1 ps ps--active-y p-3 height370">
                    <ul class="timeline">
                      <li>
                        <div class="timeline-badge primary"></div>
                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                          <span>10 minutes ago</span>
                          <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
                        </a>
                      </li>
                      <li>
                        <div class="timeline-badge info">
                        </div>
                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                          <span>20 minutes ago</span>
                          <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
                          <p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                        </a>
                      </li>
                      <li>
                        <div class="timeline-badge danger">
                        </div>
                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                          <span>30 minutes ago</span>
                          <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                        </a>
                      </li>
                      <li>
                        <div class="timeline-badge success">
                        </div>
                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                          <span>15 minutes ago</span>
                          <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                        </a>
                      </li>
                      <li>
                        <div class="timeline-badge warning">
                        </div>
                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                          <span>20 minutes ago</span>
                          <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                        </a>
                      </li>
                      <li>
                        <div class="timeline-badge dark">
                        </div>
                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                          <span>20 minutes ago</span>
                          <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </nav>
      </div>
    </div>



    <div class="content-body">
      <!-- row -->
      <div class="container-fluid">

        <div class="row ">
          <div class="col-xl-4 col-lg-12">

            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Mobile Recharge</h4>
              </div>
              <div class="card-body">
                <div class="basic-form">

                  <form action="payment.php" method="POST">

                    <div class="row">
                      <div class="mb-3 ">
                        <label class="form-label">Mobile Number</label>
                        <input type="text" id="mobile" name="mobilenumber_new" class="form-control" placeholder="Enter Mobile Number">
                      </div>
                      <div class="mb-3 ">
                        <label class="form-label">Operator</label>
                        <select id="Operatorname" name="operator" class="form-control">
                        </select>
                      </div>


                      <div class="mb-3 ">
                        <label class="form-label" name="circle" id="my-input">Circle</label>
                        <select id="Circle" name="circle" class="form-control" required></select>
                      </div>


                    </div>


                    <div class="row">

                      <div class="mb-3 ">
                        <label class="form-label" required>Amount</label>


                        <input type="text" id="amount" name="amount" class="form-control" placeholder="Enter Amount" required>

                        <input type="hidden" id="productid" name="productid" value="34657" />

                      </div>
                    </div>

                    <center><button type="submit" name="paysubmit" class="btn btn-primary btn-lg">PAY</button></center>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <style>
            .custtabs ul li {
              padding: 10px;
            }

            .custtabs ul li a {
              color: #000;
            }
          </style>
          <div class="col-xl-8 col-lg-12">
            <div class="card " id="showplan">
              <div class="card-header">
                <h4 class="card-title">Recharge Plans</h4>
              </div>
              <div class="container custtabs">
                <ul class="nav nav-tabs" id="uitab">

                </ul>

                <div class="tab-content" id="tabcon">


                </div>

              </div>


            </div>

          </div>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

          <script>
            $(document).ready(function() {
              $(".nav-tabs a").click(function() {
                $(this).tab("show");
              });
              $(".nav-tabs a").on("shown.bs.tab", function(event) {
                var x = $(event.target).text(); // active tab
                var y = $(event.relatedTarget).text(); // previous tab
                $(".act span").text(x);
                $(".prev span").text(y);
              });
            });
          </script>
          <div class="row">
            <div class="col-xl-6">
              <div class="card ">
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

            <div class="col-xl-6">
              <div class="card ">
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
          <div class="row">
            <div class="col-xl-4">
              <div class="card card1">
                <div class="main">
                  <div class="co-img">
                    <img src="https://i.pinimg.com/originals/c7/84/67/c78467db9ff497393cb548a48f02d451.png" alt="" />
                  </div>
                  <div class="vertical"></div>
                  <div class="content">
                    <h2>Mcdonalds</h2>
                    <h1>10% <span>Coupon</span></h1>
                    <p>Valid till 30 April 2021</p>
                  </div>
                </div>
                <div class="copy-button">
                  <input id="copyvalue" type="text" readonly value="GOFREE" />
                  <button onclick="copyIt()" class="copybtn">COPY</button>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="card card1">
                <div class="main">
                  <div class="co-img">
                    <img src="https://i.pinimg.com/originals/c7/84/67/c78467db9ff497393cb548a48f02d451.png" alt="" />
                  </div>
                  <div class="vertical"></div>
                  <div class="content">
                    <h2>Mcdonalds</h2>
                    <h1>10% <span>Coupon</span></h1>
                    <p>Valid till 30 April 2021</p>
                  </div>
                </div>
                <div class="copy-button">
                  <input id="copyvalue" type="text" readonly value="GOFREE" />
                  <button onclick="copyIt()" class="copybtn">COPY</button>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="card card1">
                <div class="main">
                  <div class="co-img">
                    <img src="https://i.pinimg.com/originals/c7/84/67/c78467db9ff497393cb548a48f02d451.png" alt="" />
                  </div>
                  <div class="vertical"></div>
                  <div class="content">
                    <h2>Mcdonalds</h2>
                    <h1>10% <span>Coupon</span></h1>
                    <p>Valid till 30 April 2021</p>
                  </div>
                </div>
                <div class="copy-button">
                  <input id="copyvalue" type="text" readonly value="GOFREE" />
                  <button onclick="copyIt()" class="copybtn">COPY</button>
                </div>
              </div>
            </div>

          </div>




        </div>
      </div>


      <div class="footer">

        <div class="copyright">

        </div>
      </div>






    </div>

    <p id="dem">dd</p>
    <script>
      var mobilenumber = num.value;
      $(document).ready(function() {
        $("#amount").keyup(function() {
          alert('ok');
          var a = $(this).val().length;
          if (a >= 11) {
            $(this).attr('maxlength', '11')
            alert("not allowed")
          }
        })
      })
    </script>



    <script>
      $("#mobile").keyup(function() {


        var a = $(this).val().length;

        var mobilenumber = $(this).val();

        if (a >= 10) {
          ;

          var datasend = {
            "msisdn": mobilenumber,
            "servicekey": "AIRTIME",
            "countryCode": "91",
            "module": "STOCHOS",
            "username": "speedplus",
            "password": "B1COHNO3",
          }

          $.ajax({
            url: 'https://www.billwill.in:9966/mnp',
            method: "POST",
            async: true,
            crossDomain: true,
            data: JSON.stringify(datasend),
            headers: {
              "content-type": "application/json",
              "cache-control": "no-cache"
            },
            success: (response) => {
              var resposnedata = jQuery.parseJSON(response);


              var opcode = resposnedata.opcode;
              var circleid = resposnedata.circleid;
              var Circle = resposnedata.circle;
              var Operator = resposnedata.operator;

              $('#Operatorname').append($('<option selected>').val(Operator).text(Operator));
              $('#Circle').append($('<option selected>').val(Circle).text(Circle));
              document.getElementById("amount").focus();

              var plandatanew = {
                "operatorCode": "AIRT",
                "message": "palndetails",
                "circleCode": "1"
              }

              $.ajax({
                url: 'https://www.billwill.in:8080/billwill/plans',
                method: "POST",
                async: true,
                crossDomain: true,
                data: JSON.stringify(plandatanew),
                headers: {
                  "content-type": "application/json",
                  "cache-control": "no-cache"
                },
                success: (response) => {
                  var resdata = response.denoms;
                  for (i = 0; i < resdata.length; i++) {
                    var planname = resdata[i].sn
                    var denom = resdata[i].denom
                    console.log(planname);

                    $("#uitab").append('<li class="tab-pane"><a data-toggle="tab" href="#' + planname.replace(/\s/g, '') + '">' + planname + '</a></li>');

                    $("#tabcon").append('<div id="' + planname.replace(/\s/g, '') + '" class="tab-pane fade show  "><table class = "table table-bg-hover" id = "' + planname.replace(/\s/g, '') + 'plans_details"><thead><tr><th>Amount</th><th>Description</th></tr></thead><tbody></tbody></table></div>');

                    for (j = 0; j < denom.length; j++) {

                      $("#" + planname.replace(/\s/g, '') + "plans_details").append('<tr><td>' + denom[j].destAmount + '</td><td>' + denom[j].longDesc + '</td></tr>');





                      // <h3>HOME</h3><p>'+denom[j].actualDenom+'</p>
                      // $(".nav-tabs a").click(function () {
                      //   $(this).tab("show");
                      // });
                      console.log(denom[j].amount);
                    }
                  }

                  $("#uitab li:first").addClass("active");

                  $("#tabcon div:first").addClass("active");
                  $("#amount").focus()

                }
              });
            }
          });


        }
      })
    </script>


    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <!-- Apex Chart -->
    <script src="vendor/apexchart/apexchart.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>

    <!-- Dashboard 1 -->
    <script src="js/dashboard/dashboard-1.js"></script>

    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>




    <script type="text/javascript">
      $(document).ready(
        function() {
          $(".show_plans").click(function() {
            $(".plans").show();
          });

        });
    </script>

    <script type="text/javascript">
      let copybtn = document.querySelector(".copybtn");


      function copyIt() {
        let copyInput = document.querySelector('#copyvalue');

        copyInput.select();

        document.execCommand("copy");

        copybtn.textContent = "COPIED";
      }
    </script>
    <script>
      $('#mobi-select').mobiscroll().select({
        inputElement: document.getElementById('my-input'),
        touchUi: false
      });
    </script>
</body>

</html>
