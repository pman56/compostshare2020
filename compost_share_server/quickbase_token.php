<?php 
error_reporting(0);
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


// For Json Quickbase API Call for COMPOST SHARE.
$access_token = 'access token goes here';
$quickbase_domain = 'hackathon20-fesedo.quickbase.com';

//For XML Quickbase API Call for COMPOST SHARE.
$auth_ticket ='auth ticket goes here';
$udata_from_ticket ='62346645.dzbr';
$app_token ='app token goes here';
$target_domain_url ='https://hackathon20-fesedo.quickbase.com';
$appID ='';

?>