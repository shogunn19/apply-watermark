<meta charset="UTF-8" />
Wybierz swój ulubiny kolor:<br><br>
<form method='post' action='ankieta2.php'>
<?php
include "haslo.php";
$con=pg_connect("host=sbazy dbname=s187010 user=s187010 password=$h");
$query="select nazwa_opcji from ankieta order by nazwa_opcji";
$result=pg_exec($con, $query);

for($i=0; $i<pg_numrows($result); $i++)
{
$opcjaX=pg_result($result,$i,0);
print("<input type=radio name='glos' value='$opcjaX'>$opcjaX<BR>");
}

?>

<br>
<input type="submit" value="Glosuj">
</form>

