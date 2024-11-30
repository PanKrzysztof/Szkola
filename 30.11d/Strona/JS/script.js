let id_zamowienia = 0;
let ilosci = [20, 2, 10, 30];

function start() {
    for (let i = 0; i < ilosci.length; i++) 
    {
        let ilosc = ilosci[i];
        let elementId = "ilosc" + (i + 1);
        let element = document.getElementById(elementId);

        if (ilosc == 0) 
        {
            element.style.backgroundColor = "red";
        } 
        else if (ilosc >= 1 && ilosc <= 5) 
        {
            element.style.backgroundColor = "yellow";
        } 
        else 
        {
            element.style.backgroundColor = "Honeydew";
        }

        element.innerHTML = ilosc;
    }
}
function aktualizacja(numer)
{
    let nowa_wartosc = prompt("Podaj nową ilość:");
    switch (numer)
    {
        case 0:
            ilosci[0] = nowa_wartosc;
            break;
        case 1:
            ilosci[1] = nowa_wartosc;
            break;
        case 2:
            ilosci[2] = nowa_wartosc;
            break;
        case 3:
            ilosci[3] = nowa_wartosc;
            break;
    }
    start();
}
function zamow(numer)
{
    let produkt;
    id_zamowienia++;
    switch (numer)
    {
        case 0:
            produkt = "Skrętka U/UTP drut";
            break;
        case 1:
            produkt = "Skrętka U/UTP linka";
            break;
        case 2:
            produkt = "Wtyki 8P8C";
            break;
        case 3:
            produkt = "Moduły Keystone";
            break;
    }
    alert("Zamówienie nr: "+id_zamowienia+" Produkt: "+produkt);
}