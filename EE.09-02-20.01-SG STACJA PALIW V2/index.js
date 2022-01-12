function paliwo() {
    const a = 100;

    let dystans = document.getElementById("km");

    let spalanie = document.getElementById("spalanie");

    let wynik = document.getElementById("eq");

    const cena = dystans.value * spalanie.value;

    var suma = cena / a;

    wynik.innerHTML = `Potrzebujesz: ${suma} litrów paliwa`
}















































// Jan Kupczyk