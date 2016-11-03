<meta charset="UTF-8" />
Informacje na temat studentow nalezących do wybranej przez Ciebie grupy
<br><br>
<?php
include "haslo.php";
$con=pg_connect("host=sbazy dbname=s187010 user=s187010 password=$h");
$r=$_POST[grupa];

$query="SELECT id_studenta, nazwisko, imie, data_urodzenia, nr_grupy, COUNT(_studenci_wyklady.id_wykladu) AS ile_wykladow, AVG(ocena) AS srednia
FROM (_studenci LEFT JOIN _studenci_wyklady USING(id_studenta)) LEFT JOIN _oceny_studentow USING(id_studenta)
WHERE nr_grupy='$r'
GROUP BY _studenci.id_studenta, _studenci.nazwisko, _studenci.imie, _studenci.data_urodzenia, _studenci.nr_grupy ";

$result=pg_exec($con, $query);
$rowsNo=pg_numrows($result);
$fieldsNo=pg_numfields($result);

print("<TABLE border='1' frame='border' rules='all'>");
for($i=0; $i<$fieldsNo; $i++)
	print "<TH>".pg_field_name($result,$i);

for($row=0; $row<$rowsNo; $row++)
{
	print "<TR>";
	for($field=0; $field<$fieldsNo; $field++)
		print "<TD>".pg_result($result,$row,$field); 
}
print("</TABLE>");

?>

