<?php
$siteURL = $_POST['siteurl'];
$searchquery = $_POST['search'];
	//Zip Code
if (strlen($searchquery) === 5 && is_numeric($searchquery)) {
	$sanitize = 'Location:'.$siteURL.'/idx/?idx-q-ZipCodes%3C0%3E=' . $searchquery;
	header($sanitize);
}
	//MLS Number
elseif (strlen($searchquery) === 9 && is_numeric($searchquery)) {
	$sanitize = 'Location:'.$siteURL.'/idx/?idx-q-MlsNumbers%3C0%3E=' . $searchquery;
	header($sanitize);
}
	//Numberical Address
elseif (is_numeric(substr($searchquery, 0, 1))) {
	$sanitize = 'Location:'.$siteURL.'/idx/?idx-q-AddressMasks%3C0%3E=' . $searchquery . '%';
	header($sanitize);
}
	//WildCard Address
else {
	$sanitize = 'Location:'.$siteURL.'/idx/?idx-q-AddressMasks%3C0%3E=%' . $searchquery . '%';
	header($sanitize);
}
?>