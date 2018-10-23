<?php

class Page {
    private $titre;
    private $depart;
    private $fichier_header;
    private $fichier_corps;
    private $fichier_footer;
    private $fichiers_style;
    private $fichiers_script;

    public function __construct() {
        $this->titre = 'Page Myllaume';
        $this->depart = '..';
    }

    public function donnerTitre($var) {
        $this->titre = $var;
    }

    public function donnerDepart($var) {
        if($var == 'racine') {
            $this->depart = '.';
        }
        elseif ($var == 'pages') {
            $this->depart = '..';
        }
    }

    public function donnerFichierHeader($fichier) {
        if($this->depart == '.') {
            $this->fichier_header = './include/'.$fichier;
        }
        elseif ($this->depart == '..') {
            $this->fichier_header = '../include/'.$fichier;
        }
    }

    public function donnerFichierCorps($fichier) {
        if($this->depart == '.') {
            $this->fichier_corps = './include/'.$fichier;
        }
        elseif ($this->depart == '..') {
            $this->fichier_corps = '../include/'.$fichier;
        }
    }

    public function donnerFichierFooter($fichier) {
        if($this->depart == '.') {
            $this->fichier_footer = './include/'.$fichier;
        }
        elseif ($this->depart == '..') {
            $this->fichier_footer = '../include/'.$fichier;
        }
    }

    public function donnerFichiersStyle($tab) {
        foreach ($tab as $fichier) {
            $this->fichiers_style[] = $fichier;
        }
    }

    public function donnerFichiersScript($tab) {
        foreach ($tab as $fichier) {
            $this->fichiers_script[] = $fichier;
        }
    }

    public function afficherCodePage() {
        echo '<!DOCTYPE html>';
        echo '<html lang="fr">';
        echo '<head>';
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<title>'.$this->titre.'</title>';

        foreach ($this->fichiers_style as $fichier) {
            echo '<link rel="stylesheet" href="'.$this->depart.'/styles/'.$fichier.'">';
        }

        echo '<body>';
        echo '<div class="wrapper" id="wrapper">';
        include("$this->fichier_header");
        echo '<main class="main row">';
        include("$this->fichier_corps");
        include("$this->fichier_footer");
        echo '</main>';
        echo '</div>';

        foreach ($this->fichiers_script as $fichier) {
            echo '<script src="'.$this->depart.'/script/'.$fichier.'"></script>';
        }

        echo '</body>';
        echo '</html>';
    }
}

?>