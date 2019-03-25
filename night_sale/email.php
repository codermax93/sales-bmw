<?
header('Content-type: text/html; charset=windows-1251');

function SendMail( $e_from, $e_to, $e_subject, $e_text )
{
	$php_ver = phpversion();

	$e_from 	= iconv("windows-1251", "utf-8", $e_from );
	$e_to 		= iconv("windows-1251", "utf-8", $e_to );
	$e_subject 	= iconv("windows-1251", "utf-8", $e_subject );
	$e_text 	= iconv("windows-1251", "utf-8", $e_text );

	$header  = "";
	$header .= "Content-Type: text/html; charset=utf-8;\n";
	$header .= "From: $e_from\n";
	$header .= "X-Mailer: PHP/".phpversion()."\n";

	mail( $e_to, $e_subject, "<html>$e_text</html>", $header );
}//end_ func

echo "<pre>";print_r($_POST);echo "</pre>";

$l_host   = str_replace( "www.", "", $_SERVER["HTTP_HOST"] );

foreach( $_POST as $l_key=>&$l_value )
{
	$l_value = iconv("utf-8", "windows-1251", $l_value );
}//end_ foreach


$l_to = "sharedhare@gmail.com";
//$l_to = "sinobyprog@yandex.ru";


switch( $_POST["form"] )
{
	default:
		if ($_POST["center"]) $e_text .= "�����: ".$_POST["center"]."<br>";
		if ($_POST["name"]) $e_text .= "���: ".$_POST["name"]."<br>";
		if ($_POST["phone"]) $e_text .= "�������: ".$_POST["phone"]."<br>";
		if ($_POST["email"]) $e_text .= "E-mail: ".$_POST["email"]."<br>";
		if ($_POST["price"]) $e_text .= "�������� ����: ".$_POST["price"]."<br>";
		if ($_POST["comment"]) $e_text .= "<br/>".$_POST["comment"]."<br>";
		
		SendMail( "robot@".$l_host, $l_to," - ".$_POST["form_title"], $e_text );

        $crm_do = curl_init();
        foreach( $_POST as $key => $item )
            $post[$key] = iconv("Windows-1251","UTF-8", $item);

        if( $post['form'] == "form2" ) {
            $params = "uri=".urlencode($post['form_url'])."&form=".urlencode($post['form'])."&form_title=".urlencode($post['form_title'])."&phone=".urlencode($post['phone']);
        } else {
            $params = "uri=".urlencode($post['form_url'])."&form=".urlencode($post['form'])."&form_title=".urlencode($post['form_title'])."&name=".urlencode($post['name'])."&phone=".urlencode($post['phone']);
        }
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
        @file_put_contents($_SERVER['DOCUMENT_ROOT']."/night_sale/crm-".date("Y-m").".log", print_r($arSave, 1)."\r\n", FILE_APPEND);

		break;

}//end_ switch

?>