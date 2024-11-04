function zamow()
{
    let numer = document.getElementById("liczba").value
    let R = document.getElementById("R").value
    let G = document.getElementById("G").value
    let B = document.getElementById("B").value
    let kolor = document.getElementById("kolor")
    const wynik = document.querySelector("p#wynik")
    let zelek
    if(numer == 1)
    {
        zelek="miś"
    }
    else if (numer == 2)
    {
        zelek="żabka"
    }
    else if (numer == 3)
    {
        zelek="serce"
    }
    else if (numer >= 4)
    {
        zelek="inny"
    }
    wynik.innerHTML = "Zamówiełeś żelka: "+zelek;
    kolor.style.backgroundColor="rgb("+R+", "+G+", "+B+")";
}