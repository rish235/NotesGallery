<?php
// echo "hello";
$conn=mysqli_connect("localhost","root","","app");
session_start();
$username=$_SESSION['username'];
if($conn){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $title=$_POST['title'];
        $notes=$_POST['notes'];
        $mydate=date("d-m-y h:i:s");
        $sql="INSERT INTO `notes`(`username`, `title`, `notes`, `date`) VALUES('$username','$title','$notes','$mydate')";
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