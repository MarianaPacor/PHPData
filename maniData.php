<?php
// Funções essenciais para data
// echo time(); tipo timestamp
// echo strtotime('10-09-2019 23:35'); timestamp
// var_dump(checkdate(12,25,2019));
date_default_timezone_set('America/Sao_Paulo'); /*seta o fuso horário   /* quebra de linha */ echo '<br>';  
echo date('d-m-Y H:i:s', time()); /*configura a visualização data e hora /* quebra de linha */ echo '<br>';

// Funções essenciais para arquivo
var_dump(file_exists('loops.php')); /*checa se um arquivo existe e retorna um booleano. /* quebra de linha */ echo '<br>';
echo basename(__FILE__); /*mostra o nome do arquivo e não todo o caminho. /* quebra de linha */ echo '<br>';
echo dirname(__FILE__); /*mostra o caminho e o diretório onde se encontra o arquivo /* quebra de linha */ echo '<br>';
echo '<pre>';
var_dump(file('file.txt')); /* retorna as linhas de um arquivo em um array /* quebra de linha */ echo '<br>';
echo '</pre>';
echo nl2br(file_get_contents('file.txt')); /*retorna o arquivo inteiro em uma string /* quebra de linha */ echo '<br>';
echo file_put_contents('file.txt', "\nlinha 06", FILE_APPEND); /*adiciona conteúdo em um arquivo /* quebra de linha */ echo '<br>';
$arquivo = fopen('file2.txt', 'a+'); /*abre ou cria um arquivo se ele não existir. */
echo $arquivo; /* quebra de linha */ echo '<br>';
fwrite($arquivo, "Linha gravada via php \n");
fclose($arquivo);
var_dump($_COOKIE); /* quebra de linha */ echo '<br>';
setcookie('carolina', 'gravado para futuras consultas', time() + (30*24*3600)); // trocar informações com o computador do usuário, guardar dados no computador do usuário.
echo $_COOKIE['carolina']; // pega dados de um cookie específico como $_POST ou $_GET.