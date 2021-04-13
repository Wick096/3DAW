
<?php
    if(isset($_GET["num1"])) {
        $x = $_GET["num1"];
        $y = $_GET["num2"];
        $op = $_GET["operacao"];

    if($op =="soma")
        {
            $z = $x+$y;
            echo "$x + $y = $z";
        }
        elseif($op =="subtracao")
        {
            $z = $x-$y;
            echo "$x - $y = $z";
        }
        elseif($op=="multiplicacao")
        {   $z=$x*$y;
            echo "$x*$y= $z";
        }
        else
        {    
            $z=$x/$y;
            echo "$x/$y = $z";
        }  
    
    }
?>