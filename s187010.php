<meta charset="UTF-8" />
Studentów z której grupy wyświetlić? <br><br>
<form method='post' action='s187010~grupy.php'>
<?php
include "haslo.php";
$con=pg_connect("host=sbazy dbname=s187010 user=s187010 password=$h");
$query="select nr_grupy from _grupy order by nr_grupy";
$result=pg_exec($con, $query);
for($i=0; $i<pg_numrows($result); $i++)
{
$opcja=pg_result($result,$i,0);
print("<input type=radio name='grupa' value='$opcja'/>$opcja<br>");
}
?>

<br>
<input type="submit" value="Wyświetl">
</form>
