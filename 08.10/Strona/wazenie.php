<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ważenie samochodów ciężarowych</title>
    <link rel="stylesheet" href="Styl/styl.css">
</head>
<body>
    <section class="baner1">
        <h1>Ważenie pojazdów we Wrocławiu</h1>
    </section>
    <section class="baner2">
        <img src="IMG/obraz1.png" alt="waga">
    </section>
    <section class="lewy">
        <h2>Lokalizacje wag</h2>
        <ol>
        <?php
            $con = mysqli_connect("localhost", "root", "", "wazenietirow");
            $zapytanie1="SELECT ulica FROM lokalizacje";
            $w1=mysqli_query($con, $zapytanie1);
            while($rzad=mysqli_fetch_row($w1))
            {
                echo "<li>ulica ".$rzad[0]."</li>";
            }
        ?>
        </ol>
        <h2>Kontakt</h2>
        <a href="wazenie@wroclaw.pl">napisz</a>
    </section>
    <section class="srodek">
        <h2>Alerty</h2>
        <table>
            <tr>
                <th>rejestracja</th>
                <th>ulica</th>
                <th>waga</th>
                <th>dzień</th>
                <th>czas</th>
            </tr>
            <tr>
                <?php
                    $p4="SELECT rejestracja, waga, dzien, czas, ulica FROM wagi JOIN lokalizacje ON wagi.lokalizacje_id=lokalizacje.id WHERE waga >5";
                    $w2=mysqli_query($con, $p4);
                    while($rzad=mysqli_fetch_row($w2))
                    {
                        echo "<tr>
                                <td>$rzad[0]</td>
                                <td>$rzad[4]</td>
                                <td>$rzad[1]</td>
                                <td>$rzad[2]</td>
                                <td>$rzad[3]</td>
                            </tr>";
                    }
                ?>
            </tr>
        </table>
        <?php
        $p3="INSERT INTO wagi (lokalizacje_id, waga, rejestracja, dzien, czas) VALUES ('5', FLOOR(1+RAND()*10), 'DW12345', CURRENT_DATE, CURRENT_TIME)";
        $w3=mysqli_query($con, $p3);
        header("refresh: 10");
        mysqli_close($con);
        ?>
    </section>
    <section class="prawy">
        <img src="IMG/obraz2.jpg" alt="tir" id="obraz2">
    </section>
    <section class="stopka">
        <p>Stronę wykonał: Krzysztof Holeczko</p>
    </section>
</body>
</html>