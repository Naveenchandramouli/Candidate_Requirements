<?php
$username="root";
$servername="localhost";
$password="";
$dbname="naveen";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST["submit"]))
{
    $submit=$_POST["submit"];
    if(strcmp($submit,"submit")==0)
    {
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from mcc where username='$username' and password='$password' ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($result);
    if($row>0)
    {
        echo "<script> alert('login successfull!') </script>";
    }
    else
    {
        echo "<script> alert('Login NOT successfull!') </script>";
    }
    }
}
?>

<html>
    <head>
        <title>Login page</title>
    <style>
       
    </style>
    </head>
    
    <body><center>
        <form name="form" method="post" action="">    
            <br><br>
            <h3> Login Page <h3> 
                <br>
                <label>Username : </label>   
                <input type="text" placeholder="Enter Username" name="username">  
                <br><br>
                <label>Password : </label>   
                <input type="password" placeholder="Enter Password" name="password">
                <br>
                <br>  
                <input type="submit" name="submit" value="submit">      
        </form> </center>    
    </body>
</html>