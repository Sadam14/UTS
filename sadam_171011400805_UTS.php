<HTML>
<HEAD>
<TITLE> UTS PEMROGRAMAN WEB </TITLE>
</HEAD>
<BODY>
<CENTER>
<font size="4px"> 
<?php
function basic($argument)
 {
 echo $argument;
 }
 basic('Data Pemantauan Covid19 wilayah Jawa Barat'); // outputs 'Data Pemantauan Covid19 wilayah Jawa Barat'
echo "<br>";
echo date('d-F-Y');
echo " Pukul ";
echo date('h:i:s A');
echo "<br> Sadam/171011400805";
echo "<br>";
echo "<table width = 500 border =5>
<tr  align=center>
<td>Wilayah</td>
<td>Positif</td>
<td>Dirawat</td>
<td>Sembuh</td>
<td>Meninggal</td>
</tr>
<tr  align=center>
<td>Jawa Barat</td>
<td>47.027</td>
<td>1.607</td>
<td>44.219</td>
<td>1.201</td>
</tr>
</table>";
?>
</FONT>
</BODY>
</HTML>