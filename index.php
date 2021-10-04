<?php

function tirarDados($jugador1, $dado)
{
                switch ($dado) {
                        case 1:
                                echo "&#9856;";
                                $jugador1[1]=1;
                                break;
                        case 2:
                                echo  "&#9857;";
                                $jugador1[2]=2;
                                break;
                        case 3:
                                echo "&#9858;";
                                $jugador1[3]=3;
                                break;
                        case 4:
                                echo "&#9859;";
                                $jugador1[4]=4;
                                break;
                        case 5:
                                echo "&#9860;";
                                $jugador1[5]=5;
                                break;
                        case 6:
                                echo "&#9861;";
                                $jugador1[6]=6;
                                break;
                }
        }

        function elGanador($jugador1, $jugador2) {
                if (array_sum($jugador1) > array_sum($jugador2)) {
                        echo "¡Gana el jugador 1!";
                } else {
                        echo "¡Gana el jugador 2!";
                }
        }



?>
<html>

<head>
        <meta charset="UTF-8">
        <style>
                p {
                        font-size: 30px;
                }

                #dados {
                        font-size: 110px;
                }


                #resultado {
                        font-size: 15px;
                }
        </style>
</head>
<body>
        <h1>Juego de los dados</h1>
        <p>Dado 1</p>
        <div id="dados">
                <?php
                 
                $entrada = array(0, 1, 2, 3, 4, 5, 6);
                $dado = 0;
                $jugador1 = [0, 0, 0, 0, 0,0];
                for ($i = 0; $i < 6; $i++) {
                        $salidaDado = mt_rand(1, 6);
                        $dado = $entrada[$salidaDado];
                        "<span>" . tirarDados($jugador1, $dado) . "</span>";
                        $jugador1[$i]=$dado;
                }



       
        echo "<p>Dado 2 </p>";
      
                for ($i = 0; $i < 6; $i++) {
                        $salidaDado = mt_rand(1, 6);
                        $dado = $entrada[$salidaDado];
                        "<span>" . tirarDados($jugador2, $dado) . "</span>";
                        $jugador2[$i]=$dado;
                }
                ?>
        </div>
        <div id = "resultado">
                <?php
                echo "<br> suma jugador 1: " . array_sum($jugador1) . "<br>" ;
                echo "suma jugador 1: " . array_sum($jugador2) . "<br><br>";
                elGanador($jugador1, $jugador2);

                ?> 
        </div>
</body>

</html>