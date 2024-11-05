<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Wrocław</title>
    <link rel="stylesheet" href="CSS/styl2.css">
</head>
<body>
    <section class="baner1">
        <img src="IMG/logo.png" alt="meteo">
    </section>
    <section class="baner2">
        <h1>Prognoza dla Wrocławia</h1>
    </section>
    <section class="baner3">
        <p>maj, 2019 r.</p>
    </section>
    <section class="srodek">
        <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>
                <?php
                    include "dbconnect.php";
                    $connect = mysqli_connect($host, $dblogin, $dbpassword, $db);
                    $query = "SELECT * FROM pogoda WHERE miasta_id=1 ORDER BY data_prognozy ASC;";
                    $result = mysqli_query($connect, $query);
                    mysqli_close($connect);
                    while ($row = mysqli_fetch_row($result))
                    {
                        echo "<tr><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td></tr>";
                    }
                ?>
        </table>
    </section>
    <section class="lewy">
        <img src="IMG/obraz.jpg" alt="Polska, Wrocław">
    </section>
    <section class="prawy">
        <a href="kwerendy.txt" download>Pobierz kwerendy</a>
    </section>
    <section class="stopka">
        <p>Stronę wykonał: Krzysztof Holeczko</p>
    </section>
</body>
</html>