<?
if ($_GET['event'] == 'InstallFailure') {
	die(header('HTTP/1.0 404 Not Found'));
} else {
	$urlToGet = "http://services.mobi-partner.com/t/ie?".$_SERVER['QUERY_STRING'];
	$response = file_get_contents($urlToGet);
	echo($response);
}
?>