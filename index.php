<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construccion de expresións en php</title>
</head>
<body>
    <h3>Construccion de expresions en php</h3>
    <?php
        // operadores aritmeticos
        $x=10;
        $y=3;
        $z= $x * $y;
        echo $x. " x " .$y. " = " .$z. " <br/>";
        $z= $x % $y;
        echo $x. " módulo ".$y. " = ".$z. " <br/>";

        /*operadores de asignación*/
        $z-=$y;
        echo " \$z-= \$y asigna a \$z " .$z." <br/>";
        $z+=$x;
        echo " \$z+=\$x asigna a \$z " .$z." <br/>";
    // Operadores de incremento/diminucion
    ++$z;
    echo "++\$z asigna a \$z ".$z."<br/>";
    $z--;
    echo "\$z-- asigna a \$z ".$z."<br/>";
    /*Operadores de comparación*/
    $z=$x!=$y;
    echo "\$x!=\$y devolve ".$z."<br/>";
    $z=$y>$x;
    echo "\$y=\$x devolve ".$z."<br/>";
    // Operadores lóxicos
    $z= ($x==10 and $y==3);
    echo "(\$x==10 and \$y==3) devolve ".$z."<br/>";
    $z= ($x==10 or $y==5);
    echo "(\$x==10 or \$y==5) devolve ".$z."<br/>";
   //Comentariod ende outra maquina
   ?>
</body>
</html>