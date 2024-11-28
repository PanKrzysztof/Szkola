<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hodowla świnek morskich</title>
    <link rel="stylesheet" href="CSS/styl.css">
</head>
<body>
    <section class="baner">
        <h1>Hodowla świnek morskich - zamów świnkowe maluszki</h1>
    </section>
    <section class="menu">
        <a href="peruwianka.php">Rasa Peruwianka</a>
        <a href="american.php">Rasa American</a>
        <a href="crested.php">Rasa Crested</a>
    </section>
    <section class="glowny">
        <img src="IMG/crested.png" alt="Świnka morska rasy crested">
        <?php
            include "DB/dbconnect.php";
            $connect = mysqli_connect($host, $dblogin, $dbpassword,$dbname);
            $query = "SELECT data_ur, miot, rasa FROM swinki JOIN rasy ON rasy_id=rasy.id WHERE rasy.id=7 GROUP BY miot;";
            $result = mysqli_query($connect, $query);
            mysqli_close($connect);
            while ($row = mysqli_fetch_row($result))
            {
                echo "<h2>Rasa: ".$row[2]."</h2><p>Data urodzenia: ".$row[0]."</p><p>Oznaczenie miotu: ".$row[1]."</p>";
            }
        ?>
        <hr>
        <h2>Świnki w tym miocie</h2>
        <?php
            include "DB/dbconnect.php";
            $connect = mysqli_connect($host, $dblogin, $dbpassword, $dbname);
            $query = "SELECT imie, cena, opis FROM swinki WHERE rasy_id=7;";
            $result = mysqli_query($connect, $query);
            mysqli_close($connect);
            while ($row = mysqli_fetch_row($result))
            {
                echo "<h3>".$row[0]." - ".$row[1]." zł</h3><p>".$row[2]."</p>";
            }
        ?>
    </section>
    <section class="prawy">
        <h3>Poznaj wszystkie rasy świnek morskich</h3>
        <ol>
            <?php
                include "DB/dbconnect.php";
                $connect = mysqli_connect($host, $dblogin, $dbpassword, $dbname);
                $query = "SELECT rasa FROM rasy;";
                $result = mysqli_query($connect, $query);
                mysqli_close($connect);
                while ($row = mysqli_fetch_row($result))
                {
                    echo "<li>".$row[0]."</li>";
                }
            ?>
        </ol>
    </section>
    <section class="stopka">
        <p>Stronę wykonał: PanKrzysztof</p>
    </section>
</body>
</html>