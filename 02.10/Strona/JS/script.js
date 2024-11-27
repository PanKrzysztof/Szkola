function dodawanie()
{
    let a=document.getElementById("a").value;
    let b=document.getElementById("b").value;
    if (a == "" || b == "") document.getElementById("wynik").innerHTML = "Proszę uzupełnić obie liczby.";
    else
    {
        let suma=parseInt(a)+parseInt(b);
        document.getElementById("wynik").innerHTML=a+"+"+b+"="+suma;
    }
}
function odejmowanie()
{   
    let a=document.getElementById("a").value;
    let b=document.getElementById("b").value;
    if (a == "" || b == "") document.getElementById("wynik").innerHTML = "Proszę uzupełnić obie liczby.";
    else
    {
        let roznica=parseInt(a)-parseInt(b);
        document.getElementById("wynik").innerHTML=a+"-"+b+"="+roznica;
    }
}
function mnozenie()
{
    let a=document.getElementById("a").value;
    let b=document.getElementById("b").value;
    if (a == "" || b == "") document.getElementById("wynik").innerHTML = "Proszę uzupełnić obie liczby.";
    else
    {
        let iloczyn=parseInt(a)*parseInt(b);
        document.getElementById("wynik").innerHTML=a+"*"+b+"="+iloczyn;
    }
}
function dzielenie()
{
    let a=document.getElementById("a").value;
    let b=document.getElementById("b").value;
    if (a == "" || b == "") document.getElementById("wynik").innerHTML = "Proszę uzupełnić obie liczby.";
    else
    {
        if(parseInt(b) == 0) 
        {
            document.getElementById("wynik").innerHTML = "nie dzielimy przez zero!";
        }
        else
        {
            let iloraz=parseInt(a)/parseInt(b);
            document.getElementById("wynik").innerHTML = a+"/"+b+"="+iloraz;
        }
    }
}

function pole()
{
    let bok = document.getElementById("bok").value;
    if(bok == "")
    {
        document.getElementById("wynik2").innerHTML = "Należy wpisać wartość liczbową.";
    }
    else
    {
        let wynik = parseInt(bok)*parseInt(bok);
        document.getElementById("wynik2").innerHTML = "P = a<sup>2</sup> = "+wynik;
    }
}
function obw()
{
    let bok = document.getElementById("bok").value;
    if(bok == "")
    {
        document.getElementById("wynik2").innerHTML = "Należy wpisać wartość liczbową.";
    }
    else
    {
        let wynik = parseInt(bok)*4;
        document.getElementById("wynik2").innerHTML = "Obw = 4a = "+wynik;
    }
}

function kelwiny()
{
    let temp = document.getElementById("temp").value;
    if (temp == "")
    {
        document.getElementById("wynik3").innerHTML = "Błąd danych";
    }
    else
    {
        let wynik = parseInt(temp)+273.15;
        document.getElementById("wynik3").innerHTML = wynik+"°K";
    }
}
function fahrenheity()
{
    let temp = document.getElementById("temp").value;
    if (temp == "")
    {
        document.getElementById("wynik3").innerHTML = "Błąd danych";
    }
    else
    {
        let wynik = (parseInt(temp)*1.8)+32;
        document.getElementById("wynik3").innerHTML = wynik+"°F";
    }
}