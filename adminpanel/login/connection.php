<?php
$con = mysqli_connect('localhost', 'id18789108_root', 'Usama29may1997!', 'id18789108_portfolio');
if(!$con){
    die('Please Check your connection'.mysqli_error(''));
}
else{
    echo"
    <script>alert('Its connected')</script>";
}

?>