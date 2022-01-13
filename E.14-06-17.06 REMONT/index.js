function przelicz() {
    var a = document.getElementById("dane").value;
    if (document.getElementById("20x20").checked == true) {
        document.getElementById("wynik").innerHTML = `Koszt malowania ${a}m², wyniesie ${a * (35 * 2)} zł`;
    } else if (document.getElementById("25x12").checked == true) {
        document.getElementById("wynik").innerHTML = `Koszt malowania ${a}m², wyniesie ${a * (40 * 2)} zł`;
    } else {
        document.getElementById("wynik").innerHTML = "WYBIERZ ROZMIAR PŁYTKI!!!";
    }
}































































// Jan Kupczyk