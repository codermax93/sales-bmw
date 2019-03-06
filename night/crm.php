<?
header('Content-type: text/html; charset=windows-1251');

$crm_do = curl_init();

$cdate = iconv("UTF-8", "Windows-1251", $_POST['date']);
$_POST['date'] = $cdate;

foreach( $_POST as $key => $item )
    $post[$key] = iconv("Windows-1251","UTF-8", $item);

$params = "uri=".urlencode($post['form_url'])."&form=callsinoby&date=".urlencode($post['date'])."&time=".urlencode($post['time'])."&phone=".urlencode($post['phone']);

curl_setopt($crm_do, CURLOPT_URL,          "http://178.132.200.66:8076/site_request/" );
curl_setopt($crm_do, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($crm_do, CURLOPT_TIMEOUT,        10);
curl_setopt($crm_do, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($crm_do, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($crm_do, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($crm_do, CURLOPT_POST,           1 );
//curl_setopt($crm_do, CURLOPT_RANGE,          5000);
curl_setopt($crm_do, CURLOPT_POSTFIELDS,     $params);
curl_setopt($crm_do, CURLOPT_HTTPHEADER,     array(
    "content-type: application/x-www-form-urlencoded"
));

$result = curl_exec($crm_do);
$err = curl_error($crm_do);
curl_close($crm_do);

$arSave = array(
    'date_time' => date('d.m.Y H:i:s'),
    'post_data' => $_POST,
    'post_data_iconv' => $post,
    'curl_data' => $params,
    'curl_result' => $result,
    'curl_error' => $err,
);
@file_put_contents($_SERVER['DOCUMENT_ROOT']."/night/crm-".date("Y-m").".log", print_r($arSave, 1)."\r\n", FILE_APPEND);