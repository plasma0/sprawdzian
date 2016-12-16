<?php

require_once __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\Stopwatch\Stopwatch;

$url = "http://ec2-35-156-131-145.eu-central-1.compute.amazonaws.com/list";

$rawData = json_decode(file_get_contents($url), true);
$option = $_GET["option"];

function randomJoke($r)
{
// echo "Dowcip: "
$jid = rand(1,10);
echo $r[$jid]['content'];
}

function all($r)
{
for ($i = 1; $i < 10; $i++) {
    echo sprintf("Dowcip: ", i, " : ");
    echo $r[$i]['content'];
    echo "<br>";
}
}

echo "<!doctype html>";
echo "<head><title>Dowcipy</title></head>";

if(!strcmp($option,"randomJoke"))
{
	randomJoke($rawData);
}
else
{
	all($rawData);
}

