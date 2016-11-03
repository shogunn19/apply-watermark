<html>
<!-- <meta charset="windows-1250" /> -->
<meta charset="UTF-8" />
<title>Tworzenie pliku XML</title>
</html>

<?php
$f = fopen("dokumenty/a.xml","w");
fwrite($f, "<?xml version='1.0' encoding='UTF-8'?>\n");
fwrite($f, "<a>\n");

//wartosci wpisane do elementow formularza
$nazwisko=$_POST['nazwisko'];
$checkbox=$_POST['checkbox'];
$dzien_tygodnia=$_POST['dzien_tygodnia'];

if(is_uploaded_file($_FILES[plik][tmp_name]))
{
move_uploaded_file($_FILES[plik][tmp_name],'./dokumenty/'.$_FILES[plik][name]);
$nazwa=$_FILES[plik][name];
$ile_wazy=$_FILES[plik][size];
$typ=$_FILES[plik][type];

print "<b>Wysłano plik</b><br>";

echo 'Nazwa pliku:<b> '.$_FILES[plik][name].'</b><br>';
}
else print "Nie udało się przesłać pliku.<br>";

fwrite($f,"\t<nazwisko>".$nazwisko."</nazwisko>\n");
fwrite($f,"\t<checkbox>".$checkbox."</checkbox>\n");
fwrite($f,"\t<dzien_tygodnia>".$dzien_tygodnia."</dzien_tygodnia>\n");

fwrite($f,"\t<nazwa_pliku>".$nazwa."</nazwa_pliku>\n");
fwrite($f,"\t<ile_wazy>".$ile_wazy."</ile_wazy>\n");
fwrite($f,"\t<typ>".$typ."</typ>\n");

fwrite($f, "</a>");

echo '<br>Plik XML został utworzony';
fclose($f);
?>
