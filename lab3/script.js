let lineNumber=0;
let c = 0;
function createTable(){
    if (document.getElementById('table') !=null){

        alert("Таблица уже создана");
    } else{
        let table = document.createElement('table');
        table.setAttribute('id','table')
        document.getElementById("add_line").removeAttribute("disabled");
        document.body.append(table);
    }
}
function addLine(){
    
    lineNumber = lineNumber + 1;
    if (lineNumber==1){
        document.getElementById("delete_line").removeAttribute("disabled");
        document.getElementById("num").removeAttribute("disabled");
    }
    let tab = table.insertRow();
    tab.insertCell().append(lineNumber);
    tab.insertCell().append("have a nice day");

    
}
function deleteLine(){
    let index = document.getElementById('num').value;
    if (index==""){
        alert("Вы ввели не число");
        return null;
    }
    let index_for_deleting = 0;
    let table = document.querySelector('table');
    for (var j = 0; j < table.rows.length; j++){
        let index_in_the_table = document.querySelector('table').rows[j].cells[0].innerHTML;
        index_for_deleting = index_for_deleting + 1;
        if (index_in_the_table==index){
            table.deleteRow(index_for_deleting-1);
            index_for_deleting = 0;
            return null;
        } 
    }
    alert("Такого индекса нет :(");
}
