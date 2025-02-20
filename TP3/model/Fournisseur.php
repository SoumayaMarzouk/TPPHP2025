
<?php

class Fournisseur{
    private $id;
    private $nom;
    function __construct($id, $nom) {
            $this->id=$id;
            $this->nom = $nom;
  }	
    public function __get($attr) {
       if (!isset($this->$attr)) return "erreur";
          else return ($this->$attr);}
    public function __set($attr,$value) {
  $this->$attr = $value; }

    public function __toString() {
          $s="<option value=".$this->id.">".$this->id."</option>";
          return $s; 
      }
}

?>