<?php

//Criar conexão com o banco
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $nomeBanco = "dbase_list";
  //$conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
  $nome = $_POST['nome'];
  $id = $_POST['num'];
  $email = $_POST['email'];
  $mat = $_POST['mat'];


  $conn = mysqli_connect($servidor, $usuario, $senha, $nomeBanco);

  if(!$conn) {
    die("Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error());
  }

  //Passar o comando sql para inserir a tabela

  $query = "INSERT INTO dlist_aluno (nome, id, email,mat) VALUES ('$nome', '$id', '$email', '$mat')";

  if(!$conn->query($query)) {
  	echo "erro!";
  } else {
    echo "<script>alert('Adição realizada com sucesso'); location= 'add_alunos.html';</script>";
  }



?>