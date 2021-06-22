<?php

  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $nomeBanco = "dbase_list";



  $conn = mysqli_connect( $servidor, $usuario, $senha, $nomeBanco );

  if( !$conn ) {
    die( "Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error() );
  }

  

  $query =  "SELECT * FROM dlist_aluno ";

  $result = $conn->query($query);

?>
<!DOCTYPE html>

  <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>List</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="./style/style_pages.css">

        <style>
			body{
				background-color: #B0E0E6;
			}
		</style>

    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

<div class="collapse navbar-collapse">

  <ul class="navbar-nav mr-auto">

  <li class="nav-item active">
					<a class="nav-link" href="index.html">Home</a>
				  </li>
	
				  <li class="nav-item">
					<a class="nav-link" href="add_alunos.html">Adicionar  Alunos</a>
				  </li>
	
				  
				  <li class="nav-item">
					<a class="nav-link" href="listar_todas.php">Listar todos os Alunos</a>
				  </li>
	
				  <li class="nav-item">
					<a class="nav-link" href="listar.html">Listar um Aluno</a>
				  </li>

  </ul>

</div>

</nav>

<table class='table' border=1>

  <tr>
    <th> Nome do Aluno</th>
    <th> ID do Aluno</th>
    <th> Email </th>
    <th> Matrícula </th>
  </tr>

       <?php

         
            while($linha=$result->fetch_assoc()){
              echo "<tr> <td>" . $linha["nome"] . "</td>" .
              "<td>" . $linha["id"] . "</td>" .
              "<td>" . $linha["email"] . "</td>" .
              "<td>" . $linha["mat"] . "</td>" .
              "</tr>";
            }

      ?>

  </table>

    </body>

</html>