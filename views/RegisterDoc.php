<?php 

require_once "FormsDoc.php";
    class RegisterDoc extends FormsDoc {

    public function __construct($data){
        parent::__construct($data);
    }

    function showContent() { // Show the next part only when $valid is false
        echo '
        <h2>Maak een account</h2>
        <hr>
        
        <form method="POST" action="index.php">
        <p><span class="error">* Verplicht </span></p>
        
        <label for="name">Voornaam:</label>
            <input type="text" name="name" id="email">
            <span class="error">*</span>
            <br>
        
        <label for="email">E-mail:</label>
            <input type="email" name="email" id="email">
            <span class="error">*</span>
            <br>
        
        <label for="password">Wachtwoord:</label>
            <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*[|]).{8,}" 
            title="Must contain at least one number, one uppercase and one lowercase letter,
            at least 8 or more characters and cannot use the | character">
            <span class="error">*</span>
            <br>
        
        <label for="r_password">Herhaal wachtwoord:</label>
            <input type="password" name="r_password" id="r_password">
            <span class="error">*</span>
            <br>
            <br>
        
        <input type="submit" name="submit" value="Verstuur">
        <input type="hidden" id="page" name="page" value="register" >
        
        </form> ';
        
        // when user is registrated; go to login page
      }


}

?>