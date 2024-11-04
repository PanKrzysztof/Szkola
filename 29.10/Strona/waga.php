<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twój wskaźnik BMI</title>
    <link rel="stylesheet" href="CSS/styl4.css">
</head>
<body>
    <section class="baner">
        <h2>Oblicz wskaźnik BMI</h2>
    </section>
    <section class="logo">
        <img src="IMG/wzor.png" alt="liczymy BMI">
    </section>
    <section class="lewy">
        <img src="IMG/rys1.png" alt="zrzuć kalorie!">
    </section>
    <section class="prawy">
        <h1>Podaj dane</h1>
        <form action="" method="POST">
            Waga: <input type="number" name="waga" id="waga"><br>
            Wzrost[cm]: <input type="number" name="wzrost" id="wzrost"><br>
            <input type="submit" value="Licz BMI i zapisz wynik">
        </form>
        <?php
            $con = mysqli_connect("localhost", "root", "", "egzamin");
            $waga = $_POST['waga'];
            $wzrost = $_POST['wzrost'];
            if($waga != "" OR $wzrost != "")
            {
                $bmi = ($waga/pow($wzrost, 2))*10000;
                echo "Twoja waga: ".$waga."<br>Twój wzorst: ".$wzrost."<br>BMI wynosi: ".$bmi;

                if ($bmi >= 0 AND $bmi <=18)
                {
                    $bmi_id = 1;
                }
                else if ($bmi >= 19 AND $bmi <=25)
                {
                    $bmi_id = 2;
                }
                else if ($bmi >= 26 AND $bmi <=30)
                {
                    $bmi_id = 3;
                }
                else
                {
                    $bmi_id = 4;
                }
                $data = date("Y-m-d");
                $zapytanie1 = "INSERT INTO wynik (`bmi_id`, `data_pomiaru`, `wynik`) VALUES ($bmi_id, $data, $bmi);";
                //$wynik1 = mysqli_query($con, $zapytanie1);
            }
            else
            {
                echo "Wprowadź poprawne dane";
            }
        ?>
    </section>
    <section class="srodek">
        <table>
            <tr>
                <th>lp.</th>
                <th>Interpretacja</th>
                <th>zaczyna się od...</th>
            </tr>
            <?php
                $zapytanie2 = "SELECT id, informacja, wart_min FROM bmi;";
                $wynik2 = mysqli_query($con, $zapytanie2);
                while($row=mysqli_fetch_row($wynik2))
                {
                    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
                }
                mysqli_close($con);
            ?>
        </table>
    </section>
    <section class="stopka">
        Autor: Krzysztof Holeczko
    </section>
</body>
</html>