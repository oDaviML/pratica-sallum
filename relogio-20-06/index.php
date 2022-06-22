<?php
date_default_timezone_set ("America/Sao_Paulo");
$hora = date("H");
$minuto = date("i");
$segundo = date("s");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relógio</title>

    <style>
        img {
            position: absolute;
        }
        #fundo {
            z-index: 5;
        }
        #horas {
            z-index: 6;
            left: 143px;
        }
        #minutos {
            z-index: 7;
            left: 143px;
        }
        #segundos {
            z-index: 8;
            left: 143px;
        }

        #relogio-digital {
            margin-top: 350px;
            margin-left: 93px;
        }
    </style>
</head>
<body onload="setInterval('tempo();',1000)">
    <h1>Horário de início <?php echo $hora.':'.$minuto.':'.$segundo;?></h1>

    <div id="relogio-analogico">
        <img id="fundo" src="imgs/fundo.png">
        <img id="horas" src="imgs/horas.png" alt="">
        <img id="minutos" src="imgs/minutos.png" alt="">
        <img id="segundos" src="imgs/segundos.png" alt="">
    </div>
    <div id="relogio-digital">
        <h1 id="cronometro"></h1>
    </div>

    <script>

        let segundo = <?php echo $segundo;?>;
        let minuto = <?php echo $minuto;?>;
        let hora = <?php echo $hora;?>;

        let ponteiroHora = document.querySelector("#horas");
        let ponteiroMinuto = document.querySelector("#minutos");
        let ponteiroSegundo = document.querySelector("#segundos");

        function tempo(){
            if (segundo < 60)
            {
                segundo = segundo + 1
                if (segundo == 60)
                {
                    minuto = minuto + 1;
                    segundo = 0;
                    if (minuto == 60) {
                        minuto = 0;
                        hora = hora + 1;
                        if (hora == 24)
                        {
                            hora = 0;
                        }
                    }
                    
                }
            }

            ponteiroHora.style.transform = `rotate(${hora * 30}deg)`;
            ponteiroMinuto.style.transform = `rotate(${minuto * 6}deg)`;
            ponteiroSegundo.style.transform = `rotate(${segundo * 6}deg)`;
            
            document.querySelector("#cronometro").innerHTML=(hora+":"+minuto+":"+segundo);
        }
    </script>
</body>
</html>