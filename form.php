<?php
require 'config.php';
require 'validation.php';
    if(isset($_POST['submit']))
    {   
        $name=valid($_POST['name']);
        $regno=valid($_POST['regno']);
        $branch=valid($_POST['branch']);
        $semester=valid($_POST['semester']);
        $phone=valid($_POST['phone']);
        $email=valid($_POST['email']);
        if (empty($name) || empty($regno) || empty($branch) || empty($semester) || empty($phone) ||empty($email))
        {
            $error= "All the fields are required to be filled!";
        }
        else
        {
            $sql="INSERT INTO user VALUES ('$name','$regno','$branch','$semester','$phone','$email')";
            if (mysqli_query($conn,$sql) )
                header ("Location: success.php");
        }
    }
?>  