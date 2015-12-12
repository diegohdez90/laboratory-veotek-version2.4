var insertPedido = function(){
    var code = document.getElementById("pwd").value;

    if(code==="Segartor" || code === "chohujs"){
        alert("Acceso concedido");
        return true;    
    }
    else{
        return false;
    }
}