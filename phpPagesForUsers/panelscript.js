///////////////ADMIN PANEL////////////////

// get selected row
// display selected row data in text input

var table = document.getElementById("table"),
    rIndex;

for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
        rIndex = this.rowIndex;
        console.log(rIndex);

        document.getElementById("username").value = this.cells[1].innerHTML;
        document.getElementById("email").value = this.cells[2].innerHTML;
        document.getElementById("parola").value = this.cells[3].innerHTML;
        document.getElementById("tipcont").value = this.cells[4].innerHTML;
    };
}


// edit the row
function editRow() {
    table.rows[rIndex].cells[1].innerHTML = document.getElementById("username").value;
    table.rows[rIndex].cells[2].innerHTML = document.getElementById("email").value;
    table.rows[rIndex].cells[3].innerHTML = document.getElementById("parola").value;
    table.rows[rIndex].cells[4].innerHTML = document.getElementById("tipcont").value;
}

// Data Update Table Here
function editTableDisplay() {
    document.querySelector('.editTable').setAttribute('style', 'display: block;')
}

function insertTableDisplay() {
    document.querySelector('.insertTable').setAttribute('style', 'display: block;')
}


function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("table").deleteRow(i);
    reindex();
}

function reindex() {
    const ids = document.querySelectorAll("tr > td:nth-child(1)");
    ids.forEach((e, i) => { e.innerText = (i + 1) });
}

function addRow() {
    var username = document.getElementById("usernamei").value;
    var email = document.getElementById("emaili").value;
    var parola = document.getElementById("parolai").value;
    var tipcont = document.getElementById("tipconti").value;
    var mytable = document.getElementsByTagName("table")[0];

    // delete button - creare si setare proprietate
    var button = document.createElement("button");
    button.innerHTML = "Del";
    button.setAttribute("onclick", "deleteRow(this)");

    //rand nou
    var newRow = mytable.insertRow(-1);
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    var cell6 = newRow.insertCell(5);

    cell1.innerHTML = "5";
    cell2.innerHTML = username;
    cell3.innerHTML = email;
    cell4.innerHTML = parola;
    cell5.innerHTML = tipcont;

    cell6.appendChild(button); //adaug butonul la celula

    reindex();
}