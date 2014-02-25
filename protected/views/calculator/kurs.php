<?php
    $html=file_get_contents("http://www.klikbca.com/");

    $code = array("\t","\n","\r","\x20\x20","\0","\x0B");
        $content = str_replace($code, "", html_entity_decode($html));
        preg_match('/<table width="139" border="0" cellspacing="0" cellpadding="0">(.*?)<\/table>/',$content,$isi);
        $temp=explode('<table width="139" border="0" cellspacing="0" cellpadding="0">',$isi[1]);
    //echo "<table border='1'><tr bgcolor='yellow'><td >KURS</td><td>JUAL</td><td>BELI</td></tr>$temp[1]</table>";
     
?> 
<link href="http://puskopdit-jkt.info/member/css/kurs.css" rel="stylesheet">
<table width="195px">
	<tr class="box-header">
		<td>Mata Uang</td>
		<td>Kurs Jual</td>
		<td>Kurs Beli</td>
	</tr>
	<?php echo $temp[1]?>
</table>
<em style="font-size:10px; line-height:140%; color: #CCC;">*sumber: kurs counter bca (www.bca.co.id)</em>