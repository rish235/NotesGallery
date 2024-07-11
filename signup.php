<?php
$conn=mysqli_connect("localhost","root","","app");
if($conn){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        // echo $_POST['name'];
        $sql = "INSERT INTO `users` (`username`, `email`, `password`, `phone`) VALUES ('$username', '$email', '$password', '$phone')";
        $res=mysqli_query($conn,$sql);
        if($res){
            header("Location: index.html");
        }else{
            echo "failure";
        }
    }
}else{
    die("not connected");
}

?>