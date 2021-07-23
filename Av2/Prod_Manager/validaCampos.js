function validaProd() {
    let objValidForm = document.getElementById("formula");
    let nome = objValidForm.nome.value;
    let id = objValidForm.id.value;
    let qtd = objValidForm.qtd.value;
    let categoria = objValidForm.categoria.value;
    let valor_prod = objValidForm.valor_prod.value;
    let data = objValidForm.data.value;
    let desc = objValidForm.desc.value;
    let codBarras = objValidForm.codBarras.value;
    let peso = objValidForm.peso.value;
    let tipo = objValidForm.tipo.value;
    let fabricante = objValidForm.fabricante.value;
    let msg2 = "";
    
    if (nome ===""){
        msg2 = "Preencha o campo nome. <br>";
        alert(msg2);
    }

    if (id ===""){
        msg2 = "Preencha o campo Id. <br>";
        alert(msg2);
    }
    if (qtd ===""){
        msg2 = "Preencha o campo quantidade. <br>";
        alert(msg2);
    }
    if (categoria===""){
        msg2 = "Preencha o campo categoria. <br>";
        alert(msg2);
    }
    if (valor_prod ===""){
        msg2 = "Preencha o campo valor_prod. <br>";
        alert(msg2);
    }
    if (data ===""){
        msg2 = "Preencha o campo data. <br>";
        alert(msg2);
    }
    if (desc ===""){
        msg2 = "Preencha o campo descrição. <br>";
        alert(msg2);
    }
    if (codBarras===""){
        msg2 = "Preencha o campo código de barras. <br>";
        alert(msg2);
    }
    if (peso ===""){
        msg2 = "Preencha o campo peso. <br>";
        alert(msg2);
    }

    if (tipo ===""){
        msg2 = "Preencha o campo tipo. <br>";
        alert(msg2);
    }
    if (fabricante ===""){
        msg2 = "Preencha o campo fabricante. <br>";
        alert(msg2);
    }
    
   
    return msg2;
}