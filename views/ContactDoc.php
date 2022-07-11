<?php 

require_once "FormsDoc.php";
    class ContactDoc extends FormsDoc {

    // properties
    protected $post_data;
    protected $errors= array();
    // made static because .. // gender,name,email etc are reffered to as "field" in validateForm();
    protected static $fields= array('gender','name','email','tel','communicatievoorkeur','message');


    public function __construct($post_data){
        $this->post_data = $post_data;
        // geef data door aan parent class
        parent::__construct($post_data);
    }

    // methods
    public function validateForm(){
        foreach(self::$fields as $field){
            // if array key $field doesn't exist and there is no data in $post_data, return true.
            if(!array_key_exists($field,$this->post_data)){
                trigger_error("$field is not present in data!");
                return;
            }
        }
        // else.. if the $fields does exists, execute the following code. 
        $this->validateGender();
        $this->validateName();
        $this->validateEmail();
        $this->validateTel();
        $this->validateCommPref();
        $this->validateMessage();
        return $this->errors; // the empty errors array is returned when there were no errors found executing the above code

    }

    public function validateGender(){
        $gender = $this->post_data['gender'];
        if(empty($gender)){
            $this->addError('gender', 'Keuze verplicht');
        } 
    }

    public function validateName(){
        $name = $this->post_data['name'];
        if(empty($name)){
            $this->addError('name', 'Naam is verplicht');
        }
    }

    public function validateEmail(){
        $email = $this->post_data['email'];
        if(empty($email) || (!filter_var($email, FILTER_VALIDATE_EMAIL))){
            $this->addError('email', 'E-mail is niet of verkeerd ingevoerd');
        }
    }

    public function validateTel(){
        $tel = $this->post_data['tel'];
        if(empty($tel) || (!filter_var($email, FILTER_VALIDATE_EMAIL))){
            $this->addError('tel', 'Telefoonnummer is verplicht');
        }
    }

    public function validateCommPref(){
        $commPref = $this->post_data['communicatievoorkeur'];
        if(empty($commPref)){
            $this->addError('communicatievoorkeur', 'Communicatievoorkeur is verplicht');
        }
    }

    public function validateMessage(){
        $message = $this->post_data['message'];
        if(empty($message)){
            $this->addError('message', 'Je bent je vraag vergeten te stellen!');
        }
    }

    public function addError($key, $error){
        $this->errors[$key] = $gender;

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
                    <select name="gender" id="gender" value="'. $this->post_data['gender'] . '">
                  <option value="">Maak een keuze</option>
                <option value="Dhr" '. ($this->post_data['gender'] =="Dhr" ? "selected" : "") . ' >Dhr.</option>
                      <option value="Mvr" '. ($this->post_data['gender'] =="Mvr" ? "selected" : "") . '>Mvr.</option>
                      <option value="Anders" '. ($this->post_data['gender'] =="Anders" ? "selected" : "") . '>Anders.</option>
                    </select>
                <span class="error">* '. $this->post_data['genderError'].' </span>
                    <br>
              
                  <label class= "contact" for="name">Naam:</label>
                  <input class= "inputfield" type="text" id="name" name="name" value="' . $this->post_data['name'] . '"  > <!-- PHP code that ensures to show the values in the input fields after the user hits the submit button-->
          
          <!-- In the HTML form, we add a little PHP script after each required field, which generates the correct error message 
          if needed (that is if the user tries to submit the form without filling out the required fields)-->
          
                     <span class="error">* '.$this->post_data['nameError'].'</span> 
                     <br>
                 
                  <label class= "contact" for="email">E-mail:</label>
                    <input class= "inputfield" type="email" id="email" name="email" value="'.$this->post_data['email'].'" >
                      <span class="error">* '.$this->post_data['emailError'].'</span>
                      <br>
                
                  <label class= "contact" for="tel">Telefoon:</label>
                    <input class= "inputfield" type="text" id="tel" name="tel" value="' . $this->post_data['tel']. '">
                      <span class="error">* ' . $this->post_data['telError'] . ' </span>
                
                <br>';
            
                
            echo '<p><label>Communicatievoorkeur:</label></p> <!-- Option for communication preference: email or phone -->
             
                 <input type="radio" name="communicatievoorkeur" id=commEmail ' .
               ($this->post_data['communicatievoorkeur'] == "email" ? "checked" : "") . ' value="email"> 
               <label>Email</label> 
               
               <input type="radio" name="communicatievoorkeur" id=commTel ' . 
                 ($this->post_data['communicatievoorkeur'] == "tel" ? "checked" : "")     . ' value="tel">
                   <label>Telefoon</label> 
          
                   <span class="error">* ' . $this->post_data['communicatievoorkeurError'] . ' </span>
                   
               <br>
               <br> ';
          
               
                echo '  <label class="message" for="message" id="message">
              <p>Wat is je vraag?</p></label> <!-- Creates input for the question-->
              <textarea class= "inputfield" name="message" rows="5" cols="30">'.$this->post_data['message'].'</textarea>
                 <span class="error">* '.$this->post_data['messageError'].' </span>
                
              <br>
                <br>
              
              <input type="submit" name="submit" value="Verstuur">
              <input type="hidden"  id="page" name="page" value="contact">
              
           
                </form> '; 
              
              }

}

?>