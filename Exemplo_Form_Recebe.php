<?php
header('Content-type: text/html; charset=iso-8859-1');
//header('Content-type: text/html; charset=UTF-8');
/**
 * @author Sallum
 * @copyright 2017
 */

if (isset($_POST['notificacao']))
    echo "Retorno do CheckBox: <b>".$_POST['notificacao']."</b><br>"; 
if (isset($_POST['sexo']))
    echo "Retorno do Rádio: <b>".$_POST['sexo']."</b><br>"; 
if (isset($_POST['txarea']))
    echo "Retorno do Text-area: <b>".$_POST['txarea']."</b><br>"; 
if (isset($_POST['logins'])){
    $log = $_POST['logins'];
    foreach($log as $l)
        echo "Retorno do Select: <b>".$l."</b><br>";
}
if (isset($_POST['x']))
    echo "Retorno do valor de X: <b>".$_POST['x']."</b><br>";
	$arquivo = $_FILES['userfile'];
	$maximo = 50000;
	if (isset($arquivo)) {
        if ($arquivo["type"] == "image/png") {
            if ($arquivo["size"] > $maximo) {
                echo '<p>'.$arquivo["name"].'</p>';
            }
            else {
                echo '<p>Arquivo muito grande</p>';
            }
        }
        else{
            echo '<p>Arquivo inválido, use .png</p>';
        }
    }

?>