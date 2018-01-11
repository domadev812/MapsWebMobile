<?
$pubid=$_GET["pubid"];
$uuid=$_GET["uuid"];
$ip_address=$_GET["ip_address"];
$profile_id=$_GET["profile_id"];
$aff_sub = $_GET["aff_sub"];
$aff_sub1 = $_GET["aff_sub1"];
$aff_sub2 = $_GET["aff_sub2"];
$aff_sub3 = $_GET["aff_sub3"];
$aff_sub4 = $_GET["aff_sub4"];
$aff_sub5 = $_GET["aff_sub5"];
$transactionid = $_GET["transactionid"];
$list = $_GET["list"];
$subject = $_GET["subject"];
$cohort = urlencode($_GET['cohort']);
$userAgent=urlencode($_SERVER['HTTP_USER_AGENT']);


header('Content-type: application/x-apple-aspen-config; chatset=utf-8');
header('Content-Disposition: attachment; filename="subscribe.mobileconfig"');

$urlToGet='http://mobi-partner.com/subscriber/create?pubid='. $pubid .'&cohort='. $cohort .'&uuid='. $uuid .'&profile_id='. $profile_id .'&ip_address='.$ip_address.'&aff_sub='.$aff_sub .'&aff_sub1='.$aff_sub1.'&aff_sub2=' . $aff_sub2 .'&aff_sub3=' . $aff_sub3 .'&aff_sub4=' . $aff_sub4 .'&aff_sub5=' . $aff_sub5 .'&transactionid=' . $transactionid .'&list=' . $tlist .'&subject=' . $subject .'&UserAgent=' . $userAgent ;
$xml = file_get_contents($urlToGet,false,$context);

echo $xml;

	
?>
