<?php
    include("config.php");

    session_start();
    if(isset($_POST['submit'])){
		$name=$_POST["name"];
		$password=$_POST["password"];

        if(empty($name)){
            header("location:login.php?error=User Name is Required");
            exit();
        }elseif(empty($password)){
            header("location:login.php?error=Password is Required");
            exit();
        }
        else{
            $sql= "SELECT * FROM users WHERE  name='$name' AND password='$password'" ;
            $result= mysqli_query($mysqli,$sql);

            if(mysqli_fetch_assoc($result))
            {
                $row=mysqli_fetch_assoc($result);
                $_SESSION['name']=$row["name"];
                $_SESSION['id']=$row["id"];
                header("Location:index.php");
                exit();
            }
            else
            {
                header("Location:login.php?error=invalid username or password");
                exit();
            }    
        }          
    

    }
    
?>