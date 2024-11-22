<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane osobowe</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <section class="baner">
        <h1>Dane osobowe pracowników</h1>
    </section>
    <section class="lewy">
        <ol>
            <li><a href="index.php">Wyświetl dane</a></li>
            <li><a href="formularz.php">Wpisz dane</a></li>
        </ol>
    </section>
    <section class="prawy">
        <h2>Dane osobowe</h2>
        <table>
        <tr>
            <th>Id</th>
            <th>Nazwisko</th>
            <th>Imię</th>
            <th>PESEL</th>
        </tr>
            <?php
                include "DB/dbconnect.php";
                $connect = mysqli_connect($host, $dblogin, $dbpassword, $dbname);
                $query1 = "SELECT * FROM pracownicy;";
                $result1 = mysqli_query($connect, $query1);
                while ($row = mysqli_fetch_row($result1))
                {
                    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
                }
                mysqli_close($connect);
            ?>
        </table>
    </section>
    <section class="stopka">
        <h5>Autor strony: Krzysztof Holeczko</h5>
    </section>
</body>
</html>