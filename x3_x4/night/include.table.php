<?
function translit( $e_text )
{
	// ������� �������� "��������������" ������.
	$e_text = strtr( $e_text, "������������������������", "abvgdeeziyklmnoprstufh'ie" );
	$e_text = strtr( $e_text, "�����Ũ������������������", "ABVGDEEZIYKLMNOPRSTUFH'IE" );

	// ����� - "���������������".
	$e_text = strtr( $e_text, array(
                        "�"=>"zh", "�"=>"ts", "�"=>"ch", "�"=>"sh",
                        "�"=>"shch","�"=>"", "�"=>"yu", "�"=>"ya",
                        "�"=>"ZH", "�"=>"TS", "�"=>"CH", "�"=>"SH",
                        "�"=>"SHCH","�"=>"", "�"=>"YU", "�"=>"YA",
                        "�"=>"i", "�"=>"Yi", "�"=>"ie", "�"=>"Ye" ) );
	// ���������� ���������.
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
			$l_row .= "<td><div class='price'>�� ".$line[5]." ���.</div><a class='btn popup wide' href='#form_popup' _comment='' _name='vizov' _title='������ � �������'><span>������ � �������</span></a></td>";
			$l_row .= "</tr>";

			
			$l_sort[$l_price][] = $l_row;
		}
		
		
		ksort($l_sort);
		

		$l_table = "<table class='resp_table' id='tb_complects'>".$header_html.multi_implode("",$l_sort)."</table>";
	}
	echo $l_table;

?>