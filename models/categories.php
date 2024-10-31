<?php
class getALLcate extends Db{
    public function getAllCate(){
        $sql =self::$connection->prepare("SELECT * From categories");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
}
}