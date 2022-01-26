Search_Bar_Data = () => {
    let input = document.getElementById('inputed').value
    input = input.toLowerCase();
    let x = document.querySelectorAll('td');

    for (i = 0; i < x.length; i++) {
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display = "none";
        }
        else {
            x[i].style.display = "list-item";
        }
    }
}