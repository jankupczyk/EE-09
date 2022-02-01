document.getElementById("inputed").addEventListener("keyup", (e) => {
    let searchQuery = e.target.value.toLowerCase();
    let rows = document.querySelectorAll('tr');

    Array.from(rows).slice(1).forEach(row => {
        if (!row.childNodes[2].textContent.toLowerCase().includes(searchQuery)) {
            row.style.display = "none";
        }
        else {
            row.style.display = "table-row";
        }        
    });
});
