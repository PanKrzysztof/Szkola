<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motocykle</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <img src="motor.png" alt="motocykl" class="motor">
    <section class="baner">
        <h1>Motocykle - moja pasja</h1>
    </section>
    <section class="lewy">
        <h2>Gdzie pojechać?</h2>
            <?php
                $con=mysqli_connect("localhost","root","","motory");
                $p1="SELECT `nazwa`, `opis`, `poczatek`, zrodlo FROM `wycieczki` JOIN zdjecia ON wycieczki.zdjecia_id=zdjecia.id";
                $pyt=mysqli_query($con, $p1);
                while($linia=mysqli_fetch_row($pyt))
                {
                    echo "<dt>Termin listy: $linia[0], rozpoczyna się w $linia[2], <a href=".$linia[3].".jpg".">zobacz zdjęcie</a></dt>";
                }
            ?>
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
            $p2="SELECT COUNT(id) FROM `wycieczki`";
            $pyt2=mysqli_query($con, $p2);
            while($linia2=mysqli_fetch_row($pyt2))
            echo $linia2[0];
            mysqli_close($con);
        ?>
        </p>
        <p>Ukytkowników forum: 200</p>
        <p>Przesłanych zdjęć: 1300</p>
    </section>
    <section class="stopka">
        <p>Stronę wykonał: Krzysztof Holeczko</p>
    </section>
</body>
</html>