<?php


  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $nomeBanco = "prod_manager";

  
  

  
  $id = $_GET['id'];
  
  $status = 1;
 
  

  $conn = mysqli_connect($servidor, $usuario, $senha, $nomeBanco);

  if(!$conn) {
    die("Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error());
  }

 

  $query = "UPDATE prod_manager SET stat='0' WHERE id='$id'"; 

  if ($conn->query($query) == FALSE)  {
  	echo json_encode("erro!");

  } else {
    echo json_encode("Produto excluido com sucesso!") ;
  }


?>