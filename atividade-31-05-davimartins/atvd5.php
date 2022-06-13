<?php
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $sexo = $_POST["sexo"];
    $tipoSangue = $_POST["tipoSangue"];

    
    echo '<table border="1">';
    echo '<tbody>';
    echo '<tr>';

    echo '<td>Nome: </td>';
    if(isset($nome)){
        echo '<td>'.$nome.'</td>';
    }else {
        echo '<td></td>';
    }

    echo '<td>Sobrenome: </td>';    
    if(isset($sobrenome)){
        echo '<td>'.$sobrenome.'</td>';
    }else {
        echo '<td></td>';
    }

    echo '<td>Sexo: </th>';
    if(isset($sexo)){
        echo '<td>'.$sexo.'</td>';
    }else {
        echo '<td></td>';
    }

    echo '</tr>';
    echo '<tr>'; 

    echo '<td>Disciplinas: </td>'; 
    if(isset($_POST["disciplina"] )){
        echo '<td>';
        foreach ($_POST["disciplina"] as $diciplinas) {
            echo $diciplinas.'<br>';
        };
        echo '</td>';
    }else {
        echo '<td></td>';
    }

    echo '<td>Arquivo: </td>';
    $arquivo = $_FILES["arquivo"];
	$maximo = 1048576;
	if (isset($arquivo)) {
        if ($arquivo["type"] == "image/png") 
        {
            if ($arquivo["size"] < $maximo) 
            {
                echo '<td>'.$arquivo["name"].'</td>';
            }
            else 
            {
                echo '<td>Arquivo muito grande</td>';
            }
        }
        else
        {
            echo '<td>Arquivo inválido, use .png</td>';
        }
    }
    

    echo '<td>Tipo Sangue: </td>';
    if(isset($tipoSangue)){
        echo '<td>'.$tipoSangue.'</td>';
    }else {
        echo '<td></td>';
    }
    echo '</tr>';
    echo '<tr>'; 
    echo '<td>Servidor: </td>';
    echo '<td colspan="5">'.$_SERVER['SERVER_SOFTWARE'].'</td>';
    echo '</tbody>';
    echo '</table>';
?>
