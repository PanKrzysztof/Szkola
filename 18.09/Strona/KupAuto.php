<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komis aut</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <section class="baner">
        <h1><em>KupAuto!</em> Internetowy Komis Samochodowy</h1>
    </section>
    <section class="blok1">
        <?php
            $con=mysqli_connect("localhost", "root", "", "kupauto");
            $kw1="SELECT model, rocznik, przebieg, paliwo, cena, zdjecie FROM samochody WHERE id=10;";
            $tab=mysqli_query($con, $kw1);
            while($res=mysqli_fetch_row($tab))
            {
                echo "<img src='$res[5]' alt='oferta dnia'>";
                echo "<h4>Oferta Dnia: Toyota$res[0]</h4>";
                echo "<p>Rocznik $res[1] Przebieg: $res[2] Rodzaj paliwa: $res[3].</p>";
                echo "<h4> Cena: $res[4]";
            }
        ?>
    </section>
    <section class="blok2">
        <h2>Oferty Wyróżnione</h2>
    </section>
    <section class="blok3">
        <h2>Wybierz markę</h2>
        <form method="POST" action="KupAuto.php">
            <input type="submit" value="Wyszukaj">
        </form>
    </section>
    <section class="stopka">
        <p>Stronę wykonał: Krzysztof Holeczko</p>
        <a href="http://firmy.pl/komis">Znajdź nas także</a>
    </section>
</body>
</html>