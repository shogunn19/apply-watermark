<meta charset="UTF-8" />
<?php
include "haslo.php";
$con=pg_connect("host=sbazy dbname=s187010 user=s187010 password=$h");

$query ="select * from _pracownicy order by nazwisko";

$result=pg_exec($con, $query);

$liczba_wierszy=pg_numrows($result);

$liczba_kolumn=pg_numfields($result);

print "Zapytanie zwróciło ".$liczba_wierszy." wierszy oraz ".$liczba_kolumn." kolumn<br><br>";

print pg_result($result,0,1)."<br><br>";
print pg_result($result,2,pesel)."<br><br>";
print pg_field_name($result, 2)."<br><br>";

$row=pg_fetch_array($result, 1); //caly wiersz
print $row[1]." ".$row[imie]."<br><br>";

$query = "insert into _pracownicy (nazwisko, imie, nip, pesel) values ('Wielowiejski', 'Tadeusz', '123-000-32-98', '90091212121')";
$result=pg_exec($con, $query);
print pg_affected_rows($result);

//$numRows=pg_affected_rows($result); //ile wierszy zmodyfikowanych
?>
