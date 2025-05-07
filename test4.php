<form action="" method="post">
 <h1>System Login</h1>
 <p>Username: <input type="text" name="username"></p><p>Password: <input type="password" name="password"></p>
 <p><input type="submit" name="submit"></p>
 </form>
 <?php
 $message = [];
 if(isset($_REQUEST['submit'])){
 $username = $_REQUEST['username']; $password = $_REQUEST['password'];
 if(empty($username)){ $message[] = "username empty"; }
 elseif(strlen($username) < 2){ $message[] = "username can not be less than 2 characters"; }
 if(empty($password)){ $message[] = "password empty"; }
 elseif(strlen($password) < 5){ $message[] = "password can not be less than 5 characters"; }
 if(empty($message)){
 echo "Username: <b style='color:red'>$username</b>"; echo "<br>";
 echo "Password: <b style='color:green'>$password</b>";
 }
 }
 ?>
 <?php
 $i=1;
 foreach($message as $m){ echo "<h4 style='color:purple'>$i- ".$m."</h4>"; $i++; }
 ?>