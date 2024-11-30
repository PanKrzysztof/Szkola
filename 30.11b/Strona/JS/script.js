function generuj()
{
    let numer = document.getElementById("numer").value;

    document.getElementById("pole1").style.backgroundColor = "hsl("+numer+", 100%, 50%)";
    document.getElementById("pole2").style.backgroundColor = "hsl("+numer+", 80%, 50%)";
    document.getElementById("pole3").style.backgroundColor = "hsl("+numer+", 60%, 50%)";
    document.getElementById("pole4").style.backgroundColor = "hsl("+numer+", 40%, 50%)";
    document.getElementById("pole5").style.backgroundColor = "hsl("+numer+", 20%, 50%)";
}