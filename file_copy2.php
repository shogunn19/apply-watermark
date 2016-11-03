<?php
if (is_uploaded_file($_FILES[f_plik][tmp_name]))
{
echo 'Odebrano plik. Nazwa pliku:<b> '.$_FILES[f_plik][name].'</b><br>';
echo 'Rozmiar pliku: <b>'.$_FILES[f_plik][size].' bajtow</b><br>';
move_uploaded_file ($_FILES[f_plik][tmp_name],'./upload/'.$_FILES[f_plik][name]);
}
else
echo 'Błąd przy przesyłaniu pliku!';
?>
