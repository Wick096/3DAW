 adicionar = function(){

    let objProduto = document.getElementById("formula");
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
             alert(this.responseText);
        }
    }
    xmlHttp.open("GET", "https://localhost/Prod_Manager/add_prod.php?nome=" + objProduto.nome.value +
                "&id=" + objProduto.id.value + "&qtd=" + objProduto.qtd.value + "&categoria=" +
                objProduto.categoria.value + "&valor_prod=" + objProduto.valor_prod.value + "&data="+objProduto.data.value +"&desc="+ objProduto.desc.value +"&codBarras=" + objProduto.codBarras.values + "&peso=" + objProduto.peso.value +"&tipo=" + objProduto.tipo.value +"&fabricante="+ objProduto.fabricante.value, true);
    xmlHttp.send();
    console.log("requisição enviada");
}

 
 

    

