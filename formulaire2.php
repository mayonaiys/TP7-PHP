<h1>TP7</h1>

<hr>
<h2>Exercice 1 :</h2>

<?php

class Formulaire{
    //Méthodes :
    function __construct($nomfic,$method) {
        echo "<form method='".$method."' action='".$nomfic."'>";
        echo '<br>';
    }

    function ajouterZoneTexte($name){
        echo $name." ";
        echo '<input type="text" name='.$name.'/>';
        echo '<br>';
    }

    function ajouterBouton(){
        echo '<input type="submit" value="Envoi"/>';
        echo '<br>';
    }
    function getform() {
        echo '</form>';
    }
}

final class Formulaire2 extends Formulaire {
    //Méthodes :
    final function ajouterRadio($value){
        echo '<input type="radio" value='.$value.'>'.$value.'</input>';
        echo '<br>';
    }

    final function ajouterCheckBox($value){
        echo '<input type="checkbox" value='.$value.'>'.$value.'</input>';
        echo '<br>';
    }
}

$form = new Formulaire2("formulaire.php","post");
$form->ajouterZoneTexte("Votre nom :");
$form->ajouterZoneTexte("Votre code :");
$form->ajouterBouton();
$form->ajouterRadio("Homme");
$form->ajouterRadio("Homme");
$form->ajouterCheckBox("Tennis");
$form->ajouterCheckBox("Equitation");
?>

<hr>
<h2>Exercice 2 :</h2>

<?php
    //Shape pas abstraite :
    /*interface Shape{
        function getArea();
    }

    class Square implements Shape{

        private $width;
        private $height;

        function __construct($width,$height){
            $this->height=$height;
            $this->width=$width;

        }

        function getArea()
        {
            return $this->width*$this->height;
        }

    }

    class Circle implements Shape{

        private $radius;

        function __construct($radius){
            $this->radius=$radius;
        }

        function getArea(){
            return 3.14*$this->radius*$this.$this->radius;
        }

    }

    $square = new Square(5,7);
    $circle = new Circle(24);
    $tab = array($square,$circle);

    foreach ($tab as $value){
        echo get_class($value)." Area :".$value->getArea();
        echo '<br>';
    }*/

    //Shape classe abstraite :
    abstract class Shape{
        abstract function getArea();
    }

    class Square extends Shape{
        private $width;
        private $height;

        function __construct($width,$height){
            $this->height=$height;
            $this->width=$width;
        }

        function getArea(){
            return $this->width*$this->height;
        }

    }

    class Circle extends Shape{

        private $radius;

        function __construct($radius){
            $this->radius=$radius;
        }

        function getArea(){
            return 3.14*$this->radius*$this.$this->radius;
        }

    }

    $square = new Square(5,7);
    $circle = new Circle(24);
    $tab = array($square,$circle);

    foreach ($tab as $value){
        echo get_class($value)." Area :".$value->getArea();
        echo '<br>';
    }

    ?>

<hr>
<h2>Exercice 3 :</h2>

<?php
    trait Un {
        function small($text){
            echo '<small>'.$text.'</small>';
        }

        function big($text){
            echo '<h4>'.$text.'</h4>';
        }
    }

    trait Deux{
        function small($text){
            echo '<i>'.$text.'</i>';
        }

        function big($text){
            echo '<h2>'.$text.'</h2>';
        }
    }

    class Texte{
        use Un, Deux{
            Deux::small insteadof Un;
            Un::big insteadof Deux;
            Un::big as gros;
            Deux::smal as petit;
        }
    }
