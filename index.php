<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learning materials</title>
</head>

<body>
    <h1>Register</h1>
    <form action="include/formhandling.inc.php" method="post">
        Name:
        <input type="text" id="username" placeholder="Username" name="username" /> <br />
        Password:
        <input type="text" id="password" placeholder="Password" name="password" /> <br />
        Email:
        <input type="email" id="email" placeholder="Email address" name="email" />
        <br />
        <button>Sign up</button>
    </form>

</body>

</html>