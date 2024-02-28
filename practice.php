
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Practice PHP</title>
</head>
<body>
    <h1>My exercises for practicing PHP</h1>

    <?php
        //Get current version of PHP
        #phpinfo();
    
    //display a string
        echo 'Tomorrow I\'ll learn PHP global variables. <br>';
        echo "This is a  bad command: del c:\\*.*";
    //variable within a title and anchor tag
        $var = "PHP Tutorial";
        echo "<a> <h3> $var </h3> </a>";
    //form
        //check it the form is submitted and 'name' is set in $_POST
        if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['name'])){
       $name =  $_POST['name'] ;
       echo "Your name is: $name <br>";
        }
    //get browser details
        echo '<h4>Details about your browser: </h4>';
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>".__FILE__;
    //parse url and display its components: HOST, SCHEME & PATH
        $url = 'https://www.bruno.com/php-course/php-basics.php';

        $url = parse_url($url); //parse the url and store the components into url variables
        
        echo '<br> Scheme: ' . $url['scheme'] . "<br>";
        echo 'Host: ' . $url['host'] . "<br>";
        echo 'Path: ' . $url['path'] . "<br>";
    //table
        $a = 100;
        $b = 200;
        $c = 1000;

        echo "
            <table border = 1 cellpadding = 0 cellespacing = 0 >
                <tr><td>Salary of Mr. A is: </td> <td> $a </td> </tr>
                <tr> <td> Salary of Mr. B is: </td> <td> $b </td> </tr>
                <tr> <td> Salary of Mr. C is: </td> <td> $c </td> </tr>
            </table>
        ";
    //get the full URL path
         $url_path = $_SERVER['HTTP_REFERER'];
         echo $url_path."<br>";
    //get the OS
        echo PHP_OS . "<br>";

        if( strtoupper(substr(PHP_OS,0,3)) ==='WIN' ){
            echo 'This is a server using Windows';
        }else{
            echo 'This server is not running on Windows';
        }

    ?>
    <form  method="post">
        <h3>Please enter your name and submit</h3>
        <input type="name" name="name">
        <button type="submit">Submit Name</button>
    </form>
</body>
</html>