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
        <h2>Podaj dane</h2>
        <form method="post" action="">
            <label for="nazwisko">Nazwisko</label><br>
            <input type="text" id="nazwisko" name="nazwisko"><br>
            <label for="imie">Imię</label><br>
            <input type="text" id="imie" name="imie"><br>
            <label id="pesel">PESEL</label><br>
            <input type="text" id="pesel" name="pesel" maxlength="10"><br>
            <input type="submit">
        </form>
        <section class="wynik">
        <?php
            $nazwisko = $_POST["nazwisko"];
            $imie = $_POST["imie"];
            $pesel = $_POST["pesel"];
            if ($nazwisko == NULL) echo "brak nazwiska";
            else if ($imie == NULL) echo "brak imienia";
            else if ($pesel == NULL) echo "brak numeru PESEL";
            else
            {
                $S = 1*$pesel[0]+3*$pesel[1]+7*$pesel[2]+9*$pesel[3]+1*$pesel[4]+3*$pesel[5]+7*$pesel[6]+9*$pesel[7]+1*$pesel[8]+3*$pesel[9];
                $M = $S%10;
                if ($M == 0)
                {
                    $pesel[10]=$M;
                }
                else
                {
                    $M = 10 - $M;
                    $pesel[10]=$M;
                }  
                include "DB/dbconnect.php";
                $connect = mysqli_connect($host, $dblogin, $dbpassword, $dbname);
                $query2 = "INSERT INTO pracownicy (nazwisko, imie, PESEL) VALUES ('$nazwisko', '$imie', '$pesel');";
                $result2 = mysqli_query($connect, $query2);
                if ($result2 == true) echo "Dane zostało poprawnie dodane";
                else echo "Bład wysłania do bazy danych";
                mysqli_close($connect);
            }
        ?>
        </section>
    </section>
    <footer class="stopka">
        <h5>Autor strony: Krzysztof Holeczko</h5>
    </footer>
</body>
</html>