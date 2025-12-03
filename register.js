function verif2() {
    var titre= document.getElementById("titre").value;
    var prenom= document.getElementById("prenom").value.trim();
    var nom = document.getElementById("nom").value.trim();
    var role = document.getElementById("role").value;
    var email= document.getElementById("email").value.trim();
    var pass= document.getElementById("password").value;

    if (!prenom || !nom|| !email|| !pass) {
        alert("Veuillez remplir les champs obligatoires");
        return false;
    }

    var validEnd=email.endsWith(".com")||email.match(/\.[a-zA-Z]+$/)

    if (!email.includes("@")||!validEnd) {
        alert("Email invalide");
        return false;
    }

    if (pass.length < 8 ) {
        alert("Mot de passe invalide");
        return false;
    }

    alert("Donnees valides");
    return true;
};
