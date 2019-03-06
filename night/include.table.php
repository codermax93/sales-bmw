<?
function translit( $e_text )
{
	// Ñíà÷àëà çàìåíÿåì "îäíîñèìâîëüíûå" ôîíåìû.
	$e_text = strtr( $e_text, "àáâãäå¸çèéêëìíîïğñòóôõúûı", "abvgdeeziyklmnoprstufh'ie" );
	$e_text = strtr( $e_text, "ÀÁÂÃÄÅ¨ÇÈÉÊËÌÍÎÏĞÑÒÓÔÕÚÛİ", "ABVGDEEZIYKLMNOPRSTUFH'IE" );

	// Çàòåì - "ìíîãîñèìâîëüíûå".
	$e_text = strtr( $e_text, array(
                        "æ"=>"zh", "ö"=>"ts", "÷"=>"ch", "ø"=>"sh",
                        "ù"=>"shch","ü"=>"", "ş"=>"yu", "ÿ"=>"ya",
                        "Æ"=>"ZH", "Ö"=>"TS", "×"=>"CH", "Ø"=>"SH",
                        "Ù"=>"SHCH","Ü"=>"", "Ş"=>"YU", "ß"=>"YA",
                        "¿"=>"i", "¯"=>"Yi", "º"=>"ie", "ª"=>"Ye" ) );
	// Âîçâğàùàåì ğåçóëüòàò.
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
	
	$lines = file('complects.csv');
	if (count($lines) > 1)
	{
		$header = explode(";",$lines[0]);
		unset($lines[0]);
		unset($header[0]);
		
		$header_html .= "<tr>";
		foreach ($header as $l_key => $l_val)
			$header_html .= "<th>".$header[$l_key]."</th>";

		$header_html .= "<th></th></tr>";
		
		$l_complects = array();
		
		$l_sort = array();

		foreach ($lines as $line)
		{
			$line = explode(";",$line);
			$l_series = trim($line[0]);
			$l_price = str_replace(" ","",trim($line[5]));
			
			$l_row = "<tr data-series='".$l_series."'>";
			$l_row .= "<td>".$line[1]."</td>";
			$l_row .= "<td>".$line[2]."</td>";
			$l_row .= "<td>".$line[3]."</td>";
			$l_row .= "<td>".$line[4]."</td>";
			$l_row .= "<td><div class='price'>îò ".$line[5]." ğóá.</div><a class='btn popup wide' href='#form_popup' _comment='' _name='vizov' _title='ÊÓÏÈÒÜ Ñ ÂÛÃÎÄÎÉ'><span>ÊÓÏÈÒÜ Ñ ÂÛÃÎÄÎÉ</span></a></td>";
			$l_row .= "</tr>";

			
			$l_sort[$l_price][] = $l_row;
		}
		
		
		ksort($l_sort);
		

		$l_table = "<table class='resp_table' id='tb_complects'>".$header_html.multi_implode("",$l_sort)."</table>";
	}
	echo $l_table;

?>