<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motocykle</title>
    <link rel="stylesheet" href="CSS/styl.css">
</head>
<body>
    <img src="IMG/motor.png" alt="motocykl" class="motor">
    <section class="baner">
        <h1>Motocykle - moja pasja</h1>
    </section>
    <section class="lewy">
        <h2>Gdzie pojechać?</h2>
            <dl>
            <?php
                include "DB/dbconnect.php";
                $connect=mysqli_connect($host, $dblogin, $dbpassword, $dbname);
                $query="SELECT nazwa, opis, poczatek, zrodlo FROM wycieczki JOIN zdjecia ON wycieczki.zdjecia_id=zdjecia.id";
                $result=mysqli_query($connect, $query);
                mysqli_close($connect);
                while($row=mysqli_fetch_row($result))
                {
                    echo '<dt>Termin listy: '.$row[0].', rozpoczyna się w '.$row[2].', <a href="IMG/'.$row[3].'.jpg">zobacz zdjęcie</a></dt><dd>'.$row[1].'</dd>';
                }
            ?>
            </dl>
    </section>
    <section class="prawy1">
        <h2>Co kupić?</h2>
        <ol>
            <li>Honda CBR125R</li>
            <li>Yamaha YBR125</li>
            <li>Honda VFR800i</li>
            <li>Honda CBR1100XX</li>
            <li>BMW R1200GS LC</li>
        </ol>
    </section>
    <section class="prawy2">
        <h2>Statystyki</h2>
        <p>Wpisanych wycieczek: 
        <?php
            include "DB/dbconnect.php";
            $connect=mysqli_connect($host, $dblogin, $dbpassword, $dbname);
            $query="SELECT COUNT(id) FROM wycieczki";
            $result=mysqli_query($connect, $query);
            mysqli_close($connect);
            while($row=mysqli_fetch_row($result))
            echo $row[0];
        ?>
        </p>
        <p>Ukytkowników forum: 200</p>
        <p>Przesłanych zdjęć: 1300</p>
    </section>
    <section class="stopka">
        <p>Stronę wykonał: PanKrzysztof</p>
    </section>
</body>
</html>