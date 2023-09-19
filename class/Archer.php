<?php
    class Archer extends Personnage{

        public $arc = 3;
        public $vie = 40;

        public function __construct($nom)
        {
            parent::__construct($nom);
            $this->vie = $this->vie / 2;
        }

        public function getTest()
        {
            echo $this->test;
        }


    }

?>