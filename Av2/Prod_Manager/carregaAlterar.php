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

 

  $query = "UPDATE prod_manager SET nome='$nome', id='$id', qtd='$qtd', categoria ='$categoria', valor_prod='$valor_prod', datas='$data',tipo='$tipo', descr='$desc',cod_barras='$codBarras',peso='$peso',fabricante='$fabricante',img='$img',stat='$status' WHERE id='$id'"; 

  if ($conn->query($query) == FALSE)  {
  	echo json_encode("erro!");

  } else {
    echo json_encode("Alterado com sucesso!") ;
  }


?>