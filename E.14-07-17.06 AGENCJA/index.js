function przelicz() {
    var a = document.getElementById("daneA").value;
    var b = document.getElementById("daneB").value;
    var cena = (a * 4000) + (b * 2000) + (2 * 1000);
    var cenabez = cena - 2000;

    if (document.getElementById("check").checked == true) {
        document.getElementById("wynik").innerHTML = `Koszt mieszkania wyniesie ${cena} zł`;
    } else if (document.getElementById("check").checked == false) {
        document.getElementById("wynik").innerHTML = `Koszt mieszkania wyniesie ${cenabez} zł`;
    }
}































































































// Jan Kupczyk