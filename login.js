var form = document.getElementById("loginForm");


 function verif() {

    var email = document.getElementById("email").value.trim();
    var pass = document.getElementById("password").value;



    if (!email ||!pass) {
        alert("Veuillez remplir les champs obligatoires");
        return false; 
    }
};
