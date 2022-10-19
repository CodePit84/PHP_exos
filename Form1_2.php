<?php
class Form {

    private $head;
    private $text;
    private $submit;
    private $end;

    public function __construct()
    {   
        $this->head = '<form><fieldset>';
        return $this->head;
    }

    public function settext($text)
    {
        $this->text = '<input type="text" value="' . $text . '">' . '<br>';
        return $this->text;
    }

    public function setsubmit($submit)
    {
        $this->submit = '<button type="submit">'. $submit . '</button>' . '<br>';
        return $this->submit;
    }

    public function getform()
    {
        $this->end = '</fieldset></form><br>';
        return $this->end;
    }
}

// $test = new Form();
// var_dump($test);

$test2 = new Form();
echo $test2->settext('second test');
echo $test2->settext('seconde ligne du 2nd test');
echo $test2->setsubmit('go');
echo $test2->getform();

$test3 = new Form();
echo $test3->settext('troisième test');
echo $test3->settext('seconde ligne du 3ème test');
echo $test3->setsubmit('Envoyer');
echo $test3->getform();

// On inclura ce fichier via un require dans les autres scripts
// require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Exos_Objets' . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'Form1_2.php';

class Form2 extends Form {

    public function setradio($name, $value)
    {
        $this->radio = '<input type="radio" name="' . $name . '" value="' . $value . '">' . $value . '<br>';
        return $this->radio;
    }

    public function setcheckbox($name)
    {
        $this->checkbox = '<input type="checkbox" name="' . $name . '">' . $name . '<br>';
        return $this->checkbox;
    }
}

$test4 = new Form2();

echo $test4->settext('Quatrième test');
echo $test4->settext('seconde ligne du 4ème test');
echo $test4->setradio('radio', 'valeur1');
echo $test4->setradio('radio', 'valeur2');
echo $test4->setradio('radio', 'valeur3');
echo $test4->setcheckbox('coche1');
echo $test4->setcheckbox('coche2');
echo $test4->setsubmit('Envoyer');
echo $test4->getform();

$test5 = clone $test4;

// echo "<br>";
// var_dump($test4);
// echo "<br>";
// var_dump($test5);
// echo "<br>";

echo $test5->settext('5ème test');
echo $test4->settext('une ligne');
echo $test4->settext('encore une');
echo $test4->setradio('radio2', 'valeur1');
echo $test4->setradio('radio2', 'valeur2');
echo $test4->setcheckbox('une seule coche');
echo $test4->setsubmit('Go');
echo $test4->getform();