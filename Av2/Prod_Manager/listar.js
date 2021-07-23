lista = function() {
    let carrega = document.getElementById("formula");
    let objProduto = document.getElementById("cb");
    let xmlHttp = new XMLHttpRequest();

    xmlHttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            let objeto = JSON.parse(this.responseText);
            console.log(objeto);
            carrega.nome.value = objeto['nome'];
            carrega.id.value = objeto['id'];
            carrega.qtd.value = objeto['qtd'];
            carrega.categoria.value = objeto['categoria'];
            carrega.valor_prod.value = objeto['valor_prod'];
            carrega.data.value = objeto['datas'];
            carrega.tipo.value = objeto['tipo'];
            carrega.desc.value = objeto['descr'];
            carrega.codBarras.value = objeto['codBarras'];
            carrega.peso.value = objeto['peso'];
            carrega.fabricante.value = objeto['fabricante'];

        }

    }

    xmlHttp.open("GET", "https://localhost/Prod_Manager/alterar.php?id=" + objProduto.id.value, true);


    xmlHttp.send();
    
}




