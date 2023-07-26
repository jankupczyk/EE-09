function throttle(func, delay) {
    let isThrottled = false;
    let args;
    let context;
  
    return function () {
      if (isThrottled) {
        args = arguments;
        context = this;
        return;
      }
  
      func.apply(this, arguments);
  
      isThrottled = true;
  
      setTimeout(() => {
        isThrottled = false;
        if (args) {
          func.apply(context, args);
          args = null;
          context = null;
        }
      }, delay);
    };
  }
  
  document.getElementById("inputed").addEventListener(
    "keyup",
    throttle((e) => {
      let searchQuery = e.target.value.trim().toLowerCase();
      let rows = document.querySelectorAll("tr");
  
      Array.from(rows).slice(1).forEach((row) => {
        let title = row.childNodes[2].textContent.toLowerCase();
  
        if (!title.includes(searchQuery)) {
          row.style.display = "none";
        } else {
          row.style.display = "table-row";
        }
      });
  
      if (searchQuery === "") {
        Array.from(rows).slice(1).forEach((row) => {
          row.style.display = "table-row";
        });
      }
    }, 300)
  );
  