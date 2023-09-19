<?php 
class Personnage{
    public $vie;
    public $atk;
    public $name;

    public function __construct($nom, $atk = 30, $vie = 80)
    {
        $this->name = $nom;
        $this->atk = $atk;
        $this->vie = $vie;
    }

    public function crier(string $chant = "LEEROY JENKINS!"): string
    {
        return "<div>".$chant."</div>";
    }
    
    public function mort()
    {
        if($this->vie <= 0 )
        {
            echo "<div>".$this->name." est mort</div>";
        }else{
            echo "<div>".$this->name." est vivant</div>";
        }
    }
}


?>