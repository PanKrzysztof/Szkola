function wiadomosciZkraju()
{
    let tytul = "<h2>Szczepimy seniorów</h2>";
    let tresc = "<p>Od piątku osoby powyżej 80 lat mogą zarejestrować się na szczepienie przeciw COVID-19. Do wyboru mają niemal sześć tysięcy przychodni, w których od 25 stycznia będą odbywać się szczepienia. Termin można zarezerwować telefonicznie, przez internet lub w punkcie szczepień. Na szczepienie przeciw COVID-19 od piątku mogą się umawiać seniorzy powyżej 80. roku życia, a tydzień póniej ruszą zapisy dla osób, które ukończyły 70 lat. Szczepienia dla seniorów rozpoczną się 25 stycznia.</p>"
    document.getElementById("wynik1").innerHTML = tytul + tresc;
    document.getElementById("wynik2").innerHTML = "";
    document.getElementById("wynik3").innerHTML = "";
    document.getElementById("wynik4").innerHTML = "";
}
function sekcjaSportowa()
{
    let tytul = "<h2>Stoch i Kubacki na podium w Bischofshofen</h2>";
    let tresc = "<p>W środę w Bischofshofen odbędzie się ostatni konkurs 69. Turnieju Czterech Skoczni. Po trzech zawodach prowadzi Kamil Stoch z dużą przewagą nad Dawidem Kubackim i Norwegiem Halvorem Egnerem Granerudem. Skocznia im. Paula Ausserleitnera w Bischofshofen, gdzie tradycyjnie kończy się TCS, jest szczęśliwa dla reprezentantów Polski, którzy wygrali tu trzy z ostatnich czterech konkursów - Stoch w 2017 i 2018, a Kubacki - w ubiegłym roku.</p>";
    document.getElementById("wynik1").innerHTML = "";
    document.getElementById("wynik2").innerHTML = tytul + tresc;
    document.getElementById("wynik3").innerHTML = "";
    document.getElementById("wynik4").innerHTML = "";
}
function aktualnosci()
{
    let tytul = "<h2>Dzień Babci 2021. Pomysły na prezent i historia święta w Polsce</h2>"
    let tresc = "<p>Dzień Babci to wyjątkowe święto, w którym zewsząd płyną życzenia skierowane właśnie w stronę babć. Najmłodsi własnoręcznie lub z drobną pomocy wykonują piękne laurki, a nieco starsze wnuczęta z pewnością mają przygotowany niejeden prezent. Tego dnia w szkołach często przygotowywane są także różne przedstawienia, a oryginalne scenariusze często wywołują u dziadków łzy wzruszenia.</p>"
    document.getElementById("wynik1").innerHTML = "";
    document.getElementById("wynik2").innerHTML = "";
    document.getElementById("wynik3").innerHTML = tytul + tresc;
    document.getElementById("wynik4").innerHTML = "";
}
function sekcjaOgloszen()
{
    let tytul = "<h2>Zaginione / znalezione</h2>";
    let tresc = "<p>W Oławie, na ulicy Lipowej w piątek wieczorem znalazłam czarnego małego kotka. Jest zadbany i ufny, ma czerwoną obróżkę. Telefon 600100200.</p>";
    document.getElementById("wynik1").innerHTML = "";
    document.getElementById("wynik2").innerHTML = "";
    document.getElementById("wynik3").innerHTML = "";
    document.getElementById("wynik4").innerHTML = tytul + tresc;
}