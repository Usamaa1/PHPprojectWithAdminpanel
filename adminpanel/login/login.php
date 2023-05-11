<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="login-style.css">
</head>
<body>
    <div class="bg">
    <div class="main-container">
        <h1>Admin Login</h1>
        <div class="form-container">

<form action="process.php" method="post" class="main-form">
<input type="text" name="UName" placeholder="User Name" class="form-control">
<input type="password" name="Password" placeholder="Password" class="form-control">
<button type="submit" name="Login">Login</button>

</form>


</div>
<div class="error-txt">
<?php
    if(@$_GET['Empty']==true){
        ?>
        <div class="error-bg"><?php
        echo $_GET['Empty'];
        ?></div>
        <?php
    }
?>

<?php
    if(@$_GET['Invalid']==true){
        ?>
        <div class="error-bg"><?php
        echo $_GET['Invalid'];
        ?></div>
        <?php
    }
?>

</div>

    </div>
 

    </div>
   
   


    
</body>
</html>