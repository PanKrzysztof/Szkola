function oblicz()
{
    let waga = document.getElementById("waga").value;
    let wzrost = document.getElementById("wzrost").value/100;
    let bmi = waga/Math.pow(wzrost, 2);
    let kategoria;
    
    bmi = Math.round(bmi*100)/100;
    document.getElementById("wynik").innerHTML = "Twój BMI = "+bmi;
    
    if (bmi < 18.5) kategoria='<p style="color: red;">Niedowaga</p>';
    else if (bmi >= 18.5 && bmi < 24.9) kategoria='<p style="color: green;">Norma</p>'; 
    else if (bmi >= 25.0 && bmi < 29.9) kategoria='<p style="color: red;">Nadwaga</p>'; 
    else if (bmi >= 30.0 && bmi < 34.9) kategoria='<p style="color: red;">Otyłość 1st.</p>'; 
    else if (bmi >= 35.0 && bmi < 39.9) kategoria='<p style="color: red;">Otyłość 2st.</p>'; 
    else if (bmi >= 39.9) kategoria='<p style="color: red;">Otyłość 3st.</p>'; 
    document.getElementById("kategoria").innerHTML = kategoria;
}