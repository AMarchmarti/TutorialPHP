<?php
namespace App\Models;

//Lamamamos sol una vez al archivo BaseElement.php 
require_once 'BaseElement.php';

/**
 * Aqui efectuamos la herencia para que Job herede de la clae BaseElement
 * que hemos importado anteriormente. Usamos:
 * @extends 
 * 
 */


class Job extends BaseElement {
    public function __construct($title, $description) {
        $newTitle = 'Job: ' . $title;
        $this->title = $newTitle;
    }

    public function getDurationAsString() {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
      
        return "Job duration: $years years $extraMonths months";
    }
}