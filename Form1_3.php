<?php
class Form {

    protected $head;
    protected $text;
    protected $submit;
    protected $end;

    public function __construct($action, $method, $titre)
    {   
        $this->head = '<form action="' . $action . '" method="' . $method . '"><fieldset><legend>' . $titre . '</legend>';
    }

    public function settext($text)
    {
        $this->text .= '<input type="text" value="' . $text . '">' . '<br>';
    }

    public function setsubmit($submit)
    {
        $this->submit = "<button type=\"submit\">$submit</button><br>";
        // $this->submit = '<button type="submit">'. $submit . '</button>' . '<br>';
    }

    public function getform()
    {
        $this->end = '';
        $this->end .= $this->head;
        $this->end .= $this->text;
        $this->end .= $this->submit;
        $this->end .= '</fieldset></form><br>';
        echo $this->end;
    }
}

// $test = new Form();
// var_dump($test);

echo <<<HTML
<form action="action.php" method="post">
<fieldset><legend>Formulaire en dur</legend>
<input type="text" value="texte"><br>
<input type="text" value="texte2"><br>
<input type="radio" name="nomradio" value="valeur1">valeur1<br>
<input type="radio" name="nomradio" value="valeur2">valeur2<br>
<input type="radio" name="nomradio" value="valeur3">valeur3<br>
<input type="checkbox" name="checkbox1">checkbox valeur 1<br>
<input type="checkbox" name="checkbox2">checkbox valeur 2<br>
<button type="submit" name="envoi" value="Envoyer">Envoyer</button><br>
</fieldset></form>
HTML;

$test2 = new Form('action.php', 'post', 'formulaire2');
$test2->settext('second test');
$test2->settext('seconde ligne du 2nd test');
$test2->setsubmit('go');
$test2->getform();

$test3 = new Form('action.php', 'post', 'formulaire3');
$test3->settext('troisième test');
$test3->settext('seconde ligne du 3ème test');
$test3->setsubmit('Envoyer');
$test3->getform();

// On inclura ce fichier via un require dans les autres scripts
// require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Exos_Objets' . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'Form1_2.php';

class Form2 extends Form {

    private $radio;
    private $checkbox;

    public function __construct($action, $method, $titre)
    {   
        parent::__construct($action, $method, $titre);
    }

    public function setradio($name, $value)
    { 
        $this->radio .= "<input type=\"radio\" name=\"$name\" value=\"$value\"/>$value<br>";
        // $this->radio .= '<input type="radio" name="' . $name . '" value="' . $value . '">' . $value . '<br>';
    }

    public function setcheckbox($name)
    {
        $this->checkbox .= '<input type="checkbox" name="' . $name . '">' . $name . '<br>';
    }

    public function getform()
    {
        $this->end = '';
        $this->end .= $this->head;
        $this->end .= $this->text;
        $this->end .= $this->radio;
        $this->end .= $this->checkbox;
        $this->end .= $this->submit;
        $this->end .= '</fieldset></form><br>';
        echo $this->end;
    }
}

$test4 = new Form2('action.php', 'post', 'formulaire4');

$test4->settext('Quatrième test');
$test4->settext('seconde ligne du 4ème test');
$test4->setradio("radio1", "valeur1");
$test4->setradio("radio1", "valeur2");
$test4->setradio("radio1", "valeur3");
$test4->setcheckbox('coche1');
$test4->setcheckbox('coche2');
$test4->setsubmit('Envoyer');
$test4->getform();

$test5 = clone $test4;

// echo "<br>";
// var_dump($test4);
// echo "<br>";
// var_dump($test5);
// echo "<br>";

$test5->settext('5ème test');
$test4->settext('une ligne');
$test4->settext('encore une');
$test4->setradio('radio1', 'valeur4');
$test4->setradio('radio2', 'valeurA');
$test4->setradio('radio2', 'valeurB');
$test4->setcheckbox('une autre coche');
$test4->setsubmit('Go');
$test4->getform();