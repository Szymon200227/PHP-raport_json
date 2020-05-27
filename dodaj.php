<?php
include 'polacz.php';







?>

<HTML>
<head>
</head>

<body>
    
        
    <center>
    <form action="insert.php" method="get">
        Klasa: <select name="klasa">
            <option value="2PI">2PI</option>
            <option value="2TP1">2TP1</option>
            <option value="2TP2">2TP2</option>
            <option value="1TP1">1TP1</option>
            <option value="1TP2">1TP2</option>
            <option value="3TI">3TI</option>
            <option value="4TI">4TI</option>
            </select><br>
        Przedmiot: <input name="przedmiot" type="text" id="przedmiot"><br>
        Forma zajęć: <input name="forma_zajec" type="text" id="forma_zajec"><br>
        Zadanie domowe: <input name="zadanie" type="number" id="zadanie"><br>
        Liczba uczestników: <input name="liczba_uczestnikow" type="number" id="liczba_uczestnikow"><br>
        <button type="submit">OK</button>
    </form>
    
  </center>
    
</body>
    
    























</HTML>