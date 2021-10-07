<?php
function tirarDados($entrada, $dado) {
        switch ($dado) {
                case 1:
                        echo "&#9856;";
                        break;
                case 2:
                        echo  "&#9857;";
                        break;
                case 3:
                        echo "&#9858;";
                        break;
                case 4:
                        echo "&#9859;";
                        break;
                case 5:
                        echo "&#9860;";
                        break;
                case 6:
                        echo "&#9861;";
                        break;
        }
}

function restarDados1($jugador1) {
        $resta1 =  min($jugador1) + max($jugador1);
        $resta1 = array_sum($jugador1) - $resta1;
        return $resta1;
}

function restarDados2($jugador2) {
        $resta2 =  min($jugador2) + max($jugador2);
        $resta2 = array_sum($jugador2) - $resta2;
        return $resta2;
}
 
function elGanador($jugador1, $jugador2) {
        if (restarDados1($jugador1) == restarDados2($jugador2)) {
                echo "¡Empate!";
        } else if (restarDados1($jugador1) > restarDados2($jugador2)) {
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
                #dado-1 > p {
                        font-size: 30px;
                        background-color: aqua;
                        box-sizing: content-box;
                        width: 20%;
                        padding: 10px;
                }

                #dado-1 {
                        font-size: 110px;
                }

                #dado-2 > p {
                        font-size: 30px;
                        background-color: red;   
                        box-sizing: content-box;
                        width: 20%;
                        padding: 10px;
                }

                #dado-2 {
                        font-size: 110px;
                }

                #resultado {
                        font-size: 20px;
                }

        </style>
</head>
<body>
        <h1>Juego de los dados</h1>
        <div id="dado-1">
                <p>Dado jugador 1</p>
                <?php
                        $entrada = array(0, 1, 2, 3, 4, 5, 6);
                        $dado = 0;
                        $jugador1 = array();
                        for ($i = 0; $i < 6; $i++) {
                                $salidaDado = mt_rand(1, 6);
                                $dado = $entrada[$salidaDado];
                                "<span>" . tirarDados($jugador1, $dado) . "</span>";
                                $jugador1[$i] = $dado;
                        }
                ?>
        </div>
        <div id="dado-2">
                <p>Dado jugador 2</p>
                <?php
                        $jugador2 = array();
                        for ($i = 0; $i < 6; $i++) {
                                $salidaDado = mt_rand(1, 6);
                                $dado = $entrada[$salidaDado];
                                "<span>" . tirarDados($jugador2, $dado) . "</span>";
                                $jugador2[$i] = $dado;
                        }
                ?>
        </div>
        <div id="resultado">
                <?php
                        echo "<br> suma jugador 1: " . array_sum($jugador1). ". Restando el dado mayor y el menor: " . restarDados1($jugador1) . "<br>";
                        echo "suma jugador 2: " . array_sum($jugador2) . ". Restando el dado mayor y el menor: " . restarDados2($jugador2) . "<br><br>";
                        elGanador($jugador1, $jugador2);
                ?>
        </div>
</body>
</html>