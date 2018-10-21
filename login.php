<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


</head>
<body>
<br>
<div class="container">

    <form method="POST">
  <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Login</label>
    <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  
  <div class="form-group col-md-6">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <div class="col-md-6">
  <button type="submit" class="btn btn-primary btn-block">Login</button>
  </div>
</form>

</div>
</body>
</html>

<?php
/*vypsat obsah postu
echo '<br>POST: ';
var_dump($_POST);
*/

session_start();
if (isset($_POST['login'])) {
    
if ($_POST['login'] == 'admin' && $_POST['password'] == 'top-secret') {
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['data'] = ['Datum registrace:' => '2.4.2018', 'Souhlas s podmínkami' => 'ANO', 'Počet objednávek' => 23];
    echo '<br><a href="/php-lekce-3/admin.php">Continue do administation</a>  <br>';
}
else {
    echo '<br> Invalid login and/or username <br>';
}
//var_dump($_SESSION);
}
 

