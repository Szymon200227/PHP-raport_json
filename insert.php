<?php
include "polacz.php";
$klasa = wczytaj("klasa");
$przedmiot = wczytaj("przedmiot");
$forma_zajec = wczytaj("forma_zajec");
$zadanie = wczytaj("zadanie");
$liczba_uczestnikow = wczytaj("liczba_uczestnikow");


date_default_timezone_set("Europe/Warsaw");
$data = date("Y-m-d H:i:s", time());
echo $data;

$sql = $baza->prepare("INSERT INTO raport VALUES ('', ?, ?,? , ?, ?, ?);");
if ($sql)
{
        $sql->bind_param("ssssii",$data, $klasa, $przedmiot, $forma_zajec, $zadanie, $liczba_uczestnikow);
        $sql->execute();
        $sql->close();
}
else
    die( 'Błąd: '. $baza->error);
$baza->close();
header ("Location: http://localhost/Szymon/json2/json.php");
?>