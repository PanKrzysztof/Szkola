function pszczola()
{
    let efekty = document.getElementsByName("efekt");
    let wybranyEfekt = Array.from(efekty).find((element) => element.checked)?.value;
    if (wybranyEfekt == "blur")
    {
        console.log("blur");
        document.getElementById("pszczola").innerHTML = '<img src="IMG/pszczola.jpg" alt="szczoła na fioletowym kwiatku" style="filter: blur(5px);">';
    }
    if (wybranyEfekt == "sepia")
    {
        console.log("sepia");
        document.getElementById("pszczola").innerHTML = '<img src="IMG/pszczola.jpg" alt="szczoła na fioletowym kwiatku" style="filter: sepia(100%);">';
    }
    if (wybranyEfekt == "negatyw")
    {
        console.log("negatyw");
        document.getElementById("pszczola").innerHTML = '<img src="IMG/pszczola.jpg" alt="szczoła na fioletowym kwiatku" style="filter: invert(100%);">';
    }
}
function kolorowy()
{
    document.getElementById("pomarancza").innerHTML = '<img src="IMG/pomarancza.jpg" alt="drzewo pomarańczy">';
}
function czarnobialy()
{
    document.getElementById("pomarancza").innerHTML = '<img src="IMG/pomarancza.jpg" alt="drzewo pomarańczy" style="filter: grayscale(100%);">';
}
function owoce()
{
    let suwak = document.getElementById("suwak-owoce").value;
    document.getElementById("owoce").innerHTML = '<img src="IMG/owoce.jpg" alt="Kosz pełen owoców" style="opacity: '+suwak+'%;">';
}
function zlow()
{
    let suwak = document.getElementById("suwak-zlow").value;
    document.getElementById("zlow").innerHTML = '<img src="IMG/zolw.jpg" alt="Żółw w wodzie" style="filter: brightness('+suwak+'%);">';
}