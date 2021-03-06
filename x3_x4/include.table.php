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
	
	
	$l_kuzov_array = array(
		"F20" => array("BMW 1 ����� 5-doors","BMW 1 �����"),
		"F21" => array("BMW 1 ����� 3-doors","BMW 1 �����"),
		"F22" => array("BMW 2 ����� Coupe","BMW 2 �����"),
		"F45" => array("BMW 2 ����� Active Tourer","BMW 2 �����"),
		"F30" => array("BMW 3 �����","BMW 3 �����"),
		"F34" => array("BMW 3 ����� GT","BMW 3 �����"),
		"T30" => array("BMW 3 �����","BMW 3 �����"),
		"F32" => array("BMW 4 ����� Coupe","BMW 4 �����"),
		"F33" => array("BMW 4 ����� Cabrio","BMW 4 �����"),
		"F34" => array("BMW 4 �����","BMW 4 �����"),
		"F36" => array("BMW 4 ����� Gran Coupe","BMW 4 �����"),
		"G30" => array("BMW 5 �����","BMW 5 �����"),
		"G30��" => array("BMW 5 �����","BMW 5 �����"),
		"F06" => array("BMW 6 ����� Gran Coupe","BMW 6 �����"),
		"F12" => array("BMW 6 ����� Cabrio","BMW 6 �����"),
		"F12" => array("BMW 6 ����� Cabrio","BMW 6 �����"),
		"F13" => array("BMW 6 ����� Coupe","BMW 6 �����"),
		"G32" => array("BMW 6 ����� GT","BMW 6 �����"),
		"G11" => array("BMW 7 �����","BMW 7 �����"),
		"G12" => array("BMW 7 �����","BMW 7 �����"),
		"G11��" => array("BMW 7 �����","BMW 7 �����"),
		"G12��" => array("BMW 7 �����","BMW 7 �����"),
		"F48" => array("BMW X1","BMW X1"),
		"T48" => array("BMW X1","BMW X1"),
		"F39" => array("BMW X2","BMW X2"),
		"G01" => array("BMW X3","BMW X3"),
		"G01��" => array("BMW X3","BMW X3"),
		"F26" => array("BMW X4","BMW X4"),
		"T26" => array("BMW X4","BMW X4"),
		"G02" => array("����� BMW X4","����� BMW X4"),
		"G02��" => array("����� BMW X4","����� BMW X4"),
		"F15" => array("BMW X5","BMW X5"),
		"T15" => array("BMW X5","BMW X5"),
		"F16" => array("BMW X6","BMW X6"),
		"T16" => array("BMW X6","BMW X6"),
		"G07" => array("����� BMW X7","BMW X6"),
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
			if ( strpos($l_val,"��������")>0 ) continue;
			if ( strpos("-=".$l_val,"�����")>0 ) continue;
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
			//$l_row .= "<td><div class='price'>�� <span>".$line[4]."</span> ���.</div></td>";
		//	$l_row .= "<td><div class='price'>�� <span>".number_format($line[4], 0, '.', ' ')."</span> ���.</div><a class='btn popup wide' href='#form_popup' _comment='' _name='vizov' _title='������ � �������������'><span>������ � �������������</span></a></td>";
			$checknum = trim(preg_replace("/[^0-9]/", '', $line[4]));
			if (strlen($checknum) > 1) 
			{
				$l_row .= "<td><div class='price'><span>".$line[4]."</span> ���.</div>"; 
			} else {
				$l_row .= "<td><div class='price'><span>".$line[4]."</span></div>";
			}
			if (trim($line[5]) != "") $l_row .= "<div class='preim'>������������ �� <span>".$line[5]." ���.</span></div>";
			$l_row .= "	<a class='btn popup wide' href='#form_popup' _comment='' _name='vizov' _title='������ � �������������'><span>������ � �������������</span></a>";
			$l_row .= "</td>";
			$l_row .= "</tr>";

			
			$l_sort[$l_price][] = $l_row;
		}
		
		
		ksort($l_sort);
		

		$l_table = "<table class='resp_table limit' id='tb_complects'>".$header_html.multi_implode("",$l_sort)."</table>";
	}
	echo $l_table;

?>
<center><a class="show_more btn" href="#">�������� ���</a></center>
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