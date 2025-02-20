<?php
class Article{
    private $ref;
    private $lib;
    private $qt;
    private $prix;
    private $four;
    function __construct($ref, $lib,$qt,$prix,$four) {
            $this->ref=$ref;
            $this->lib = $lib;
            $this->qt = $qt;
            $this->prix = $prix;
            $this->four = $four;
  }	
    public function __get($attr) {
       if (!isset($this->$attr)) return "erreur";
          else return ($this->$attr);}
    public function __set($attr,$value) {
  $this->$attr = $value; }

    public function __toString() {
          $s="<tr><td>".$this->ref."</td><td>".$this->lib."</td><td>".$this->prix."</td><td>".$this->qt."</td><td><select multiple>";
          foreach($this->four as $f){
            $s.=$f;
        
          }
          $s.="</select></td></tr>";
          return $s; 
      }

}
?>