<?php
class Item extends Db{
    public function getAllItems(){
        $sql =self::$connection->prepare("SELECT * From items");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
}
}