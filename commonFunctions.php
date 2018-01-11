<?
//create a unique user id to follow user throughout lifetime 
$uuid = getUUID();

//get user IP address
$ip_address=getIPAddress();

//get the user agent 
$userAgent=$_SERVER['HTTP_USER_AGENT'];

$queryString = $_SERVER['QUERY_STRING'];

//create a cachebuster to ensure we are downloading the latest pages
$min=1;
$max=1000000;
$cacheBuster = rand($min,$max); 

function getUUID(){
 
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $uuid = 
             substr($charid, 0, 8)
            .substr($charid, 8, 4)
            .substr($charid,12, 4)
            .substr($charid,16, 4)
            .substr($charid,20,12);
        return strtolower($uuid);
 
}

function getIPAddress(){
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    	$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
    	$ip = $_SERVER['REMOTE_ADDR'];
	}

	return $ip;
}

?>