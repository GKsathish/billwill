<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard" />
	<meta name="author" content="DexignZone" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:title" content="Dompet : Payment Admin Template" />
	<meta property="og:description" content="Dompet : Payment Admin Template" />
	<meta property="og:image" content="../../../../dompet.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	<title>Bill Will</title>
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link href="css/style.css" rel="stylesheet">
    <style>
        .error{
            color:red;
            font-size:14px;
        }
    </style>
</head>
<?php 
session_start();
if (isset($_POST['regsubmit'])) {

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $data = array("Mobilenumber"=> $mobile,"Name"=>$name,"Email"=>$email,"message"=>"signup");
    $datajson = json_encode($data);
    $url = "http://65.1.22.126:8080/billwill/user";
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

     $responsemessage = $arr["status"];

    if($responsemessage == 200){

        $_SESSION["mobilenumber"] = $mobile;
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
									<div class="text-center mb-3">
										<a href="index.html"><img src="images/logo.png" alt="">Billwill</a>
									</div>
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form action="#" method="POST" >
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Name</strong></label>
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Mobile Number</strong></label>
                                            <input type="text" name="mobile" class="form-control" placeholder="Mobile Number" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                                        </div>
                                        <center><small class="error"><?php if($responsemessage == 201){
                                            echo $responsemessage = $arr["message"];
                                        } ?></small></center>
                                        <div class="text-center mt-4">
                                            <button type="submit"  name="regsubmit" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="index.php">Sign in</a></p>
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