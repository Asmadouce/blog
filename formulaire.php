<?php include "headerSamy.php";
include 'fonction.php';
//var_dump($_POST);
if(isset($_POST['sub'])){
    newContact($bdd);
}

?>
<div class="container">  
    <form id="contact" action="formulaire.php" method="post" > <!-- enctype="multipart/form-data" -->
        <h3>Inscription</h3>
        <h4>Entrez un pseudo, un email et un mot de passe</h4>
        <fieldset>
            <input name="pseudo" placeholder="Pseudo" type="text" tabindex="1" required autofocus>
        </fieldset>
        
        <fieldset>
            <input name="mail" placeholder="email" type="email" tabindex="2" required>
        </fieldset>
        <fieldset>
            <input type="password" id="myInput" name="pass" placeholder="mot de passe" type="text" tabindex="3"><br>
            <input type="checkbox" onclick="myFunction()"><br>
            <i id="eye"class="fas fa-eye fa-2x"></i>
            <i id="eyeHidden"class="fas fa-eye-slash fa-2x"></i>
        </fieldset>
       
        <fieldset>
            <button type="submit" id="contact-submit" name="sub" >Valider</button>
        </fieldset>
    </form> 
</div>


<script src="library/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="library/jQuery.js"></script>
	<script src="js/script.js"></script>
    </body>
</html>