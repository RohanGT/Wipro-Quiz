<?php
require 'config.php';
require 'validation.php';
global $error;
global $success;
$error="";
$success="";
function valid_email1($str) 
{
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/", $str)) ? FALSE : TRUE;
}
function valid_email2($str) 
{
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+)$/", $str)) ? FALSE : TRUE; 
}
    if(isset($_POST['submit']))
    {   
        $name=valid($_POST['name']);
        $regno=valid($_POST['regno']);
        $branch=valid($_POST['branch']);
        @$semester=valid($_POST['semester']);
        $phone=valid($_POST['phone']);
        $email=valid($_POST['email']);
        if (empty($name) || empty($regno) || empty($branch) || empty($semester) || empty($phone) ||empty($email))
        {
            $error= "All fields are required to be filled!";
        }
        else
        {    
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
            {   
                $error = "Name must contain letters and spaces only";
            }
            else if($regno<130000000||$regno>190000000)
            {
                $error = "Invalid registration number";
            }
            else if($phone<1000000000||$phone>9999999999)
            {
                $error="Invalid phone number";
            }
            else if(ctype_alpha($branch)==false)
            {
                $error="Invalid Branch";
            }
            else if(!(valid_email1($email)||valid_email2($email)))
            {
                $error="Invalid email format";
            } 
            else
            {
        	try
        	{
            	$sqlqr="INSERT INTO user (name,regno,branch,semester,phone,email) VALUES ('$name','$regno','$branch','$semester','$phone','$email')";
            	$sql=$conn->prepare($sqlqr);
           		$sql->bindParam(':nam',$name);
           		$sql->bindParam(':rno',$regno);
            	$sql->bindParam(':br',$branch);
            	$sql->bindParam(':sem',$semester);
            	$sql->bindParam(':ph',$phone);
            	$sql->bindParam(':mail',$email);
            	if($sql->execute());
            		$success="Successfully Registered";
        	}
        	catch(PDOException $e)
        	{
        		$error="Registration number already entered";
        	}
            }
        }
    }
?>  