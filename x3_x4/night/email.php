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


$l_to = "form@sinoby.ru";

switch( $_POST["form"] )
{
	default:
		if ($_POST["center"]) $e_text .= "Центр: ".$_POST["center"]."<br>";
		if ($_POST["name"]) $e_text .= "Имя: ".$_POST["name"]."<br>";
		if ($_POST["phone"]) $e_text .= "Телефон: ".$_POST["phone"]."<br>";
		if ($_POST["email"]) $e_text .= "E-mail: ".$_POST["email"]."<br>";
		if ($_POST["price"]) $e_text .= "Желаемая цена: ".$_POST["price"]."<br>";
		if ($_POST["comment"]) $e_text .= "<br/>".$_POST["comment"]."<br>";
		
		SendMail( "robot@".$l_host, $l_to," - ".$_POST["form_title"], $e_text );
		break;

}//end_ switch

?>