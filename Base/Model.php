<?php
require_once 'Db.php';
// namespace Base;
// use Base\DB;
// use PDO;
class Model{
    protected $table;

    private $query;

    public static function start(){
        return new static();
    }

    function select(){
        $this->query = "SELECT * FROM " . $this->table ." ";
        return $this;
    }


    public function go(){
        $db = new DB();
        $s = $db->getConnection()->prepare($this->query);
        // echo $this->query;
        $s->execute();

        return $s->fetchAll(PDO::FETCH_ASSOC);
    }
}
