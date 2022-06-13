<?php
//atvd 1
$pVogal = $_POST["pVogal"];
$pVogal = strtolower($pVogal);
$pVogalTrocada;

echo "<h1>ATVD 1</h1>";
$pVogalTrocada = str_replace('a', '?', $pVogal);
$pVogalTrocada = str_replace('e', '?', $pVogalTrocada);
$pVogalTrocada = str_replace('i', '?', $pVogalTrocada);
$pVogalTrocada = str_replace('o', '?', $pVogalTrocada);
$pVogalTrocada = str_replace('u', '?', $pVogalTrocada);

echo '<h3>Vogais Trocadas</h3>';
echo '<p>'.$pVogalTrocada.'</p>';
echo '<p>Invertida: '.strrev($pVogalTrocada).'</p>';
echo '<p>Tamanho: '.strlen($pVogalTrocada).'</p>';

//atvd 2
echo "<h1>ATVD 2</h1>";
$cep = $_POST["cep"];
$finais3 = substr($cep, -3);
echo '<p>Dígitos finais CEP: '.$finais3.'</p>';

//atvd 3
echo "<h1>ATVD 3</h1>";
$data = $_POST["data"];
echo '<p>Data Recebida: '.$data.'</p>';

$array = explode("-", $data);
$dia = $array[2];
$mes = $array[1];
$ano = $array[0];

echo '<h4>Dia: '.$dia.'; Mês: '.$mes.'; Ano: '.$ano.'</h4>';

//atvd 4
echo "<h1>ATVD 4</h1>";
$url = $_POST["url"];
$url = explode(".", $url);
$urlCompleto = 'https://' . $url[3]. '.' . $url[2] . '.' . $url[1] . '.' . $url[0];
echo "<a href=".$urlCompleto.">".$urlCompleto."</a>";

//atvd 5
echo "<h1>ATVD 5</h1>";
$nomes = $_POST["nomes"];
$nomes = mb_convert_case($nomes, MB_CASE_TITLE);
$nomes = str_replace(" Da ", " da ", $nomes);
$nomes = str_replace(" E ", " e ", $nomes);
$nomes = str_replace(" De ", " de ", $nomes);

echo "$nomes";
?>