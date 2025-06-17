<?php
session_start();
$email= $_POST['email'];
$password = $_POST['password'];

if(isset($email) && isset($password))
{
   $conn= mysqli_connect('localhost','root','123','Notebook');
   $query = "Select * from notebook_users";
   $result = mysqli_query($conn, $query);
   
    while($row= mysqli_fetch_assoc($result))
    {
       $db_email = $row['email'];
       $db_password =$row['password'];
       $db_first_name =$row['first_name'];
       $db_last_name =$row['last_name'];

       if($email == $db_email && $password ==$db_password)
       {

            $_SESSION['user_email']= $db_email;
            $_SESSION['user_first_name']= $db_first_name;
            $_SESSION['user_last_name']= $db_last_name;
             header('Location: home.php');
       }
       else
       {
            $_SESSION['login_error_msg'] = "Your email and password do not match. Please try again later.";
             header('Location: index.php');
       }

    }
   }
   
?>