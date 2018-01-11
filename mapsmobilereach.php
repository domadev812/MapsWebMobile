
<?php // Required - Do not modify

include("commonFunctions.php"); 

?>

<?php //Required - Modify profile page variables here

$profile_id = "f27ae5d8effe4a33ae91b74f61cc387a";
$product_id = "100436";
$pubid = "1295";

$source=$product_id;

$userAgent=urlencode($_SERVER['HTTP_USER_AGENT']);
if( strpos($userAgent, 'iPhone') == false && strpos($userAgent, 'iPad') == false ) {
	$callToActionName="DoTrack";
}
else {
	$callToActionName="GoSubscribe";
}

?>

<!--landing page html goes here-->















<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <img src="//bat.bing.com/action/0?ti=5487758&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" />
</head>
<body class="main" style="position: relative; width: 100%;">
	<div id="loading-section" style="height: 100vh; right: 0; position: absolute; left: 0; top: 0; background-color: rgba(0, 0, 0, 0.6); z-index: 9000; display: none;">
		<div style="transition: -webkit-transform; transform: translateY(-50%); -webkit-transform: translateY(-50%); -ms-transform: translateY(-50%); top: 45%; position: relative; text-align: center; ">
			<img src="assets/images/hourglass.gif" style="">
			<p style="font-size: 18px; color: white; margin-top: 20px; padding: 0 20%">Getting Maps ... Please Wait</p>
		</div>
	</div>
	<div class="container">
		<div class="row">
	      	<div class="col-xs-12">
          	<div style="font-size:19pt;text-align:left;" class="location">&nbsp;</div>
          	<div style="font-size:12pt;text-align:left;" class="date"></div>
	      	</div>
	  	</div>
	</div>
  	<div class="main-body">

	  	<div class="row">
        	<div class="col-xs-12">
            	<h1 style="color:Black; font-weight: bold;
            	">Get Maps Directions</h1>
            	
        	</div>
    	</div>

	    <div class="row">
	        <div class="col-xs-12">
	        	<div class="form-group">
	        	
	        	</div>
	            <button class="btn btn-primary btn-block installbutton" onclick="<?=$callToActionName?>()" id="installButton">GET MAPS DIRECTIONS</button>
							
	        </div>
	    </div>

	    <div class="row">
	        <div class="col-xs-12">
	            <div class="disclaimer" style="margin-top:15px;">
	                <input type="checkbox" id="agree" style="padding-left:20px;color:white;" checked="">
	                <span style="color:#000000;text-align:left;">By tapping the button above you agree to our <a href="/termssenior.txt" style="color:#000000;text-decoration:underline">Terms of Service</a>, <a href="/termssenior.txt" style="color:#000000;text-decoration:underline">EULA</a> and <a href="/privacysenior.txt" style="color:#000000;text-decoration:underline">Privacy Policy</a></span>
	            </div>
	        </div>
	    </div>

    </div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/moment.js"></script>
	<script src="https://js.maxmind.com/js/apis/geoip2/v2.1/geoip2.js" type="text/javascript"></script>
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<?php //Required - Do not modify
	 include ("javascriptFunctions.php"); 
	?>
	

	
	
	
	
	
	
</body>

<!--end landing page html -->
