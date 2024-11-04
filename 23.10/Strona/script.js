function liczenie()
{
    let A = parseInt(document.getElementById("A").value);
    let R = parseInt(document.getElementById("R").value);
    let N = parseInt(document.getElementById("N").value);
    let wynik = document.getElementById("wynik");
    let res = "Ciąg arytmetyczny zawiera wyrazy: ";

    for(let b=A; N>0; N--)
    {
        res += b+ ", "
        b = b+R;
    }

    wynik.innerHTML =  res;
}