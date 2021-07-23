<?php

  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $nomeBanco = "prod_manager";
 
  $id = $_GET['id'];


  $conn = mysqli_connect( $servidor, $usuario, $senha, $nomeBanco );

  if( !$conn ) {
    die( "Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error() );
  }

  
  $query =  "SELECT * FROM prod_manager WHERE id ='$id'";

  $result = $conn->query($query);
  
            while($linha=$result->fetch_assoc()){
             $campos = array(
               'nome' =>utf8_encode($linha['nome']),
               'id'=>$linha['id'],
               'qtd'=>$linha['qtd'],
               'categoria'=>utf8_encode($linha['categoria']),
               'valor_prod'=>(float)($linha['valor_prod']),
               'datas'=>$linha['datas'],
               'tipo'=>utf8_encode($linha['tipo']),
               'descr'=>utf8_encode($linha['descr']),
               'codBarras' => (Integer)($linha['cod_barras']),
               'peso'=>(float)($linha['peso']),
               'fabricante'=>utf8_encode($linha['fabricante']),
               'img'=>utf8_encode($linha['img']),
               'stat'=>$linha['stat'],
             );
             
             }

            

             echo json_encode($campos);


    ?>




   