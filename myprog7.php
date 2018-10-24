<?php

$cookieLinguagem = $_COOKIE['linguagem'];
$cookieBanco = $_COOKIE['banco'];
$cookieData = $_COOKIE['data'];
$cookieProfessor = $_COOKIE['professor'];
$cookiePosicao = $_COOKIE['posicao'];
$cookieAnosec = $_COOKIE['anosec'];

$x = 0;

echo "<b>Respostas dadas<br></b>";
echo "Linguagem: $cookieLinguagem<br>";
echo "Banco: $cookieBanco<br>";
echo "Data: $cookieData<br>";
echo "Professor: $cookieProfessor<br>";
echo "Posicao: $cookiePosicao<br>";
echo "Ano SEC: $cookieAnosec<br><br>";

echo "<b>Respostas corretas</b><br>";
echo "Linguagem: Java<br>";

if ($cookieLinguagem == 'Java')
	$x == $x++;
echo "Banco: MySQL<br>";
if ($cookieBanco == 'MySQL')
	$x == $x++;
echo "Data: 25/05/15<br>";
if ($cookieData == '25/05/15')
	$x == $x++;
echo "Professor: Robson<br>";
if ($cookieProfessor == 'Robson')
	$x == $x++;
echo "Posicao: 13<br>";
if ($cookiePosicao == '13')
	$x == $x++;
echo "Ano SEC: 2013<br><br>";
if ($cookieAnosec == '2013')
	$x == $x++;

echo "<b>Pontuação:</b> $x/6";


?>