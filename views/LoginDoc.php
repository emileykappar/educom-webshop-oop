<?php 

require_once "FormsDoc.php";
    class LoginDoc extends FormsDoc {

    public function __construct($data){
        parent::__construct($data);
    }

    public function showContent(){
        echo '
        <h2>Log in met je account</h2>
        <hr>
        
        <form method="POST" action="index.php">
        <p><span class="error">* Verplicht </span></p>

        <label for="email">Gebruikersnaam:</label>
            <input type="text" name="email" title= "Gebruik je email als gebruikersnaam">
            <span class="error">*</span>
            <br>
        
        <label for="password">Wachtwoord:</label>
            <input type="password" name="password">
            <span class="error">*</span>
            <br>
            <br>
            
        <button type="submit">Log in</button>
        <input type="hidden" id="page" name="page" value="login">';
  }

}

?>