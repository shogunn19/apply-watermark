<meta charset="UTF-8" />
<?php
if(!isse
t($_COOKIE['cookie']));
{
$expire=time()+15;
setcookie('cookie', 'visited', $expire ); 
// nazwa ciasteczka, wartosc, na koncu waznosc ciasteczka
$f=fopen('visits.txt', 'r' );
$visitors=intval(fgets($f, 100)); 
$visitors=$visitors+1;
$f=fopen('visits.txt' ,'w');
fwrite($f, $visitors);
}
$f=fopen('visits.txt','r');
$visitors=fgets($f, 100);

echo "Jestes $visitors gosciem na naszej stronie";

fclose($f);
?>
