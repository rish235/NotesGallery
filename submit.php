<?php
$conn=mysqli_connect("localhost","root","","app");
if($conn){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $title=$_POST['title'];
        $notes=$_POST['notes'];
        session_start();
        $username=$_SESSION['username'];
        $sql="INSERT INTO `notes`(`username`, `title`, `notes`, `date`) values('$username','$title','$notes','2021-02-04')";
        $res=mysqli_query($conn,$sql);
        if($res){
            echo "success";
        }else{
            echo "failure";
        }
    }
}else{
    die("not connected");
}
?>