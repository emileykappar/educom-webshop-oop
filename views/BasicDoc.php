<?php 
include_once "HtmlDoc.php";
class BasicDoc extends HtmlDoc {

    public function __construct($model) { // $model krijg je mee vanuit controller en wordt in de constructor gestopt.
        $this->model = $model;
    }

    // methods
    protected function showHeader() {
        echo ' <h1> Welkom op mijn website! <br></h1>';
    }
    

    protected function showMenu() {
        echo '<ul class="navBar">' . PHP_EOL;
        foreach($this->model->menu as $menuItem) {
           $menuItem->showMenuItem();
        }
        echo '</ul>';
    }  
        
    protected function showFooter(){
        echo '<br><br>
        <br><br>
            
        <footer> 
            <p> &copy; 2022, Emiley Kappar </p>
        </footer>';
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
        echo '<title>Emiley\'s website - '. $this->model->page .'</title>';
    }

    protected function showCssLinks(){
        echo '<link rel="stylesheet" href="http://localhost/educom-webshop-oop/css/stylesheet.css">';
        /*echo '<link rel="stylesheet" href="../css/stylesheet.css">';
        CHECK FOR ABSOLUTE PATH //
        $path = parse_url("http://localhost/educom-webshop-oop/css/stylesheet.css", PHP_URL_PATH);     
        echo $_SERVER['DOCUMENT_ROOT'] . $path;
        C:/Bitnami/wampstack-8.1.5-0/apache2/htdocs/educom-webshop-oop/css/stylesheet.css
        */
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
