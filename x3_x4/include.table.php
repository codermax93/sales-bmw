<?
function translit( $e_text )
{
	// Сначала заменяем "односимвольные" фонемы.
	$e_text = strtr( $e_text, "абвгдеёзийклмнопрстуфхъыэ", "abvgdeeziyklmnoprstufh'ie" );
	$e_text = strtr( $e_text, "АБВГДЕЁЗИЙКЛМНОПРСТУФХЪЫЭ", "ABVGDEEZIYKLMNOPRSTUFH'IE" );

	// Затем - "многосимвольные".
	$e_text = strtr( $e_text, array(
                        "ж"=>"zh", "ц"=>"ts", "ч"=>"ch", "ш"=>"sh",
                        "щ"=>"shch","ь"=>"", "ю"=>"yu", "я"=>"ya",
                        "Ж"=>"ZH", "Ц"=>"TS", "Ч"=>"CH", "Ш"=>"SH",
                        "Щ"=>"SHCH","Ь"=>"", "Ю"=>"YU", "Я"=>"YA",
                        "ї"=>"i", "Ї"=>"Yi", "є"=>"ie", "Є"=>"Ye" ) );
	// Возвращаем результат.
	return $e_text;

}
function to_url( $e_text )
{
	$e_text = strtolower(translit( $e_text ));
	$e_text = preg_replace("/[^a-z0-9]/","_",$e_text);

	return $e_text;
}

function multi_implode($sep, $array) {
    foreach($array as $val)
        $_array[] = is_array($val)? multi_implode($sep, $val) : $val;
    return implode($sep, $_array);
}	
	
	
	$l_kuzov_array = array(
		"F20" => array("BMW 1 серии 5-doors","BMW 1 серии"),
		"F21" => array("BMW 1 серии 3-doors","BMW 1 серии"),
		"F22" => array("BMW 2 серии Coupe","BMW 2 серии"),
		"F45" => array("BMW 2 серии Active Tourer","BMW 2 серии"),
		"F30" => array("BMW 3 серии","BMW 3 серии"),
		"F34" => array("BMW 3 серии GT","BMW 3 серии"),
		"T30" => array("BMW 3 серии","BMW 3 серии"),
		"F32" => array("BMW 4 серии Coupe","BMW 4 серии"),
		"F33" => array("BMW 4 серии Cabrio","BMW 4 серии"),
		"F34" => array("BMW 4 серии","BMW 4 серии"),
		"F36" => array("BMW 4 серии Gran Coupe","BMW 4 серии"),
		"G30" => array("BMW 5 серии","BMW 5 серии"),
		"G30ЛС" => array("BMW 5 серии","BMW 5 серии"),
		"F06" => array("BMW 6 серии Gran Coupe","BMW 6 серии"),
		"F12" => array("BMW 6 серии Cabrio","BMW 6 серии"),
		"F12" => array("BMW 6 серии Cabrio","BMW 6 серии"),
		"F13" => array("BMW 6 серии Coupe","BMW 6 серии"),
		"G32" => array("BMW 6 серии GT","BMW 6 серии"),
		"G11" => array("BMW 7 серии","BMW 7 серии"),
		"G12" => array("BMW 7 серии","BMW 7 серии"),
		"G11ЛС" => array("BMW 7 серии","BMW 7 серии"),
		"G12ЛС" => array("BMW 7 серии","BMW 7 серии"),
		"F48" => array("BMW X1","BMW X1"),
		"T48" => array("BMW X1","BMW X1"),
		"F39" => array("BMW X2","BMW X2"),
		"G01" => array("BMW X3","BMW X3"),
		"G01ЛС" => array("BMW X3","BMW X3"),
		"F26" => array("BMW X4","BMW X4"),
		"T26" => array("BMW X4","BMW X4"),
		"G02" => array("Новый BMW X4","Новый BMW X4"),
		"G02ЛС" => array("Новый BMW X4","Новый BMW X4"),
		"F15" => array("BMW X5","BMW X5"),
		"T15" => array("BMW X5","BMW X5"),
		"F16" => array("BMW X6","BMW X6"),
		"T16" => array("BMW X6","BMW X6"),
		"G07" => array("Новый BMW X7","BMW X6"),
	);

	
	$lines = file('complects.csv');
	if (count($lines) > 1)
	{
		$header = explode(";",$lines[0]);
		unset($lines[0]);
		unset($header[0]);
		
		$header_html .= "<tr>";
		foreach ($header as $l_key => $l_val)
		{
			if ( strpos($l_val,"ривилеги")>0 ) continue;
			if ( strpos("-=".$l_val,"ыгода")>0 ) continue;
			$header_html .= "<th>".$header[$l_key]."</th>";
		}

		$header_html .= "</tr>";
		
		$l_complects = array();
		
		$l_sort = array();

		
		foreach ($lines as $line)
		{
			$line = explode(";",$line);
			
			$l_kuzov = trim($line[0]);
			$l_series = $l_kuzov_array[$l_kuzov][1];

			
			$l_price = str_replace(" ","",trim($line[5]));
			
			
			//$line[4] = number_format($line[4], 0, '.', ' ');
			//$line[5] = number_format($line[5], 0, '.', ' ');
			
			$l_row = "<tr data-series='".$l_series."' data-kuzov='".$l_kuzov."'>";
			$l_row .= "<td>".$line[1]."</td>";
			$l_row .= "<td>".$line[2]."</td>";
			$l_row .= "<td>".$line[3]."</td>";
			//$l_row .= "<td><div class='price'>от <span>".$line[4]."</span> руб.</div></td>";
		//	$l_row .= "<td><div class='price'>от <span>".number_format($line[4], 0, '.', ' ')."</span> руб.</div><a class='btn popup wide' href='#form_popup' _comment='' _name='vizov' _title='КУПИТЬ С ПРЕИМУЩЕСТВОМ'><span>КУПИТЬ С ПРЕИМУЩЕСТВОМ</span></a></td>";
			$checknum = trim(preg_replace("/[^0-9]/", '', $line[4]));
			if (strlen($checknum) > 1) 
			{
				$l_row .= "<td><div class='price'><span>".$line[4]."</span> руб.</div>"; 
			} else {
				$l_row .= "<td><div class='price'><span>".$line[4]."</span></div>";
			}
			if (trim($line[5]) != "") $l_row .= "<div class='preim'>Преимущество до <span>".$line[5]." руб.</span></div>";
			$l_row .= "	<a class='btn popup wide' href='#form_popup' _comment='' _name='vizov' _title='КУПИТЬ С ПРЕИМУЩЕСТВОМ'><span>КУПИТЬ С ПРЕИМУЩЕСТВОМ</span></a>";
			$l_row .= "</td>";
			$l_row .= "</tr>";

			
			$l_sort[$l_price][] = $l_row;
		}
		
		
		ksort($l_sort);
		

		$l_table = "<table class='resp_table limit' id='tb_complects'>".$header_html.multi_implode("",$l_sort)."</table>";
	}
	echo $l_table;

?>
<center><a class="show_more btn" href="#">Показать ещё</a></center>
<br/>
<br/>
<br/>
<br/>
<script>
	$(function(){
		$('.show_more').click(function(){
			$(this).hide();
			$('#tb_complects').removeClass('limit');
			return false;
		});
	});
</script>