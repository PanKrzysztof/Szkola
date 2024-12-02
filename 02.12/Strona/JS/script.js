function oblicz()
{
    let rodzaj = document.getElementById("rodzaj-paliwa").value;
    let litry = document.getElementById("litry").value;
    let koszt;

    if (rodzaj == 1)
    {
        koszt = 4;
    }
    else if (rodzaj == 2)
    {
        koszt = 3.5;
    }
    else
    {
        koszt = 0;
    }
    document.getElementById("wynik").innerHTML = "koszt paliwa: "+koszt*litry+" zł";
}