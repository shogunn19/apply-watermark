<?php

$con=pg_connect("host=sbazy user=s187010 dbname=s187010 password=bnmjk876");
$q="select * from _studenci";
$r=pg_exec($con, $q);
$lw = pg_numrows($r);
$lk = pg_numfields($r);

print "<table border=1 frame=border rules=all>";
for($i=0; $i<lk; $i++)
 print "<th>".pg_field_name($r, $i);

for($j=0; $j<$lw;  $j++)
{

  print "<tr>";

 	for($i=0; $i<$lk; $i++ )
 	 print "<td>".pg_result($r, $j, $i);
}
print "</table>";




?>

