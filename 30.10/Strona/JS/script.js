function Kawa()
{
    let numer = document.getElementById('numer_kawy').value;
    let waga = document.getElementById('waga_kawy').value;
    let cena = 0;
    let wynik = 0;
    if(numer == 1)
    {
        cena=5;
        wynik=cena*waga;
    }
    else if (numer == 2)
    {
        cena=7;
        wynik=cena*waga;
    }
    else if (numer == 3)
    {
        cena=6;
        wynik=cena*waga;
    }
    else
    {
        wynik = 0;
    }
    document.getElementById('wynik').innerHTML="Koszt zamówienia wynosi: "+wynik+"zł";
}