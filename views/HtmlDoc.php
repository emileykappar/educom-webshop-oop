<?php 

class HtmlDoc {

    private function beginDocument() {
        echo '<!DOCTYPE html> 
                <html>';
    }

    private function beginHeadSection() {
        echo '<head>';
    }

    protected function showHeadContent() {
        echo '<title>Emiley\'s website</title>';
    }

    private function endHeadSection() {
        echo '</head>';
    }

    protected function showBodyContent() {
        echo '<body> <div id="pageContainer">';
    }

    protected function endBodySection(){
        echo '</div></body>';
    }

    protected function endDocument() {
        echo '</html>';
    }
    // methods
    public function show(){
        $this->beginDocument();
        $this->beginHeadSection();
        $this->showHeadContent();
        $this->endHeadSection();
        $this->showBodyContent();
        $this->endBodySection();
        $this->endDocument();

    }
}

?>
