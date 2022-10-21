<?php
require 'Client.php';
require 'Commercial.php';


$client1 = new Firme\Client\Personne('Nouveau Client', '1ercode');
echo $client1->get();
echo PHP_EOL;
$client1->set('Client test', '56code78');
echo $client1->get();
echo PHP_EOL;

$client1 = new Firme\Commercial\Personne('Nouveau Commercial', 'code');
echo $client1->get();
echo PHP_EOL;
$client1->set('Commercial test', '999code777');
echo $client1->get();
echo PHP_EOL;