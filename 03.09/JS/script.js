function liczenie()
{
    let a = document.getElementById("liczba1").value;
    let b = document.getElementById("liczba2").value;
    let c = document.getElementById("liczba3").value;

    a = parseInt(a);
    b = parseInt(b);
    c = parseInt(c);
    let s = ((a + b + c)/3)
    document.getElementById("wynik").innerHTML = "średnia: " + s;
}