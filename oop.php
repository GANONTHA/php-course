<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    <h1>PHP OOP</h1>


    <?php
    //CLASS
         class Fruit {
    //PROPERTIES
            public $name;
            public $color;
            public $weight;

    //METHOD
            function set_name($name){
                $this->name = $name;
            }
            function get_name(){
                return $this->name;
            }
            function set_color($color){
                $this->color = $color;
            }
            function get_color(){
                return $this->color;
            }
    //CONSTRUCTOR
            function __construct($weight)
            {
                $this -> weight = 12;
            }
            function get_weight(){
                return $this->weight;
            }
         }

    //SECOND CLASS
         class Animal{
            public $name;
            public $species;
            public $age;

        function __construct($name, $species, $age  )
        {
            $this -> name = $name;
            $this -> species = $species;
            $this -> age = $age;
        }
        function get_name():string {
            return $this -> name;
        }
         }

    //OBJECT
    $apple = new Fruit(23);

    $apple->set_name('Apple');
    $apple ->set_color('Green');

    echo "Name: ". $apple->get_name() . "<br>";
    echo "Color: " . $apple->get_color() . "<br>";
    echo "Weight: " . $apple->get_weight() . " Pds" . "<br>";

    $pet = new Animal('Pet','Dog',23);
         echo "Name of animal: " . $pet -> get_name() . "<br>";
    ?>
</body>
</html>