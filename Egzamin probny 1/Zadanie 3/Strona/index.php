<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wizytówki</title>
    <link rel="stylesheet" href="CSS/styl4.css">
</head>
<body>
    <section class="baner">
        <h1>Wizytówki pracowników</h1>
        <form action="" method="post">
            <input type="numer" name="numer" value="1" maxlength="1">
            <input type="submit" value="WYŚWIETL">
        </form>
    </section>
    <section class="wizutowki">
        <?php
            $numer = $_POST['numer'];
            include "dbconnect.php";
            $connect = mysqli_connect($host, $dblogin, $dbpassword, $db);
            $query1 = "SELECT id, imie, nazwisko, adres, miasto FROM pracownicy WHERE id='$numer';";
            $result1 = mysqli_query($connect, $query1);
            mysqli_close($connect);
            while ($row1 = mysqli_fetch_row($result1))
            {
                echo '<img src="IMG/'.$row1[0].'.jpg" alt="pracownik"><br>
                <h2>'.$row1[1].' '.$row1[2].'</h2><br>
                <h4>Adres: </h4>'.$row1[3].', '.$row1[4];
            }
        ?>
    </section>
    <section class="stopka1">
        <img src="IMG/obraz.jpg" alt="pracownicy firmy">
    </section>
    <section class="stopka2">
        <p>Autorem wizytownika jest: Krzysztof Holeczko</p>
        <a href="http://agencjareklamowa543.pl/" target="_blank">Zobacz nasze realizacje</a>
    </section>
    <section class="stopka3">
        <p>Osoby proszone o podpisanie dokumentu RODO:</p>
        <ol>
            <?php
                include "dbconnect.php";
                $connect2 = mysqli_connect($host, $dblogin, $dbpassword, $db);
                $query2 = "SELECT imie, nazwisko FROM pracownicy WHERE czyRODO=0;";
                $result2 = mysqli_query($connect2, $query2);
                mysqli_close($connect2);
                while($row2 = mysqli_fetch_row($result2))
                {
                    echo "<li>".$row2[0]." ".$row2[1]."</li>";
                }
            ?>
        </ol>
    </section>
</body>
</html>