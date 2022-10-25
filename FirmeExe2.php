<?php
require 'Client2.php';
require 'Commercial2.php';


$client1 = new Firme\Client\Personne("Client1", 12345);
echo $client1->coord . "avec code : " . $client1->code . "<br />";
$client1->code=45678;
echo "Nouveau code : " . $client1->code . "pour " . $client1->coord . "<br />";
echo "<br />";

$client2 = new Firme\Client\Personne("ClientDeux",54367);
echo $client2->coord . "avec code : " . $client2->code . "<br />";
$client2->code=12876;
echo "Nouveau code : ",$client2->code .  "pour " . $client2->coord . "<br />";
echo "<br />";

$commercial1 = new Firme\Commercial\Personne("CommercialUN",98765);
echo $commercial1->coord . "avec code : " . $commercial1->code . "<br />";
$commercial1->code=76543;
echo "Nouveau code : ",$commercial1->code . "pour " . $commercial1->coord . "<br />";