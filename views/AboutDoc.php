<?php 

require_once "BasicDoc.php";
class AboutDoc extends BasicDoc {

  public function __construct($data){
    parent::__construct($data);
  }

  protected function showContent(){
    echo '<h2>Over mij</h2>
    <hr>
    <p class="text">
      Mijn naam is Emiley en ik ben 23 jaar. <br>
      Ik woon in Dordrecht samen met mijn vriend Declan, en sinds kort ook met onze puppy Echo: <br><br>
      <img src="../Images/Echo.jpg" height="200"> <br><br>

      In oktober 2021 ben ik afgestudeerd en heb ik mijn bachelor ontvangen in International Tourism. <br>
      Deze studie vond ik niet heel uitdagend, en omdat ik interesse kreeg in programmeren en het maken van websites en applicaties ben ik me hier verder in gaan verdiepen. <br>
      Een paar cursussen en zelfstudies later heb ik besloten dat ik inderdaad graag in de IT sector wil werken. En nu doe ik dit Software Engineering traineeship bij Educom. <br><br>
     


      Mijn hobbies zijn: <br>
    </p>

    <ul class="hobbies">
      <li>Wandelen met de hond</li>
      <li>Gamen</li>
      <li>Reizen</li>
      <li>Fitness in de sportschool</li>
    </ul>';
  }
};

?>