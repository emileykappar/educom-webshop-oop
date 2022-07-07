<?php 
require_once "HtmlDoc.php";
class BasicDoc extends HtmlDoc {
    // properties
    protected $data;

    public function __construct($data) {
        $this->data = $data;
    }

    function showHeader() {
        echo ' <h1> Welkom op mijn website! <br></h1>';     
    }
    
    
    // This function shows the navigation menu:
    function showMenu() {
        echo '<ul class="navBar">' . PHP_EOL;
        foreach($this->data['menu'] as $link => $label) {
           $this->showMenuItem($link, $label);
        }
        echo '</ul>';
    }
    
    // This function shows the menu items
    function showMenuItem($link, $label) {
        echo '<li> ';
        echo '<a href="index.php?page=' . $link . '">' . $label . '</a>';
        echo '</li>';
    }
    function showFooter(){
        echo "
        <br><br>
        <br><br>
        
        <footer> <!-- Creates the footer -->
              <p> &copy; 2022, Emiley Kappar </p>
                </footer>";
    }

    protected function showContent(){
        echo '<h2>Home pagina</h2>
        <hr>
      
        <p> <!-- Small welcoming text -->
            Dit is mijn eerste website!<br>
            Kijk gerust rond door op de menu knoppen bovenaan de pagina te klikken.<br>
        
        </p> ' ;
    }

    protected function showTitle(){
        echo '<title>Emiley\'s website</title>';
    }

    protected function showCssLinks(){
        echo '<link rel="stylesheet" href="../css\stylesheet.css">';
    }

    protected function showHeadContent() {
        $this->showTitle();
        $this->showCssLinks();
    }

    protected function showBodyContent() {
        $this->showHeader();
        $this->showMenu();
        $this->showContent(); 
        $this->showFooter();
    }
}

?>
