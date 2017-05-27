<!DOCTYPE html>
<html>
    <head>
        <title>ks View</title>
        <link rel="stylesheet" type="text/css" href="view/css/tema0.css">
<?php
            echo "<script type=\"text/javascript\" >";
            echo "gameId=";
            if(isset($_REQUEST["id"])){
                echo $_REQUEST["id"];
            }
            else{
                echo 0;
            }
            echo ";";
            echo "</script>";
?>
    </head>
    <body >
        <h1><span id="player1">Player1</span> x <span id="player2">Player2</span></h1>
        <p>Jogo:<span id="gameId">000</span><span id="load">.</span></p>
        <hr>
        <a href="./"><input type="button" value="Voltar" ></a>
        <input type="button" value="Desistir" >

        <hr>
        <div id="msg">msg</div>
        <svg id="screen" class="">
        <?php
            for($a = 1;$a <= 8;$a++){
              for($b = 1;$b <= 8;$b++){
                 echo "\n";
                 $color = ($b+$a)%2;
                 $newX = 50*$a;
                 $newY = 50*$b;
                 $casaId =  sprintf("casa_%c%d",$a+96,$b);
                 echo "<rect onClick = \"casaClick(this);\" id = \"$casaId\" class=\"casa casa_$color\" x=\"$newX\" y=\"$newY\" width=\"50\" height=\"50\" /> ";
              }
            }
            echo "\n";
        ?>

        <g id="pecas"></g>
        <g id="pelicula"></g>
        </svg>
        <hr>
        <div id="retorno"></div>
    </body>
    <script type="text/javascript" src="view/js/main.js"></script>
</html>
