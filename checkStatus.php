<?
$uuid=$_GET["uuid"];
$profile_id=$_GET["profile_id"];

//try once
$urlToGet = "http://www.mobi-partner.com/Users/CheckInstallStatus?uuid=".$uuid."&profile_id=".$profile_id."&retries=0";
$response = trim(file_get_contents($urlToGet));
if ($response==1){
echo("1");
die();
}
sleep(2);
//try twice
$urlToGet = "http://www.mobi-partner.com/Users/CheckInstallStatus?uuid=".$uuid."&profile_id=".$profile_id."&retries=0";
$response = file_get_contents($urlToGet);
if ($response==1){
echo("1");
die();
}
sleep(2);
//try three times
$urlToGet = "http://www.mobi-partner.com/Users/CheckInstallStatus?uuid=".$uuid."&profile_id=".$profile_id."&retries=0";
$response = file_get_contents($urlToGet);
if ($response==1){
echo("1");
die();
}

echo($response);

?>