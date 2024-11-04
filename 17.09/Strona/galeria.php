<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
    <section class="baner">
        <h1>Zdjęcia</h1>
    </section>
    <section class="lewy">
        <h2>Tematy zdjęć</h2>
        <ol>
            <li>Zwierzęta</li>
            <li>Krajobrazy</li>
            <li>Miasta</li>
            <li>Przyroda</li>
            <li>Samochody</li>
        </ol>
    </section>
    <section class="srodek">
        <?php
            $con=mysqli_connect("localhost","root","","motory");
            $kw1="SELECT plik, tytul, imie, nazwisko FROM zdjecia JOIN autorzy ON zdjecia.autorzy_id=autorzy.id ORDER BY nazwisko ASC";
            $w1=mysqli_query($con, $kw1);
            while($res1=mysqli_fetch_row($tab1))
            {
                echo "<section class='zdjecie'>";
                echo "<img src=$res1[0] alt='zdjecie'>";
                echo "<h3>$res1[1]</h3>";
                if($res1[2]>40)
                {
                    echo "<p>Autor: $res1[3] $res1[4]. <br>Wiele osób polubiło ten obraz</p>";
                }                
                echo "<a href=$res1[0] download=$res1[0]>Pobierz</a>";
                echo "</section>";
            }
        ?>
    </section>
    <section class="prawy">
        <h2>Najbardziej lubiane</h2>
            <?php
                $p2="SELECT tytul, plik FROM zdjecia WHERE polubienia >= 100";
                $w2=mysqli_query($con, $p2);
                mysqli_close($con);
            ?>
        <b>Zobacz wszystkie nasze zdjęcia</b>
    </section>
    <section class="stopka">
        <h5>Stronę wykonał: Krzysztof Holeczko</h5>
    </section>
</body>
</html>