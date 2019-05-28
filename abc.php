<?php

if (isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    if(!empty($name) && !empty($email) && !empty($subject) && !empty($message))
{
 
    $link = mysqli_connect('localhost' ,'root' ,'' ,'portfolio') ;

    if ($link){
        $sql = "INSERT INTO connexion VALUES(null,'$name','$email','$subject','$message');";

    //mysqli_query : Exécute une requête sur la base de données
        if (mysqli_query($link,$sql))
            header('Location: modal.php');
               }
    else{
    echo "error";
        }


    
}
}
    //echo "message enregistre avec succes - Merci- pour votre visite"; 
?>

