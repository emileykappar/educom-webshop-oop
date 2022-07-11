<?php 

require_once "FormsDoc.php";
class ContactDoc extends FormsDoc {

  public function __construct($data){
      parent::__construct($data);
  }

  public function showContent(){
  echo '
  <h2>Contact formulier</h2>
  <hr>
    
  <form method="POST" action="index.php">
  <p><span class="error">* Verplicht </span></p>

  <label class="contact" for="gender">Kies je aanhef:</label>
    <select name="gender" id="gender">
    <option value="">Maak een keuze</option>
    <option value="Dhr">Dhr.</option>
    <option value="Mvr">Mvr.</option>
    <option value="Anders">Anders.</option>
    </select>
    <span class="error">*</span> 
    <br>

  
  <label class= "contact" for="name">Naam:</label>
    <input class= "inputfield" type="text" id="name" name="name">
    <span class="error">*</span> 
    <br>
       
  <label class= "contact" for="email">E-mail:</label>
    <input class= "inputfield" type="email" id="email" name="email">
    <span class="error">*</span>
    <br>
      
  <label class= "contact" for="tel">Telefoon:</label>
    <input class= "inputfield" type="text" id="tel" name="tel">
    <span class="error">*</span>
    <br>';
  
      
  echo '
  <p><label class="communicatie" >Communicatievoorkeur:</label></p>
   
    <input type="radio" name="communicatievoorkeur" id=commEmail value="email"> 
    <label>Email</label> 
     
    <input type="radio" name="communicatievoorkeur" id=commTel value="tel">
    <label>Telefoon</label> 

    <span class="error">*</span>      
    <br>
    <br> ';

     
  echo '
  <label class="communicatie" for="message" id="message">
    <p>Wat is je vraag?</p></label>
    <textarea class= "inputfield" name="message" rows="5" cols="30"> </textarea>
    <span class="error">*</span>
      
    <br>
      <br>
    
    <input type="submit" name="submit" value="Verstuur">
    <input type="hidden"  id="page" name="page" value="contact">
    
 
  </form> '; 
  }
}

?>