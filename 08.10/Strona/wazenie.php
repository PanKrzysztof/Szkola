<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ważenie samochodów ciężarowych</title>
    <link rel="stylesheet" href="CSS/styl.css">
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
            include "DB/dbconnect.php";
            $connect = mysqli_connect($host, $dblogin, $dbpassword, $dbname);
            $query = "SELECT ulica FROM lokalizacje";
            $result = mysqli_query($connect, $query);
            mysqli_close($connect);
            while($row=mysqli_fetch_row($result))
            {
                echo "<li>ulica ".$row[0]."</li>";
            }
        ?>
        </ol>
        <h2>Kontakt</h2>
        <a href="mailto:wazenie@wroclaw.pl">napisz</a>
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
                    include "DB/dbconnect.php";
                    $connect = mysqli_connect($host, $dblogin, $dbpassword, $dbname);
                    $query = "SELECT rejestracja, waga, dzien, czas, ulica FROM wagi JOIN lokalizacje ON wagi.lokalizacje_id=lokalizacje.id WHERE waga >5";
                    $result = mysqli_query($connect, $query);
                    mysqli_close($connect);
                    while($row=mysqli_fetch_row($result))
                    {
                        echo
                        "<tr>
                            <td>".$row[0]."</td>
                            <td>".$row[4]."</td>
                            <td>".$row[1]."</td>
                            <td>".$row[2]."</td>
                            <td>".$row[3]."</td>
                        </tr>";
                    }
                    ?>
            </tr>
        </table>
        <?php
            include "DB/dbconnect.php";
            $connect = mysqli_connect($host, $dblogin, $dbpassword, $dbname);
            $query = "INSERT INTO wagi (lokalizacje_id, waga, rejestracja, dzien, czas) VALUES ('5', FLOOR(1+RAND()*10), 'DW12345', CURRENT_DATE, CURRENT_TIME)";
            $result = mysqli_query($connect, $query);
            mysqli_close($connect);
            header("refresh: 10");
        ?>
    </section>
    <section class="prawy">
        <img src="IMG/obraz2.jpg" alt="tir" id="obraz2">
    </section>
    <section class="stopka">
        <p>Stronę wykonał: PanKrzysztof</p>
    </section>
</body>
</html>