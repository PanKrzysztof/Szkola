<?php
$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];
$stanowisko = $_POST["stanowisko"];

include "dbconnect.php";
$connect = mysqli_connect($host, $dblogin, $dbpassword, $db);
$query = "INSERT INTO pracownicy (id, imie, nazwisko, stanowisko) VALUES (NULL, '$imie', '$nazwisko', '$stanowisko');";
$result = mysqli_query($connect, $query);
mysqli_close($connect);
if ($result == true)
{
    echo "Dodano dane rekrutacyjne do bazy";
}
else
{
    echo "Bład dodawania do bazy";
}
echo "<br><a href=bar.html>Powrót</a>";
?>