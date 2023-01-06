<!DOCTYPE html>
<html lang="en" class="h-100">
  <!-- Mirrored from makaanlelo.com/tfdl_products_007/dompet/xhtml/page-forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Aug 2022 05:06:13 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="admin, dashboard" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Dompet : Payment Admin Template" />
    <meta property="og:title" content="Dompet : Payment Admin Template" />
    <meta property="og:description" content="Dompet : Payment Admin Template" />

    <meta name="format-detection" content="telephone=no" />

    <!-- PAGE TITLE HERE -->
    <title>Bill will</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link href="css/style.css" rel="stylesheet" />
  </head>


<?php
session_start();
$mobilenumber = $_SESSION["mobilenumber_"];
if(isset($_POST['Forgot_pin'])) {
  
     $Mobilenumber = $_POST['mobilenumber'];


   $data = array("Mobilenumber"=> $Mobilenumber,"message"=> "forget_mpin");

   //var_dump($data);
   $url = "http://localhost:8080/billwill/user";
 $headers = array('Content-Type: application/json');

 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_POST, true);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
 $result = curl_exec($ch);
   $arr = json_decode($result, true);
   
echo    $response = $arr["status"];
  echo  $message = $arr["mesaage"];   

  

   if($response == 200 ){
    $_SESSION["mobilenumber"] = $Mobilenumber;
    header('Location: OTP.php');

   }

   
}

?>

  <body class="vh-100">
    <div class="authincation h-100">
      <div class="container h-100">
        <div class="row justify-content-center h-50 align-items-center">
          <div class="col-md-6">
            <div class="authincation-content">
              <div class="row no-gutters">
                <div class="col-xl-12">
                  <div class="auth-form">
                    <h4 class="text-center mb-4">Forgot MPIN</h4>

                    <form action="" method="post" >
                      <div class="mb-3">
                        <label><strong>Mobile Number</strong></label>
                        <input
                        type="text"
                          class="form-control"
                          placeholder="please enter your mobile number"

                          name="mobilenumber"
                        />

                        <small><?php if($response == 400){
                          echo $message;
                        } ?></small>
                      </div>

                      <div class="text-center">
                      <button type="submit" name = "Forgot_pin" class="btn btn-primary btn-block">
                          SUBMIT
                        </button>
                   
                        </div>
                        </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="vendor/global/global.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
  
  </body>
</html>
