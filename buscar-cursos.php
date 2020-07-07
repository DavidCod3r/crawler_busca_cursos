<?php

use GuzzleHttp\Client;
use src\BuscadorDeCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;

require 'vendor/autoload.php';
require 'src/Buscador.php';

$client  = new Client(['base_uri' => 'https://www.alura.com.br/', 'verify' => false]);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach($cursos as $curso){ 
    echo $curso . PHP_EOL;
}