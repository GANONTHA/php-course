<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>

<body>
    <?php
    //starting
    echo "hello <br>\n";
    //  echo "date('j-m-y,h:i:s ') <br>\n";

    #variables
    $x = 10;
    $y = 3;
    $name = 'Bruno <br>';

    echo " $x + $y <br>\n";

    echo "I love $name";

    //Variable scope

    $var = 10; //this is a global scope variable and can not be accessed inside a function

    function myTest()
    {
        /*
        using var here will throw an error
        The only way to access this variable is using the global keyword
        */
        global $var;
        static /*static variable*/  $y = 10; //local variable
        echo $var + $y;
        $y++; //this incrementation won't persist unless we set the variable as static
    }
          echo "<h1>The function output is:</h1>  ",myTest();
        echo " <br>\n";
          myTest()  ;
        echo " <br>\n";
          myTest();
          var_dump($var);
          //Array

          $arr = array('bruno','payang');

            var_dump($arr);
      //STRING
    echo "<h2>STRINGS</h2> ";

      $name = 'Bruno come here bro';

     $subName = substr($name,2,10);

     echo " <br>\n";
     echo $subName;
     echo " <br>\n";
     echo strlen($name);
     echo " <br>\n";
     echo str_word_count($name);
     echo " <br>\n";
     echo strrev($name);
     echo " <br>\n";
     echo trim($name);
     echo " <br>\n";
     echo strtoupper($name);
     echo " <br>\n";
     //new variables
    $one = 'Bruno';
    $two = 'Payang';

    $full_name = $one.$two;
    echo $full_name;
    echo " <br>\n";
    echo strtoupper("$one $two");
    echo " <br>\n";

    //NUMBER
    $int = 3;
    $float = 3.1;
    
    echo var_dump($int);
    echo " <br>\n";
    echo is_double($float);
    echo " <br>\n";

    //MATHS

    echo pi();
    echo " <br>\n";
    echo rand(1,10);
    echo " <br>\n";

    //CONSTANTS

    define('GREETING','Bonjour la famille');

    echo GREETING;
    echo " <br>\n";

    //MAGIC CONSTANTS
    echo "<h2>MAGIC CONSTANTS</h2> ";

    #functions
    function myName(){
      return __FUNCTION__;//returns the name of the function
    }

    echo myName();
    echo " <br>\n";
    #file
    echo __FILE__;//returns the file path of the script file
    echo " <br>\n";
    echo __LINE__;//returns the number of line in which it is written
    echo " <br>\n";

    //CONDITIONS
    echo "<h2>CONDITIONSS</h2> ";

    $t = date('H');
    $d = date('H');
    $time = date('H:i:s');

    if($t < 10){
      echo 'Have a wonderfull day';
    }elseif ($t == $d){
      echo 'It\'s alreay 11 AM, make sure to have a lunch';
      echo " <br>\n";
      echo $time;
    }else{
      echo 'Good night';
      echo " <br>\n";
    }

    //LOOPS
    echo "<h2>LOOPS</h2> ";

    $i = 0;
    $index = 10;
    while ($index > $i){
      echo $index;
      echo " <br>\n";
      $index--;
    }
    #foreach
    echo "<h4>foreach</h4> ";

    $numbers = array(1,2,3,4,5,6,5,6,7); //indexed array

    foreach($numbers as $x){
      echo "$x <br>";
    }

    $members = array('Petter'=>'30','John'=>'40','Alice'=>'25');//asociative array

    foreach($members as $x => $y ){
      echo "$x : $y <br>";
    }
    

    //FUNCTION
    echo "<h2>FUNCTIONSS</h2> ";

    function myNumbers(...$n){
      $total = 0;
      for($i = 0; $i < count($n); $i++){
        $total += 1;
      }
      echo "$total <br>";
    }
    myNumbers(1,2,3,4,5,6,7);

    //ARRAY
    echo "<h2>ARRAYS</h2> ";
    $myArr = array(1,2,3,4,5,6);

    echo count($myArr);
    echo " <br>\n";

    $arr = array(1,2,3,4);
    echo var_dump($arr);
    echo "<h4>Indexed arrays</h4> ";

    //loop through an indexed array

    foreach ($arr as $x){
      echo "$x <br>";
      array_push($arr,10);
    }
    //associative array
    echo "<h4>associative array</h4> ";

    function four():int{
      return 4;
    }
  
    $assArr = array('one'=>1,'two'=>2,'three'=>3, 'four'=>four());

    //update value
    $assArr['two'] = 22;
    
    foreach($assArr as $x => $y){
      echo "$x : $y <br>";
    }
    echo "<h4>Remove an item from array</h4> ";
    $tab = [1,2,3,5];

    unset($tab[3]);
    foreach($tab as $x){
      echo "$x <br>";
    }
    $list = [20,22,1,200,3,33,424,22,34,5,2,5,0,5];

    echo array_sum($list)."<br> ";
    sort($list);
    var_dump($list);
    echo "<h4>Multidimensional array</h4> ";

    $cars = array(
      array('BMW',2010,2000),
      array('TOYOTA',1990,3000),
    );
echo $cars[0][0]." "."Year: "." ".$cars[0][1]."Price: ".$cars[0][2]."<br>";
echo $cars[1][0]." "."Year: "." ".$cars[1][1]."Price: ".$cars[1][2]."<br>";

echo "<h2>SUPER GLOBAL VARIABLES</h2> ";

echo "<h4>\$GLOBALS</h4> ";

 $variable = 10;

 function withGlobal(){
  // global $variable;
  $GLOBALS['x'] = 100;
  echo " $GLOBALS[variable] <br>";
 }
 withGlobal();
 echo $x;
echo "<h4>\$_SERVER</h4> ";

echo $_SERVER['SERVER_NAME']."<BR>";
echo $_SERVER['HTTP_HOST']."<BR>";
echo $_SERVER['SERVER_SOFTWARE']."<BR>";

//$_REQUEST

$name = $_REQUEST['fname'];
echo "This is the name from the form: $name <br>";

//$_POST 
$name = $_POST['fname'];
echo "The name submitted is: $name <br>";
//$_GET

$name = $_GET['name'];
$mail = $_GET['email'];
 echo" Welcome $name <br>";
 echo" Your email is $mail <br>";

echo "<h2>REGULAR EXPRESSIONS</h2> ";

echo "<h4>Preg-match</h4> <br>";

$str = 'visit Bruno';
$pattern = '/bruno/i'; //use regular expression for case-insensitive

echo preg_match($pattern,$str);
echo " <br>\n";

    ?>

    //form: practice for $_REQUEST

    <h4>REQUEST</h4>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
    </form>
<h4>POST</h4>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
    </form>

    <h4>GET</h4>

    <form method="GET" action="<?php  ?> ">
    Name: <input type="text" name="name">
  E-mail: <input type="text" name="email">
  <input type="submit">
    </form>
</body>

</html>