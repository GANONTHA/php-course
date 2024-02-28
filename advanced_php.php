<!DOCTYPE html>
<?php
$cookie_name = 'user';
$cookie_value = 'Bruno Gano';
setcookie($cookie_name,$cookie_value,time() + (86400 * 30), "/");
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced PHP</title>
</head>
<body>
    <h1>Advanced PHP course</h1>
    
    <?php
        //DATE & TIME
        echo "<h1>Date and Time</h1>" . "<br>";
#DATE
        echo "<h3>Date</h3>" . "<br>";

        echo "<p>The current date is: " . date('Y-m-d-l') . "</p>" . "<br>";
        echo "<p>The current date is:" . date('Y/m/d') . "</p>" . "<br>";
        include 'footer.php'; 
#TIME
        echo "<h3>Time</h3>" . "<br>";
        echo "<p>The current Time is: " . date('H-i-sa') . "</p>" . "<br>";
    //set time zone to US new york
    date_default_timezone_set('Africa/Bamako');
    echo "<p>The current Time is: " . date('H-i-sa') . "</p>" . "<br>";
#strtotime 
    echo "<h3>Functions</h3>" . "<br>";    
    $day = strtotime('+2 weeks');
    echo date('Y-m-d-l', $day) . "<br>";

    //practice
    $startdate = strtotime("Saturday");
    $enddate = strtotime("+1 day", $startdate);


    while ($startdate < $enddate) {
        echo date("M d Y", $startdate) ." ";
      
         $startdate = strtotime("+1 day", $startdate);
    }
#FILE HANDLING
echo "<h1>File Handling</h1>" . "<br>";
   echo "<h3>Read and Open file</h3>" . "<br>"; 
    $file_to_read = fopen('file.txt','r+'); //grabing the file and open & specify the mode of opening
    echo fread($file_to_read, filesize('file.txt')); //reading the file that has been opened
    fclose($file_to_read); //closing the file after opening it 
    echo "<h3>Upload file</h3>" . "<br>"; 
#COOKIE
    echo "<h1>Cookies</h1>" . "<br>";
    //check is the cookie is set
    if(!isset($_COOKIE['$cookie_name'])){
        echo "<p>Your cookie " . $cookie_name . " " . "is not set </p>";
    }else{
        echo "<p>Your cookie " . $cookie_name . " " .  "is set properly </p>";
        echo "<h4> Your cookie is:  " . $_COOKIE['$cookie_name'] . "</h4>" . "<br>";
    }
    //check whether cookies are enables
    if(count($_COOKIE) > 0){
        echo "cookies are enabled";
    }else{
        echo "Cookies are not enabled";
#FILTERS
    echo "<h1>FILTERS</h1>" . "<br>";

   echo "<h3>Sanitize a string</h3>" . "<br>"; 

   $my_text = '<p>Text from input</p>';
   echo filter_var($my_text,FILTER_SANITIZE_STRING) . "<br>";

   echo "<h3>Validate an Integer</h3>" . "<br>"; 
   $int_val = 'b';
   if(filter_var($int_val, FILTER_VALIDATE_INT) == false){
    echo "<p>Your Integer is not valid bro</p>";
   }else{
    echo "<p>Congrat your value " . " " . $int_val . " " . "has passed the check barrier </p>";
   }

    }
    echo "<h3>Validate an IP address</h3>" . "<br>"; 

    $ip = '127.0.0.1';

    if( !filter_var($ip, FILTER_VALIDATE_IP) === !true ){
        echo "Your IP address is valid <br>";
    }else{
        echo "You need to make sure you entered the right addresses <br>";

    }

    echo "<h3>Validate and Sanitize email address</h3>" . "<br>"; 

    $email = 'johndoe@gmail.com';

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if( !filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        echo "You entered a valid email address <br>";

    }else{
        echo "Check your email again and make sure you didn't mistype <br>";

    }

    echo "<h3>Validate an integer within a given intervalle</h3>" . "<br>"; 

    $int = 3;
    $min = 1;
    $max = 10;

    if( filter_var($int, FILTER_VALIDATE_INT, array( 'options' => array('min_range' => $min, 'max_range' => $max))) === false ){
        echo "Variable is not within the legal range <br>";

    }else{
        echo "YEAH you can continue...integer valid <br>";

    }
#CALLBACK FUNCTIONS
    echo "<h1>CALLBACK FUNCTIONS</h1>" . "<br>";

    function myCallBack($arr){
        return strlen($arr);
    }
    $fruits = ['appli', 'kiwi','banana'];

    $length = array_map('myCallBack',$fruits);

    print_r($length);


#JSON
    echo "<h1>JSON</h1>" . "<br>";
    echo "<h3>Json_encode()</h3>" . "<br>"; 

    $ages = array("peter"=>23,"Bruno"=>24,"Alice"=>21);
    $cars = array('BMW','TOYOTA','VOLVO');

    echo json_encode($ages);
    echo json_encode($cars);

    echo "<h3>Json_decode()</h3>" . "<br>"; 

    

    $obj = '{"Peter":22,"Payang":90,"Kodio":70}';

    $names = json_decode($obj);

    echo $names -> Peter;
    echo $names -> Payang;
    ?>

<!-- END OF PHP CODE -->

      <form action="upload.php" method="post" enctype="multipart/form-data">
      Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
      </form>
 
</table>
</body>
</html>