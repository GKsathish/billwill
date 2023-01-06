<!DOCTYPE html>
<html lang="en">


<?php

 $state = $_POST['E_state'];
 $msisdn = $_POST['mobilenumber_new'];

 $board  = $_POST['E_board'];




$filedsdate = array(
	"amount"=>$amount,
    "init_channel"=> "internet",
    "ip"=> $ip = $_SERVER['REMOTE_ADDR'],
    "mac"=> "11-AC-58-21-1B-AA",
    "imei"=>"990000112233445",
    "user_agent"=>  $_SERVER['HTTP_USER_AGENT'],
    "accept_header"=> "text/html",
    "fingerprintid"=>"61b12c18b5d0cf901be34a23ca64bb19",
	"mobile_no"=>$msisdn,
	
	"board"=>$board,
	 "state"=>$state,

);





$fi = json_encode($filedsdate);


$curldt = curl_init();
curl_setopt_array($curldt, array(
  CURLOPT_URL => 'https://www.billwill.in:9966/PaymentGateWay',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$fi,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curldt);

error_log('billresposne'.$response,0);
$arr = json_decode($response, true);

$bdorderid = $arr['bdorderid'];
$links = $arr['links'];
$headers = json_encode($links, true);
$head = json_decode($headers, true);
$href = $head[1];
$parameters =  $href['headers'];
$authorization = $parameters['authorization'];
curl_close($curldt);
?>


<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">


	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="index_folder/favicon.ico">
	<title>Bill Will</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script>
	

	</script>

</head>

<body onload="loadXMLDoc()">
	<di
    v class="container">
		
		</div>
		<div id="spinner" style="display: none;" class="mt-3 text-center">
			<div class="spinner-border" role="status" style="width: 5rem; height: 5rem;">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
		<div id="result" class="jumbotron mt-3">
		</div>
	</div>

	

	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
    integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>

<!-- TEST BED -->
<!--	<script type="module" src="https://uat.billdesk.com/jssdk/v1/dist/billdesksdk/billdesksdk.esm.js"></script>
	<script nomodule src="https://uat.billdesk.com/jssdk/v1/dist/billdesksdk.js"></script>
	<link href="https://uat.billdesk.com/jssdk/v1/dist/billdesksdk/billdesksdk.css" rel="stylesheet">-->
<!-- TEST BED -->

<!-- LIVE -->

<script type="module" src="https://pay.billdesk.com/jssdk/v1/dist/billdesksdk/billdesksdk.esm.js"></script>
<script nomodule src="https://pay.billdesk.com/jssdk/v1/dist/billdesksdk.js"></script>
<link href="https://pay.billdesk.com/jssdk/v1/dist/billdesksdk/billdesksdk.css" rel="stylesheet">

<!-- LIVE -->
	<script type="text/javascript">

	function hideSpinner() {
		document.getElementById('spinner').style.display = 'none';
	}

	function showSpinner() {
		document.getElementById('spinner').style.display = 'block';
	}


var bdid = "<?php echo $bdorderid; ?>";


var auth = "<?php echo $authorization;?>";

	var flow_config = {
		merchantId: "PYROGRPV2",
		bdOrderId:bdid,
		authToken: auth,
		childWindow: true,
		
	
	};


var responseHandler = function (txn) {
console.log("callback received status:: ",txn.status)
console.log("callback received response:: ",txn.txnResponse.transaction_response);

	     $.ajax({    
             url :'https://www.billwill.in:9966/transaction',
             method: "POST", 
             async: true,
             crossDomain: true,
             data: txn.txnResponse.transaction_response,
             success: (response) => {
               var resposnedata = jQuery.parseJSON(response);
               console.log(resposnedata);

			   var transaction_error_type = window.btoa(resposnedata.transaction_error_type);
			   var transactionid = window.btoa(resposnedata.transactionid);
			   var orderid = window.btoa(resposnedata.orderid);
			   var mobile_no = window.btoa(resposnedata.mobile_no);
			   var transaction_error_desc = window.btoa(resposnedata.transaction_error_desc);
			   var transaction_date = window.btoa(resposnedata.transaction_date);
			   var amount = window.btoa(resposnedata.amount);
			   var payment_method_type = window.btoa(resposnedata.payment_method_type);

				var resdata =  "transaction_error_code="+transaction_error_type+"&transactionid="+transactionid+"&mobile_no="+mobile_no+"&amount="+amount+"&transaction_error_desc="+transaction_error_desc+"&transaction_date="+transaction_date+"&payment_method_type="+payment_method_type+"&orderid="+orderid;
				var succesurl = "success.php?"+resdata;				
				window.location.href = succesurl;

    	 }
    });
}
	
	var config = {
		responseHandler: responseHandler,
		merchantLogo: "https://www.pyrogroup.com/images/main-logo.png",
		flowConfig: flow_config,
		flowType: "payments"
	};
	
	

	function loadXMLDoc() { 
	
	

	
		showSpinner();
		document.getElementById("result").innerHTML = "";
		var xmlhttp = new XMLHttpRequest();
		var jsonObj = "";
		
		window.loadBillDeskSdk(config);
				
	}
	
	
	</script>
	

<div class="resposnebox">
</div>
</body>

</html>