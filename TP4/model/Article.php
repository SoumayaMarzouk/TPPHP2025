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
      public static function getAll(){
        $bdd=connexpdo();
        $l=array();
        $req="SELECT * FROM article" ;
        $sql = $bdd->query($req) or die($bdd->errorInfo()[2]);
        while($row=$sql->fetch(PDO::FETCH_BOTH)){
          $f=Fournisseur::getByArticle($row[0]);
          $l[]=new Article($row[0],$row[1],$row[2],$row[3],$f);
        }

        return $l;

      }
      public static function insert($art){
      }
      public static function update($art){
      }
      public static function delete($ref){
      }

}
?>