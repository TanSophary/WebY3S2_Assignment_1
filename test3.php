<?php

 if(isset($_POST['submit'])) {
 $username = $_POST['username']; $email = $_POST['email'];
 echo "<h1>"."my username is: <b style='color:red'>$username</b>"."<h1>";
 echo "<h1>"."my email is: <b style='color:green'>$email</b>"."<h1>";
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="003_superglobals.php">
        username: <input type="text" name="username"><br>
        email: <input type="text" name="email"><br>
    <input type="submit" name="submit"></form>
    <h2><ahref="003_superglobals_get.php?lang=php&coursep=wad">Get Link</a></h2>
</body>
</html>
<?php
 if(isset($_GET['lang']) AND isset($_GET['coursep'])) {
 $get = $_GET['lang'];
 $course_program = $_GET['coursep'];
 echo "<h1>"."My Get Language Name : <b style='color:red'>$get</b>"."</h1>";
 echo "<h1>"."My Course Program Name : <b style='color:green'>$course_program</b>"."</h1>";
 }
 echo "<h2><a href='003_superglobals.php'>Back Link</a></h2>";
 ?>