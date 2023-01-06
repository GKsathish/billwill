<!DOCTYPE html>
<html lang="en" class="h-100">




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
	<title>Billwill</title>
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link href="css/style.css" rel="stylesheet">

</head>

<?php

if (isset($_POST['login'])) {
    $mpin = $_POST['mpin'];
    $mobilenumber = $_POST['mobile_number'];

    $data = array("mobilenumber"=> $mobilenumber,"MPIN"=>$mpin ,"message"=> "login");

    $datajson = json_encode($data);

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
    
    $response = $arr["status"];
    $message = $arr["message"];   
    
    if ($response == 200){
        header('Location: home.php');
    }
    
    else{
        header('Location: login.php');
    }
}

?>



<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="images/logo.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <?php
                                    if ($response == 400){
                                        echo "new User Please Signup";
                                    }
                                    ?>
                                    <form action="" method="post" >
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Mobile Number</strong></label>
                                            <input type="text" name="mobile_number" class="form-control"  placeholder="Please Enter Your Mobile Number">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>M-PIN</strong></label>
                                            <input type="number"  name = "mpin"class="form-control" placeholder="M-PIN">
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                
                                            <div class="mb-3">
                                                <a href="forgot-password.php">Forgot MPIN?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name = "login" class="btn btn-primary btn-block">LOGIN IN</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign up</a></p>
                                    </div>
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
