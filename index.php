<?php
session_start();
if(isset($_SESSION["tableau"])) 
    {
        $_SESSION["tableau"][$_POST ["titre"]] = $_POST ["message"];
    }
    else{
        $_SESSION["tableau"][$_POST ["titre"]] = $_POST ["message"];
    }
print_r($_SESSION["tableau"]);
#<!-- $titre= $_POST ["titre"];
#$message= $_POST ["message"];
#$tableau2= [1 => "$titre", 2=> "$message"];
#echo "titre: $titre ","message: $message "; -->
#if(isset($_SESSION["tableau"])) 
#    {
#        $_SESSION["tableau"][$_POST ["titre"]] = $_POST ["message"];
#    }
#    else{
#        $_SESSION["tableau"][$_POST ["titre"]] = $_POST ["message"];
#    }
#print_r ("titre: [$_POST ["titre"]]" ,"message: $_POST ["message"] ");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form method="post" action="">
        <input type="text" name="titre" placeholder="Entrez l'intituler de votre tache">
        <input type="text" name="message" placeholder="Entrez la description de la tache à accomplire">
        <input type="submit" value="Envoyer le formulaire">
    </form>
</body>
</html>


