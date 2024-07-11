<?php
// echo "hello";
$conn=mysqli_connect("localhost","root","","app");
if($conn){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql = "SELECT username FROM  users WHERE email='$email' AND password='$password'";
        $res=mysqli_query($conn,$sql);
        if (!$res) {
            echo "Error: " . mysqli_error($conn); // Print any errors
        } else {
            if (mysqli_num_rows($res) > 0) {
                $row = mysqli_fetch_assoc($res);
                session_start();
                $_SESSION['username']=$row['username'];
                header("Location: home.php");
            } else {
                header("Location: index.html");
            }
        }
    }
}else{
    die("not connected");
}

?>