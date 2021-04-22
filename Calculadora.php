<?php
   
    $n1=$_POST["n1"];
    $n2=$_POST["n2"];
    $op=$_POST["op"];
    switch($op)
    {
        case "soma":
            $resultado=$n1+$n2;
           
            echo "<script>alert('Resultado: $resultado'); location= './index.html';</script>";
        break;
        
        case "sub":
            $resultado=$n1-$n2;
            echo "<script>alert('Resultado: $resultado'); location= './index.html';</script>";

        break;    

        case "mult":
            $resultado=$n1*$n2;
            echo "<script>alert('Resultado: $resultado'); location= './index.html';</script>";

        break;    

        

        case "potencia":
            $resultado=pow($n1,$n2);
            echo "<script>alert('Resultado: $resultado'); location= './index.html';</script>";

        break;   

        case "raiz":
            $resultado=sqrt($n1);
            echo "<script>alert('Resultado: $resultado'); location= './index.html';</script>";

        break;   

        case "um":
            $resultado=(1/$n1);
            echo "<script>alert('Resultado: $resultado'); location= './index.html';</script>";

        break;   

        case "porc":
            $resultado=($n1/100*$n2);
            echo "<script>alert('Resultado: $resultado'); location= './index.html';</script>";

        break;   

    

		}

   if( $op == "div" ) {
		
		if ( $n2 != 0 ) {

			$resultado = ($n1/ $n2);

		} else {

			echo "<script>alert('Não é possivel dividir: $resultado'); location= './index.html';</script>";
			return 0;

        
        
        }   

    }
    
?>
