<?php 
/**
* Kurs Bank Bank di Indonesia
*
* @author tommy
* @copyright 2013 Tommy A. Surbakti tommy@surbakti.net
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either
* version 3 of the License, or any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*
* You should have received a copy of the GNU Affero General Public
* License along with this library. If not, see <http://www.gnu.org/licenses/>.
*
*/
function fungsiCurl($url){
     $data = curl_init();
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
	 //curl_setopt($data,	CURLOPT_AUTOREFERER, true);
     curl_setopt($data, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6");
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}
$url = fungsiCurl('http://www.bri.co.id/bri_kurs.php');
$pecah = explode('<h1>KURS BRI</h1>', $url);
$pecah2 = explode ("<div id='rates-container'>",$pecah[1]);
echo "<br>---------------------------------------------------------------------<br>";
echo $pecah2[1];
echo "<br>---------------------------------------------------------------------<br>";
 
?>
