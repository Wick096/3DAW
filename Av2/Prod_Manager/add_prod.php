<?php


  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $nomeBanco = "prod_manager";

  
  

  $nome = $_GET['nome'];
  $id = $_GET['id'];
  $qtd = $_GET['qtd'];
  $categoria = $_GET['categoria'];
  $valor_prod  = (float)$_GET['valor_prod'];
  $data = $_GET['data'];
  $tipo = $_GET['tipo'];
  $desc = $_GET['desc'];
  $codBarras = $_GET['codBarras'];
  $peso =(float) $_GET['peso'];
  $fabricante = $_GET['fabricante'];
  $img = "img/".$codBarras.".jpg";
  $status = 1;
  

  $conn = mysqli_connect($servidor, $usuario, $senha, $nomeBanco);

  if(!$conn) {
    die("Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error());
  }

  //Passar o comando sql para inserir a tabela

  $query = "INSERT INTO prod_manager (nome, id, qtd, categoria, valor_prod, datas,tipo, descr,cod_barras,peso,fabricante,img,stat) VALUES ('$nome', '$id', $qtd, '$categoria', '$valor_prod','$data','$tipo','$desc','$codBarras',$peso,'$fabricante','$img',$status)";

  if(!$conn->query($query)) {
  	echo json_encode("erro!");
  } else {
    echo json_encode("Cadastrado com sucesso!") ;
  }


?>