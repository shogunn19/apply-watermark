<meta charset="UTF-8" />
Liczba głosów oddanych na poszczególne kolory:
<?php
include "haslo.php";
$con=pg_connect("host=sbazy dbname=s187010 user=s187010 password=$h");
$r=$_POST[glos];
$query="update ankieta set liczba_glosow=liczba_glosow+1 where nazwa_opcji='$r'";
$result=pg_exec($con,$query);
$query1="select * from ankieta order by nazwa_opcji";
$result1=pg_exec($con,$query1);
$rowsNo=pg_numrows($result1);
$fieldsNo=pg_numfields($result1);
print("<TABLE border='1' frame='border' rules='all'>");
print("<TR>");
for ($row=0; $row<$rowsNo; $row++)
{
for ($field=0; $field<$fieldsNo; $field++)
print "<TD>".pg_result($result1,$row,$field);
print("<TR>");
}
print("</TABLE>");
?>
