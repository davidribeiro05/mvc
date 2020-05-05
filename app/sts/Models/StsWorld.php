<?php


namespace Sts\Models;


class StsWorld
{
    public $result;

    public function read()
    {
        $readWorld = new \Sts\Models\Conn();

        $limit = 10;
        $query = "SELECT * FROM city LIMIT :limit";
        $stmt = $readWorld::getConn()->prepare($query);
        $stmt->bindParam(':limit', $limit, \PDO::PARAM_INT);
        $stmt->execute();
        $this->result['city'] = $stmt->fetchAll();
        return $this->result;
    }
}