<?php
// echo "hello";
$conn=mysqli_connect("localhost","root","","app");
session_start();
$username=$_SESSION['username'];
if($conn){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $title=$_POST['title'];
        $sql="DELETE FROM  notes WHERE title='$title'";
        $res=mysqli_query($conn,$sql);
        if($res){
            header("Location: home.php");
        }else{
            header("Location: home.php");
        }
    }
}else{
    die("not connected");
}

?>