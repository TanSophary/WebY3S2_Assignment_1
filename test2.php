<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
 <p>Username:<input type="text" name="username"></p>
 <p>Password:<input type="password" name="password"></p>
 <p><input type="submit" name="submit"></p>
 </form>
 <?php
 if(isset($_POST['submit'])){
 $username = $_POST['username']; $password = $_POST['password'];
 // echo $username; echo $password;
 echo "<h2> Username : <b style='color:blue'>".$username."</b></h2>";
 echo "<h2> Password : <b style='color:green'>".$password."</b><h2>";
 }
 ?>
</body>
</html>