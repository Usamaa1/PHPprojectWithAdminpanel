<?php
session_start();
require_once('connection.php');


if(isset($_POST['Login'])){

    if(empty($_POST['UName']) || empty($_POST['Password'])){

        header("location:login.php?Empty= Please fill User Name and Password!");
    }else{
        $query= "select * from admin where UName ='".$_POST['UName']."' and Pass = '".$_POST['Password']."'"; 
        $result=mysqli_query($con, $query);

        if(mysqli_fetch_assoc($result)){
            $_SESSION['User']=$_POST['UName'];
            header("location:../ads.php");
        }
        // elseif(mysqli_fetch_assoc($result)){
        //     $_SESSION['User']=$_POST['UName'];
        //     header("location:../popular.php");
        // } elseif(mysqli_fetch_assoc($result)){
        //     $_SESSION['User']=$_POST['UName'];
        //     header("location:../arrival.php");
        // }
        else{
            header("location:login.php?Invalid= Incorrect Correct User Name or Password!");
        }
    }
    // echo"Working Now";
}else{


    // echo "Not Working";
}
?>