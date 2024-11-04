<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poziomy rzek</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <section class="baner1">
        <img src="obraz1.png" alt="Mapa Polski">
    </section>
    <section class="baner2">
        <h1>Rzeki w województwie dolnośląskim</h1>
    </section>
    <section class="menu">
        <form action="" method="POST">
            <input type="radio" name="wybor" value="1" id="all"><label for=" all">Wszystkie</label>
            <input type="radio" name="wybor" value="2" id="ost"><label for=" all">Ponad stan ostrzegawczy</label>
            <input type="radio" name="wybor" value="3" id="ala"><label for=" all">Ponad stan alarmowy</label>
            <button type="submit">Pokaż</button>
        </form>
    </section>
    <section class="lewy">
        <h3>Stany na dzień 2022-05-05</h3>
        <table>
            <tr>
                <td>Wodomierz</td>
                <td>Rzeka</td>
                <td>Ostrzegawczy</td>
                <td>Alarmowy</td>
                <td>Aktualny</td>
            <tr>
            <?php
                $con=mysqli_connect("localhost", "root", "", "rzeki");
                if(isset($_POST['wybor']) && $_POST['wybor']==1)
                {
                    $p1="SELECT nazwa, rzeka, stanOstrzegawczy, stanAlarmowy, stanWody FROM wodowskazy INNER JOIN pomiary ON wodowskazy.id=pomiary.wodowskazy_id WHERE dataPomiaru = '2022-05-05'";
                }
                $tab1=mysqli_query($con, $p1);
                while($row1=mysqli_fetch_row($tab1))
                {
                    echo "<tr><td>$row1[0]</td><td>$row1[1]</td><td>$row1[2]</td><td>$row1[3]</td><td>$row1[4]</td></tr>";
                }
            ?>
        </table>
    </section>
    <section class="prawy">
        <h3>Informacje</h3>
        <ul>
            <li>Brak ostrzeżeń o burzach z gradem</li>
            <li>Smog w mieście Wrocław</li>
            <li>Silny wiatr w Karkonoszach</li>
        </ul>
        <h3>Średnie stany wód</h3>
        <?php
            $p4="SELECT dataPomiaru, AVG (stanwody) FROM pomiary GROUP BY dataPomiaru";
            $tab4=mysqli_query($con, $p4);
            while($row4=mysqli_fetch_row($tab4))
            {
                echo "<br>$row4[0]".": ".".$row4[1].","";
            }
            $con=mysqli_close($con);
        ?>
        <br>
        <a href="https://komunikaty.pl">Dowiedz się więcej</a>
        <img src="obraz2.jpg" alt="rzeka" class="obraz2">
    </section>
    <section class="stopka">
        <p>Stronę wykonał: Krzysztof Holeczko</p>
    </section>
</body>
</html>