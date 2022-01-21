const setToolTip = () => {
    let = ToolTipContent = document.querySelector(".ToolTip"),
        toolTipElements = document.querySelectorAll("td[data-label=\"TITLE\"]");

    const displayTooTip = (e, obj) => {
        ToolTipContent.innerText = obj.dataset?.tooltip ?? "";
        ToolTipContent.style.top = e.pageY + "px";
        ToolTipContent.style.opacity = 1;
    }

    toolTipElements.forEach((elem, _) => {
        elem.addEventListener("mouseenter", (e) => {
            displayTooTip(e, this);
        });

        elem.addEventListener("mouseout", (e) => {
            ToolTipContent.style.display = 0
        })
    })
}

