

    <?php
        for($i = 0;$i <10; $i ++){
            echo "This is the iteration number " .  $i . "<br>";
        }
        //for each

        $fruits = array('banana','mango','apples');

        //indexed array
       foreach ($fruits as $fruit) {
            echo  "$fruit<br>";
        }
        //associative array

        $fruits = array("banana"=>"yellow", 'apple' => 'red', 'orange' => 'Orange');

        foreach($fruits as $fruit => $color){
            echo $fruit . ":" . $color . "<br>";
        }
    ?>
