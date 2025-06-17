<?php
session_start();

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];
 
if(isset($first_name) && isset($last_name)  && isset($mobile) && isset($email) && isset($password))
{
    
    $conn = mysqli_connect('localhost','root','123','Notebook');
    $query= "Insert into notebook_users(`first_name`,`last_name`,`mobile`,`email`,`password`) Values('$first_name','$last_name','$mobile','$email','$password')";
  
    $result = mysqli_query($conn, $query);
  
    if($result ==1)
    {
        $_SESSION['register_msg']= "User has been registered successfully.";
    }
 
    header('Location: index.php');
}
?>