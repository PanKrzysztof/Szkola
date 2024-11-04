function dane()
{
    let imie=document.getElementById("imie").value
    let nazw=document.getElementById("nazwisko").value
    let em=(document.getElementById("email").value).toLowerCase()
    let usl=document.getElementById("usluga").value
    const dane=document.querySelector("p#wynik")
    dane.innerHTML=imie+" "+nazw+"<br>"+em+"<br>Usługa: "+usl;
}