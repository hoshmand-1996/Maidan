function formatValue(){

    document.getElementById("myText").type="text";

    var x = Number(document.getElementById('myText').value);
    document.getElementById('myText').value = x.toLocaleString();

    if(document.getElementById('myText').value == "NaN" || document.getElementById('myText').value == 0){
        document.getElementById('myText').value = "";
    }
}