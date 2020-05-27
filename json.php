<?php
        header('Access-Control-Allow-Origin: *');
        include "polacz.php"; //wzór pliku we wpisie "Pełny panel administracyjny MySQLi"
        if ($sql = $baza->prepare( "SELECT * FROM raport "))
        {
                $sql->execute(); //wykonaj SQL
                $sql->bind_result($id,$data,$klasa,$przedmiot,$forma_zajec,$zad_dom,$liczba_uczestnikow);
                while ($sql->fetch())
                  $nazwiska[] = array(
                     "id" => $id,
                   "data" => $data,
                   "klasa" => $klasa,
                   "przedmiot" => $przedmiot,
                   "forma_zajec" => $forma_zajec,
                  "zad_dom" => $zad_dom,
                   "liczba_uczestnikow" => $liczba_uczestnikow
                   ); //dla każdego nazwiska tworzy 2 pary, nazwiska przekonwertowane do UTF
                $sql->close();
        }
        $baza->close();
        echo json_encode($nazwiska, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>