function pseudoregex() { //regex
    var dane = document.getElementById("passwd").value;

    if (!dane == 1) {
        document.getElementById("wynik").style.color = "red";
        document.getElementById("wynik").innerHTML = "WPISZ HASŁO!";
    }
    else if (dane.search("[0-9]") > 0 && dane.length >= 7) {
        document.getElementById("wynik").style.color = "green";
        document.getElementById("wynik").innerHTML = "DOBRE";
    }
    else if (dane.search("[0-9]") > 0 && dane.length >= 4 && dane.length <= 6) {
        document.getElementById("wynik").style.color = "blue";
        document.getElementById("wynik").innerHTML = "ŚREDNIE";
    }

    else {
        document.getElementById("wynik").style.color = "orange";
        document.getElementById("wynik").innerHTML = "SŁABE";
    }
}




















































// Jan Kupczyk
