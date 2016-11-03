<?php
include "haslo.php";
$con=pg_connect("host=sbazy dbname=s187010 user=s187010 password=$h");
$query="SELECT nazwisko FROM _studenci WHERE id_studenta=5";
$result=pg_exec($con, $query);
$x=pg_result($result, 0, 0);
print "Nazwisko studenta o identyfikatorze 5: <br> ";
// print "<input type='text' value=\"$x\" />";
print("<input type=text value=$x />");
?>
