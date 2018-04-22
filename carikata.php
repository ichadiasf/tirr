<?php
require_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>STEMMING</title>
</head>
<body>
<p align="center">&nbsp;</p>
<form method="post" action="">
<center><h2 class="brand-before">Pencarian Kata Dasar</h2></strong></center>
<strong><h2 class="brand-before">
 <small>
<table width="400" height="80" border="0" align="center">
  <tr>
 <td colspan="3"><input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>"></td>
  <td><input class="btnForm" type="submit" name="submit" value="Cari Kata Dasar"></td>
  </tr>
  </table>
</small></h2></strong>
 <?php
if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>';
	$stemming = Enhanced_CS($teksAsli);
	echo "Kata dasar : ".$stemming.'<br/>';
}
?>
</form>
</body>
</html>
