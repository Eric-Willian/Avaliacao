function desconto(cor,valor,id){
    
    if(cor === "Azul" || cor === "Vermelho"){
        var desconto = valor * 0.5;
        var novoValor = valor - desconto;
        document.getElementById(id).innerHTML = novoValor;
    }else if(cor === "Amarelo"){
        var desconto = valor * 0.1;
        var novoValor = valor - desconto;
        document.getElementById(id).innerHTML = novoValor;
    }else if(cor === "Vermelho" && valor > 50){
        var desconto = valor * 0.05;
        var novoValor = valor - desconto;
        document.getElementById(id).innerHTML = novoValor;
    }
}


