<meta charset="UTF-8"/>
<?php
include "haslo.php";

$con=pg_connect("host=sbazy dbname=s187010 user=s187010 password=$h");

$query="SELECT nazwisko, imie, katedra FROM _pracownicy LEFT JOIN _wykladowcy ON (_pracownicy.id_pracownika=_wykladowcy.id_wykladowcy) WHERE id_pracownika='$_POST[pole_id]'";

$f=fopen("../dokumenty/dane.txt", "w");
$result=pg_exec($con, $query);
$imie=pg_result($result, 0, 0);
$nazwisko=pg_result($result, 0, 1);
$katedra=pg_result($result, 0, 2);

if ($katedra=="")
{
  fwrite($f, "$imie $nazwisko");
}
else
{
  fwrite($f, "$imie $nazwisko $katedra");
}
print "<h4>Dane pracownika zapisano do pliku dane.txt.</h4>";
fclose($f);

?>
</body>
