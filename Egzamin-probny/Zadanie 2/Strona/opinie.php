<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie klientów</title>
    <link rel="stylesheet" href="CSS/styl3.css">
</head>
<body>
    <section class="baner">
        <h1>Hurtownia spożywcza</h1>
    </section>
    <section class="srodek">
        <h2>Opinie naszych klientów</h2>
            <?php 
                include "dbconnect.php";
                $connect = mysqli_connect($host, $dblogin, $dbpassword, $db);
                $query1 = "SELECT klienci.zdjecie, klienci.imie, opinie.opinia FROM opinie, klienci WHERE klienci.id = opinie.Klienci_id AND Typy_id=2 OR Typy_id= 3 GROUP BY klienci.imie;";
                $result1 = mysqli_query($connect, $query1);
                mysqli_close($connect);
                while($row = mysqli_fetch_row($result1))
                {
                    echo "<section class='opinie'><img src='IMG/$row[0]' alt='klient'>"."<br><q>".$row[2]."</q><br><h4>".$row[1]."</h4></section>";
                }
            ?>
    </section>
    <section class="stopka">
        <h3>Współpracują z nami</h3>
        <a href="http://sklep.pl/">Sklep 1</a>
    </section>
    <section class="stopka">
        <h3>Nasi top klienci</h3>
        <ol>
            <?php 
                include "dbconnect.php";
                $connect = mysqli_connect($host, $dblogin, $dbpassword, $db);
                $query2 = "SELECT imie, nazwisko, punkty FROM klienci ORDER BY punkty DESC LIMIT 3;";
                $result2 = mysqli_query($connect, $query2);
                mysqli_close($connect);
                while($row = mysqli_fetch_row($result2))
                {
                    echo "<li>".$row[0]." ".$row[1].", ".$row[2]." pkt.</li>";
                }
            ?>
        </ol>
    </section>
    <section class="stopka">
        <h3>Skontaktuj się</h3>
        <p>telefon: 111222333</p>
    </section>
    <section class="stopka">
        <h3>Autor: Krzysztof Holeczko</h3>
    </section>
</body>
</html>