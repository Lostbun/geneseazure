<?php 
    session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">




</head>




<body onload="">

<form method="POST" action="index.php">
<div id="logocontain">
  
  <img id="lgo" class="logo" src="images/DevOpslogos.png" width="300" height="80">

</div>
<div class="card">

  <h1 id="lgheader">Login</h1>



 

  <a class="labels"> Username : <input id="users" name="user" class="put" type="text"></input></a></br>
  <a class="labels"> Password : <input id="passs" name="pass" class="put" type="password"></input></a><br>




  <button id="loginbtn">
   <span class="transition"></span>
   <span class="gradient"></span>
   <span class="label">Login</span>
  </button>


</div>
</form>








<?php 

  $adminuser = 'admins';
  $adminpass = 'daniel';




if (isset($_POST['user']) && isset($_POST['pass'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    
if($user == $adminuser && $pass == $adminpass){

  $_SESSION['user'] = $_POST['user'];
  $_SESSION['pass'] = $_POST['pass'];

  header("Location: adminpage.php");

}
else{


}



} else{
  $user = '';
  $pass = '';
}




?>






</body>
</html>