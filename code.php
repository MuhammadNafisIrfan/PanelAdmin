<?php
session_start();

$connection = mysqli_connect("localhost","root","","test");

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    if($password === $cpassword)
    {

        $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            //echo "Saved";
            $_SESSION['success'] = "Admin Profile Added";
            header('Location: register.php');
        }
        else 
        {
            $_SESSION['status'] = "Admin Profile NOT Added";
            header('Location: register.php');    
        }
    }
    else 
    {
        $_SESSION['status'] = "Password And Confirm Password Doesn't Match";
        header('Location: register.php'); 
    }

}


if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE register SET username='$username', email='$email', password='$password' WHERE id ='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data Is Updated";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data Is NOT Updated";
        header('Location: register.php');
    }
}



?>