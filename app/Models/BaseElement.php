<?php

/**
 * Clase que usaremos como base para la herencia entre las demas 
 * que vamos ir añadiendo. Al usar la palabra reservada extends
 * estamos diciendo que la clase en cuestión heredará tanto las funciones como 
 * el constructor del padre, en este caso este sera el padre
 */

class BaseElement {
    protected $title;
    public $description;
    public $visible = true;
    public $months;

    public function __construct($title, $description) {
        $this->setTitle($title);
        $this->description = $description;
    }

    public function setTitle($t) {
        if($t == '') {
            $this->title = 'N/A';
        } else {
            $this->title = $t;
        }
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDurationAsString() {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
      
        return "$years years $extraMonths months";
    }
}