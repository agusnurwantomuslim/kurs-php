<?php
// isi mandiri.php
function fungsiCurl($url){
     $data = curl_init();
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
         curl_setopt($data, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6");
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}
$url = fungsiCurl('http://www.bankmandiri.co.id/resource/kurs.asp');
$pecah = explode('<table class="tbl-view" cellpadding="0" cellspacing="0" border="0" width="100%">', $url);
$pecah2 = explode ('</table>',$pecah[1]);
$pecah3 = explode ('<th>&nbsp;</th>', $pecah2[0]);
$pecah4 = explode ('<td>&nbsp;&nbsp;</td>',$pecah3[2]);
echo "<br>";
echo "<table border='1'>";
echo "
        <tr>
                <td>Mata Uang</td>
                <td>Symbol</td>
                <td>Beli</td>
                <td>Jual</td>
 
        </tr>";
echo $pecah4[0];
echo $pecah4[1];
echo $pecah4[2];
echo $pecah4[3];
echo $pecah4[6];
echo $pecah4[7];
echo "</table>";
?>
