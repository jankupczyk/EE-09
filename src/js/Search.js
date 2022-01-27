document.getElementById("inputed").addEventListener("keyup", (e) => {
    let searchQuery = e.target.value.toLowerCase();
    let rows = document.querySelectorAll('tr');

    for (i = 1; i < rows.length; i++) {
        if (!rows[i].childNodes[2].textContent.toLowerCase().includes(searchQuery)) {
            rows[i].style.display = "none";
        }
        else {
            rows[i].style.display = "table-row";
        }
    }
});