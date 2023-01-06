<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard" />
	<meta name="author" content="Billwill" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Billwill: Payment Admin Template" />
	<meta property="og:title" content="Billwill: Payment Admin Template" />
	<meta property="og:description" content="Billwill: Payment Admin Template" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Billwill</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" />

		
    <link href="css/style.css" rel="stylesheet">
	
<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/css/all.min.css">
<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/solid.min.css">
<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/fontawesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>

			.icons
	{
		font-size: 26px;color: blue;
	}


.tab {
  float: left;
  background-color: #fff;
  width: 100%;
  
}
.dlabnav .metismenu > li > a {
    font-weight: 400;
    display: inline-block;
    font-size: 18px;
    color: #000d12 !important;
    }
 label
 {
  color: black !important;
 }

.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding:15px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
   border-radius: 10px;
   margin: 5px 0px;
}


.tab button:hover {
  background-color: #77e2f3;
}


.tab button.active {
  background-color: #77e2f3;
}


.tabcontent {
  float: left;
  padding: 0px 12px;
  width: 70%;
  border-left: none;
  height: 300px;
}
</style
	
</head>

<body>

    <div id="main-wrapper">
    	  <div class="nav-header">
            <a href="index.php" class="brand-logo">
				<img src="images/logo.png">
            </a>
            
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
                        <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
                    </div>
				</nav>
			</div>
		</div>
   
       
              <div class="dlabnav">
            <div class="dlabnav-scroll mm-active ps">
				<ul class="metismenu mm-show" id="menu">
				
                      <li><a href="index.php" class="ai-icon" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Home</span>
						</a>
					</li>
                      
                    <li><a href="Recharge.php" class="ai-icon" aria-expanded="false">
							<i class="flaticon-013-checkmark"></i>
							<span class="nav-text">Recharge</span>
						</a>
					</li>
                 
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-022-copy"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="page-login.php">Login</a></li>
                            <li><a href="page-register.php">Register</a></li>
                       
                            <li><a href="page-lock-screen.php">Lock Screen</a></li>
                            
                        </ul>
                    </li>
                      <li><a href="#" class="ai-icon" aria-expanded="false">
							<span class="nav-text">Offer's</span>
						</a>
					</li>
					   <li><a href="#" class="ai-icon" aria-expanded="false">
							<span class="nav-text">Redeem Vouchers</span>
						</a>
					</li>
					   <li><a href="#" class="ai-icon" aria-expanded="false">
							<span class="nav-text">Refer & Earn</span>
						</a>
					</li>
					   <li><a href="#" class="ai-icon" aria-expanded="false">
							<span class="nav-text">Help & Support</span>
						</a>
					</li>
                </ul>
			
			</div>
        </div>
       
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<h2>UPI Payments</h2>
                </div>
                


                <div class="row">
                    <div class="col-xl-3 col-xxl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-intro-title">UPI Payments</h4>

                                <div class="">
                                    <div id="external-events" class="my-3">
                                 <div class="tab">
								  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen"><i class="fa fa-credit-card icons" aria-hidden="true"></i> Card</button>
								  <button class="tablinks" onclick="openCity(event, 'Paris')"><i class="fa-brands fa-google-pay icons"></i> UPI</button>
								  <button class="tablinks" onclick="openCity(event, 'Tokyo')"><i class="fa fa-university icons" aria-hidden="true"></i>
Net Banking</button>
								  <button class="tablinks" onclick="openCity(event, 'India')"><i class="fa-solid fa-wallet icons"></i> Wallet</button>
								</div>
                                    </div>
                                   
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-xxl-8" style="height:100vh;">

                        <div class="card">
                            <div class="card-body">
                                <div id="London" class="tabcontent">
								  <h3>Card</h3>
								       <div class="basic-form">
                                    <form>

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Card Number</label>
                                                <input type="text" class="form-control" placeholder="Enter Card Number">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Card Holder Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Card Holder Name">
                                            </div>
                                          
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-3">
                                                <label class="form-label">MM/YY</label>
                                            <input type="Number" class="form-control" placeholder="Enter MM/YY">
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label class="form-label">CVV</label>
                                                <input type="number" class="form-control" placeholder="Enter CVV">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label">
                                                    Check Once
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Pay Now</button>
                                    </form>
                                </div>
								 
								</div>

								<div id="Paris" class="tabcontent">
								  <h3>UPI</h3>

								   		 <div class="basic-form">
                                    <form>

                                    	<label><strong class="font-weight-bold">UPI ID</strong></label>
                                    	<input type="text" name="" class="form-control" placeholder="">

                                    	<p>UPI ID should be in the format username@upihandle</p>

                                    	<center><button type="submit" class="btn btn-primary">Pay Now</button></center>


                                    </form>

                                </div>
								  
								</div>

								<div id="Tokyo" class="tabcontent">
								  <h3>Net Banking</h3>

								     		 <div class="basic-form">
                                    <form>

                                    	<label><strong class="font-weight-bold">Net Banking</strong></label>
                                    	<input type="Search" name="" class="form-control" placeholder="">

                                    	<p>UPI ID should be in the format username@upihandle</p>

                                    	<center><button type="submit" class="btn btn-primary">Pay Now</button></center>


                                    </form>

                                </div>
								 
								</div>

								<div id="India" class="tabcontent">
								  <h3>Wallet</h3>
								     		 <div class="basic-form">
                                    <form>

                                    	<label><strong class="font-weight-bold">UPI ID</strong></label>
                                    	<input type="text" name="" class="form-control" placeholder="">

                                    	<p>UPI ID should be in the format username@upihandle</p>

                                    	<center><button type="submit" class="btn btn-primary">Pay Now</button></center>


                                    </form>

                                </div>
								 
								</div>
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
  

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/moment/moment.min.js"></script>

    <script src="vendor/fullcalendar/js/main.min.js"></script>
	<script src="js/plugins-init/fullcalendar-init.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	
	
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>


</html>


