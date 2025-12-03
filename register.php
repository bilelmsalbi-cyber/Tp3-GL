<?php

$conn=new PDO("sqlite:users.db");

$titre= $_POST['titre'];
$prenom= $_POST['prenom'];
$nom= $_POST['nom'];
$role= $_POST['role'];
$email= $_POST['email'];
$pass= $_POST['password'];

$pass= password_hash($pass,PASSWORD_DEFAULT);

$sql= "INSERT INTO users(titre, prenom, nom, role, email, password)
        values('$titre','$prenom','$nom','$role','$email','$pass')";

if($conn->exec($sql)){
    echo "Inscription reussie";
} else {
    echo "Erreur!";
}
?>
