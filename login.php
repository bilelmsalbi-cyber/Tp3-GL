<?php

$conn=new PDO("sqlite:users.db");

$email= $_POST['email'];
$pass= $_POST['password'];

$sql= "SELECT * FROM users WHERE email='$email'";
$res= $conn->query($sql);

if($res && ($user = $res->fetch(PDO::FETCH_ASSOC))){
    if(password_verify($pass, $user['password'])){
        echo "Connexion reussie";
    }else {
        echo "Mot de passe incorrect";
    }
}else {
    echo "Email introuvable";
}

?>
