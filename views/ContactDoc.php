<?php 

require_once "FormsDoc.php";
    class ContactDoc extends FormsDoc {

    // properties
    protected $gender;
    protected $name;
    protected $email;
    protected $tel;
    protected $commPref;
    protected $message;
    protected $genderError;
    protected $nameError;
    protected $emailError;
    protected $telError;
    protected $commPrefError;
    protected $messageError;
    protected $valid= false;

    public function __construct($data){
        parent::__construct($data);
    }

    // methods
    function validate() {    
        
          if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $this->gender = testInput(getPostVar("gender"));
            $this->name = testInput(getPostVar("name"));
            $this->email = testInput(getPostVar("email"));
            $this->tel = testInput(getPostVar("tel"));
            $this->commPref = testInput(getPostVar("communicatievoorkeur"));
            $this->message = testInput(getPostVar("message"));
          
            if (empty($gender)){
                $this->genderError ="Keuze verplicht";
            } if 
               (empty($name)){
              $this->nameError ="Naam is verplicht";
            } if 
              (empty($email) || (!filter_var($email, FILTER_VALIDATE_EMAIL))){
              $this->emailError ="E-mail is niet of verkeerd ingevoerd";
            } if 
              (empty($tel)){
              $this->telError ="Telefoonnummer is verplicht";
            } if 
              (empty($commPref)){
              $this->commPrefError ="Communicatievoorkeur is verplicht";
            } if 
              (empty($message)){
              $this->messageError ="Je bent je vraag vergeten te stellen!";
            };
            
        // This if/else statement checks if all the errors are empty and shows if the form is valid or not.
            
            if (empty($genderError) && empty($nameError) && empty($emailError) && empty($telError)
              && empty($commPrefError) && empty($messageError)){
                $valid = true;
            } else {
                $valid = false;
            }
          };
          
        
        return array("gender" => $gender, "genderError" => $genderError, "name" => $name, "nameError" => $nameError,
        "email" => $email, "emailError" => $emailError, "tel" => $tel, "telError" => $telError,"communicatievoorkeur" => $commPref, 
        "communicatievoorkeurError" => $commPrefError, "message" => $message, "messageError" => $messageError, "valid" => $valid);
        
        }

        function showContent() { // Shows the next part only when $valid is false
            echo '
            <h2>Contact formulier</h2>
                  <hr>
            <!-- Makes sure that the entered data is displayed on the same page (using the action="filename" of the page it needs to be shown on. -->
              
            <form method="POST" action="index.php">
            <p><span class="error">* Verplicht </span></p>
          <!-- Input fields to type in name/email/phone number -->
                  <label class="contact" for="gender">Kies je aanhef:</label>
                    <select name="gender" id="gender" value="'. $this->data['gender'] . '">
                  <option value="">Maak een keuze</option>
                <option value="Dhr" '. ($this->data['gender'] =="Dhr" ? "selected" : "") . ' >Dhr.</option>
                      <option value="Mvr" '. ($this->data['gender'] =="Mvr" ? "selected" : "") . '>Mvr.</option>
                      <option value="Anders" '. ($this->data['gender'] =="Anders" ? "selected" : "") . '>Anders.</option>
                    </select>
                <span class="error">* '. $this->data['genderError'].' </span>
                    <br>
              
                  <label class= "contact" for="name">Naam:</label>
                  <input class= "inputfield" type="text" id="name" name="name" value="' . $this->data['name'] . '"  > <!-- PHP code that ensures to show the values in the input fields after the user hits the submit button-->
          
          <!-- In the HTML form, we add a little PHP script after each required field, which generates the correct error message 
          if needed (that is if the user tries to submit the form without filling out the required fields)-->
          
                     <span class="error">* '.$this->data['nameError'].'</span> 
                     <br>
                 
                  <label class= "contact" for="email">E-mail:</label>
                    <input class= "inputfield" type="email" id="email" name="email" value="'.$this->data['email'].'" >
                      <span class="error">* '.$this->data['emailError'].'</span>
                      <br>
                
                  <label class= "contact" for="tel">Telefoon:</label>
                    <input class= "inputfield" type="text" id="tel" name="tel" value="' . $this->data['tel']. '">
                      <span class="error">* ' . $this->data['telError'] . ' </span>
                
                <br>';
            
                
            echo '<p><label>Communicatievoorkeur:</label></p> <!-- Option for communication preference: email or phone -->
             
                 <input type="radio" name="communicatievoorkeur" id=commEmail ' .
               ($this->data['communicatievoorkeur'] == "email" ? "checked" : "") . ' value="email"> 
               <label>Email</label> 
               
               <input type="radio" name="communicatievoorkeur" id=commTel ' . 
                 ($this->data['communicatievoorkeur'] == "tel" ? "checked" : "")     . ' value="tel">
                   <label>Telefoon</label> 
          
                   <span class="error">* ' . $this->data['communicatievoorkeurError'] . ' </span>
                   
               <br>
               <br> ';
          
               
                echo '  <label class="message" for="message" id="message">
              <p>Wat is je vraag?</p></label> <!-- Creates input for the question-->
              <textarea class= "inputfield" name="message" rows="5" cols="30">'.$this->data['message'].'</textarea>
                 <span class="error">* '.$this->data['messageError'].' </span>
                
              <br>
                <br>
              
              <input type="submit" name="submit" value="Verstuur">
              <input type="hidden"  id="page" name="page" value="contact">
              
           
                </form> '; 
              
              }

}

?>