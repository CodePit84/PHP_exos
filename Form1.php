<?php
class Form {

    public function __construct()
    {
//         echo<<<HTML
//         <form>
//             <fieldset>
// HTML;
        echo '<form><fieldset>';
    }

    public function settext($text)
    {
        echo '<input type="text" value="' . $text . '">' . "<br>";
    }

    public function setsubmit($submit)
    {
        echo '<button type="submit">'. $submit . '</button>';
    }

    public function getform()
    {
        // $this->settext('Ceci est un texte');
        // $this->setsubmit('Envoyer');
        echo '</fieldset></form>';
    }

}

// $test = new Form();
// var_dump($test);
// echo $test->getform();

$test2 = new Form();
$test2->settext('second test');
$test2->settext('seconde ligne du 2nd test');
$test2->setsubmit('go');
echo $test2->getform();

$test3 = new Form();
$test3->settext('troisième test');
$test3->settext('seconde ligne du 3ème test');
$test3->setsubmit('Envoyer');
echo $test3->getform();

// On inclura ce fichier via un require dans les autres scripts
// require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Exos_Objets' . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'Form1.php';