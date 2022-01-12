function number() {
    var x = prompt("Podaj liczbę (całkowita): ") * 1
    var a = x > 0 ? "Liczba " + x + " jest dodatnia" :
        (x < 0 ? "Liczba " + x + " jest ujemna" :
            "Liczba " + x + " to zero!")
    alert(a)
}

function zakres() {
    var x = parseInt(prompt("Podaj liczbę (START)"))
    var y = parseInt(prompt("Podaj liczbę (END)"))
    var z = " "
    for (i = x; i <= y; i++) {
        z += i + ", "
    }
    for (i = x; i >= y; i--) {
        z += i + ", "
    }
    alert(z)
}























































































//Jan Kupczyk