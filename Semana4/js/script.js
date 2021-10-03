function doalert(obj) {
    alert("Opcion selecionada: " + obj.innerHTML);
    document.getElementById("opcion").innerHTML = obj.innerHTML;
}