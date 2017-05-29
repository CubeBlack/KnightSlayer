<!DOCTYPE html>
<html>
    <head>
        <title>ks View</title>
        <link rel="stylesheet" type="text/css" href="view/css/tema0.css">

    </head>
    <body>
        <a href="../"><input type="button" value="Voltar" ></a>
        <hr>
        <svg id="screen">
        <?php
            for($a = 1;$a <= 8;$a++){
              for($b = 1;$b <= 8;$b++){
                 $color = ($b+$a)%2;
                 $newX = 50*$a;
                 $newY = 50*$b;
                 $casaId =  sprintf("casa_%c%d",$a+64,$b);
                 echo "<rect id = \"$casaId\" class=\"casa casa_$color\" x=\"$newX\" y=\"$newY\" width=\"50\" height=\"50\" />";
              }
            }
            echo "\n";
            for($a = 0;$a < 8;$a++){
              for($b = 1;$b <= 8;$b++){
                 $peca = $b+($a*8);

                 $newX = 50*$a + 50;
                 $newY = 50*$b ;

                 $casa = $peca-12;
                //echo "<rect id = \"$casaId\" class=\"peca peca$tipo\" x=\"$newX\" y=\"$newY\" width=\"50\" height=\"50\" />";
                //<img src="kiwi.svg" alt="Kiwi standing on oval">
                if ($peca <= 12)
                    echo "<image xlink:href=\"view/skin/p$peca.svg\" x=\"$newX\" y=\"$newY\" height=\"50px\" width=\"50px\"/>";
                else if ($peca <= 17)
                    echo "<image xlink:href=\"view/skin/c$casa.svg\" x=\"$newX\" y=\"$newY\" height=\"50px\" width=\"50px\"/>";
              }
            }
        ?>
        </svg>
        <hr>
        <div id="retorno"></div>
    </body>
</html>
