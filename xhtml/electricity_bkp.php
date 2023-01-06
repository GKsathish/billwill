<!DOCTYPE html>
<html lang="en">
<?php include("sidebar.php");?>

<!-- 
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dompet : Payment Admin Template" />
    <meta property="og:title" content="Dompet : Payment Admin Template" />
    <meta property="og:description" content="Dompet : Payment Admin Template" />
    <meta property="og:image" content="../../../../dompet.dexignlab.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">
    
    <!-- PAGE TITLE HERE -->
    <title>Bill Will</title>
    
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    
    <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <!-- Style css -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/css/all.min.css">
<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/solid.min.css">
<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/fontawesome.min.css">

      <link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap%404.6.1/dist/css/bootstrap.min.css">
  <script src="cdn.jsdelivr.net/npm/jquery%403.6.0/dist/jquery.slim.min.js"></script>
  <script src="cdn.jsdelivr.net/npm/popper.js%401.16.1/dist/umd/popper.min.js"></script>
  <script src="cdn.jsdelivr.net/npm/bootstrap%404.6.1/dist/js/bootstrap.bundle.min.js"></script>
     -->
<style type="text/css">
    .col-xl-3
    {
        float: left;
    }
    .recharge 
    {
        width: 25%;
        text-align: center;
    }
    .recharge img 
    {
        width: 20%;
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

    a:hover {
  text-decoration:none;
  color:#fe495d;
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
  
}


.tab button.active {
  background-color: #57d0c5;
}


.tabcontent 
{
  display: none;
 
}
.tablinks
{
    width: 33%;
}
.plans
{
    display: none;
}



</style>

</head>
<body>

   
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
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
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M3.88552 6.2921C1.95571 6.54135 0.439911 8.19656 0.439911 10.1896V10.7253C0.439911 12.8874 2.21812 14.6725 4.38019 14.6725H12.7058V24.9768H7.01104C5.77451 24.9768 4.82009 24.0223 4.82009 22.7858V18.4039C4.84523 16.6262 2.16581 16.6262 2.19096 18.4039V22.7858C2.19096 25.4334 4.36345 27.6059 7.01104 27.6059H21.0331C23.6807 27.6059 25.8532 25.4334 25.8532 22.7858V13.9981C26.9064 13.286 27.6042 12.0802 27.6042 10.7253V10.1896C27.6042 8.17115 26.0501 6.50077 24.085 6.28526C24.0053 0.424609 17.6008 -1.28785 13.9827 2.48534C10.3936 -1.60185 3.7545 1.06979 3.88552 6.2921ZM12.7058 5.68103C12.7058 5.86287 12.7033 6.0541 12.7058 6.24246H6.50609C6.55988 2.31413 11.988 1.90765 12.7058 5.68103ZM21.4559 6.24246H15.3383C15.3405 6.05824 15.3538 5.87664 15.3383 5.69473C15.9325 2.04532 21.3535 2.18829 21.4559 6.24246ZM4.38019 8.87502H12.7058V12.0382H4.38019C3.62918 12.0382 3.06562 11.4764 3.06562 10.7253V10.1896C3.06562 9.43859 3.6292 8.87502 4.38019 8.87502ZM15.3383 8.87502H23.6656C24.4166 8.87502 24.9785 9.43859 24.9785 10.1896V10.7253C24.9785 11.4764 24.4167 12.0382 23.6656 12.0382H15.3383V8.87502ZM15.3383 14.6725H23.224V22.7858C23.224 24.0223 22.2696 24.9768 21.0331 24.9768H15.3383V14.6725Z" fill="#4f7086"/> 
                                    </svg>
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
       
<!-- 
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                        <ul class="metismenu" id="menu">
                
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
                </ul>
            
            </div>
        </div>
   -->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
               
               <div class="row ">
                <div class="col-xl-4 col-lg-12">

                            <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Electricity Bill</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form  action="payment.php" method="POST"> 

                                        <div class="row">
                                                 <div class="mb-3 ">
                                                <label class="form-label">State</label>
                                                <select id="inputState" class="default-select form-control wide">
                                                    <option selected>Choose a State</option>
                                                    <option>Andhra pradesh</option>
                                                    <option>Telangana</option>
                                                    <option>Kerla</option>
                                                    <option>Tamil nadu</option>
                                                    <option>Dehli</option>
                                                    <option>Chandigarh</option>
                                                    <option>Goa </option>
                                                    <option>Jammu and Kashmir </option>
                                                </select>
                                            </div>
                                            <div class="mb-3 ">
                                                <label class="form-label">Electricity Board </label>
                                                        <select id="inputElectricity" class="default-select form-control wide">
                                                    <option selected>Choose a Electricity Board</option>
                                                    <option>Central Power Distribution Corporation of A.P Ltd (AP</option>
                                                    <option>Eastern Power Distribution Company of Andhra Pradesh</option>
                                                    <option>Telangana State Southern Power Distribution Company</option>
                                                    <option>Northern Power Distribution Company Of Telangana Limited (TSNPDCL)</option>
                                                    <option>Electricity Department Chandigarh</option>
                                                    <option>Goa Electricity Department</option>
                                                    <option>Jammu and Kashmir Power Development Department</option>
                                               
                                                </select>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 ">
                                                <label class="form-label">Consumer Number</label>
                                               <input type="text" name="" class="form-control"  placeholder="Enter Valid Number">
                                            </div>
                                            
                                                    <a href="#" class="show_plans d-flex flex-row-reverse" style="color:#0665f3;"> *View Sample Bill*</a>
                                        </div>
                                       
                                        <center><button type="submit" class="btn btn-primary btn-lg">Pay</button></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                   </div>

                   <div class="col-xl-8 col-lg-12">
                    <div class="card plans">
                           <div class="card-header">
                                <h4 class="card-title">Invoice</h4>
                            </div>
                          
                            
                        <div class="card-body">
                      
                         


                        </div>
                        
                        
                    </div>
                       

                   </div>

               </div>

               <div class="row">
                <img src="images/big/banner.gif">
                   

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
</script>

<script type="text/javascript">
    $(document).ready(
    function(){
        $(".show_plans").click(function () {
            $(".plans").show();
        });

    });
</script>


</body>

</html>