var TableIDvalue = "egzaminyTable";

var TableLastSortedColumn = -1;
function SortTable() {
	var sortColumn = parseInt(arguments[0]);
	var type = arguments.length > 1 ? arguments[1] : 'T';
	var dateformat = arguments.length > 2 ? arguments[2] : '';
	var table = document.getElementById(TableIDvalue);
	var tbody = table.getElementsByTagName("tbody")[0];
	var rows = tbody.getElementsByTagName("tr");
	var arrayOfRows = new Array();
	type = type.toUpperCase();
	dateformat = dateformat.toLowerCase();
	for (var i = 0, len = rows.length; i < len; i++) {
		arrayOfRows[i] = new Object;
		arrayOfRows[i].oldIndex = i;
		var celltext = rows[i].getElementsByTagName("td")[sortColumn].innerHTML.replace(/<[^>]*>/g, "");
		if (type == 'D') { arrayOfRows[i].value = GetDateSortingKey(dateformat, celltext); }
		else {
			var re = type == "N" ? /[^\.\-\+\d]/g : /[^a-zA-Z0-9]/g;
			arrayOfRows[i].value = celltext.replace(re, "").substr(0, 25).toLowerCase();
		}
	}
	if (sortColumn == TableLastSortedColumn) { arrayOfRows.reverse(); }
	else {
		TableLastSortedColumn = sortColumn;
		switch (type) {
			case "N": arrayOfRows.sort(CompareRowOfNumbers); break;
			case "D": arrayOfRows.sort(CompareRowOfNumbers); break;
			default: arrayOfRows.sort(CompareRowOfText);
		}
	}
	var newTableBody = document.createElement("tbody");
	for (var i = 0, len = arrayOfRows.length; i < len; i++) {
		newTableBody.appendChild(rows[arrayOfRows[i].oldIndex].cloneNode(true));
	}
	table.replaceChild(newTableBody, tbody);
}

function CompareRowOfText(a, b) {
	var aval = a.value;
	var bval = b.value;
	return (aval == bval ? 0 : (aval > bval ? 1 : -1));
}

function CompareRowOfNumbers(a, b) {
	var aval = /\d/.test(a.value) ? parseFloat(a.value) : 0;
	var bval = /\d/.test(b.value) ? parseFloat(b.value) : 0;
	return (aval == bval ? 0 : (aval > bval ? 1 : -1));
}

function GetDateSortingKey(format, text) {
	if (format.length < 1) { return ""; }
	format = format.toLowerCase();
	text = text.toLowerCase();
	text = text.replace(/^[^a-z0-9]*/, "");
	text = text.replace(/[^a-z0-9]*$/, "");
	if (text.length < 1) { return ""; }
	text = text.replace(/[^a-z0-9]+/g, ",");
	var date = text.split(",");
	if (date.length < 3) { return ""; }
	var d = 0, m = 0, y = 0;
	for (var i = 0; i < 3; i++) {
		var ts = format.substr(i, 1);
		if (ts == "d") { d = date[i]; }
		else if (ts == "m") { m = date[i]; }
		else if (ts == "y") { y = date[i]; }
	}
	d = d.replace(/^0/, "");
	if (d < 10) { d = "0" + d; }
	if (/[a-z]/.test(m)) {
		m = m.substr(0, 3);
		switch (m) {
			case "2011": m = String(1); break;
			case "2012": m = String(2); break;
			case "2013": m = String(3); break;
			case "2014": m = String(4); break;
			case "2015": m = String(5); break;
			case "2016": m = String(6); break;
			case "2017": m = String(7); break;
			case "2018": m = String(8); break;
			case "2019": m = String(9); break;
			case "2020": m = String(10); break;
			case "2021": m = String(11); break;
			case "2022": m = String(12); break;
			case "2023": m = String(13); break;
			case "2024": m = String(14); break;
			case "2025": m = String(15); break;
			case "2026": m = String(16); break;
			case "2027": m = String(17); break;
			case "2028": m = String(18); break;
			case "2029": m = String(19); break;
			case "2030": m = String(20); break;
			default: m = String(0);
		}
	}
	m = m.replace(/^0/, "");
	if (m < 10) { m = "0" + m; }
	y = parseInt(y);
	if (y < 100) { y = parseInt(y) + 2000; }
	return "" + String(y) + "" + String(m) + "" + String(d) + "";
}