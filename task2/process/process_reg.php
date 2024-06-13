<?php 
    session_start();
    require_once "../classes/Profile.php";
if($_POST['submit']){
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    if(empty($name) || empty($email) || empty($phone)){
        
     $_SESSION['error'] = "All Fields Required";

        header("location:../form.php");
        exit();
    }
    $emailetd = explode("@", $email);
    $allowed = ["gmail.com", "yahoo.com"];
    if(!in_array($emailetd[1], $allowed)){
        $_SESSION['error'] = "Only gmail.com and yahoo.com are allowed please";

        header("location:../form.php");
        exit();
    }
    $pro1 = new Profile;
    $insert = $pro1->insert_profile($name, $phone, $email);
    if($insert){
        $email = $pro1->send_message_mailer($email, "");
        if($email){
            $_SESSION['feedback'] = "Registration Successfull";

            header("location:../index.php");
            exit();
        }else{
            $_SESSION['error'] = "Unable to send email";

            header("location:../form.php");
            exit();
        }
    }else{
        $_SESSION['error'] = "Error 404, Unable to insert";

        header("location:../form.php");
        exit();
    }
}