function loadXMLDoc(filename, callback) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState === 4 && this.status === 200) {
        callback(this.responseXML);
      }
    };
    xhttp.open("GET", filename, true);
    xhttp.send();
  }
  
  function displayVersionInfo(xml) {
    var version = xml.querySelector("version").textContent;
    var builtOn = xml.querySelector("builtOn").textContent;
    var revision = xml.querySelector("revision").textContent;
  
    var versionInfoElement = document.querySelector(".version-info");
    versionInfoElement.textContent = `${version} built on ${builtOn} Revision ${revision}`;
  }
  
  loadXMLDoc("src/appversion.xml", displayVersionInfo);
  