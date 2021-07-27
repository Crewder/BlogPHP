<?php

namespace App\Repository;

use App\Database\Database;

class BaseRepository
{
    private Database $db;

    public function __construct(){
       $this->db = new Database();
    }

    public function create(string $table)
    {
        $req = 'INSERT INTO ' . $table;
        $this->db->query($req);
    }

    public function update(string $table, int $id)
    {
        $req = 'UPDATE ' . $table . ' SET ' . /* nom_colonne = new_value */ 'WHERE ID=' . $id;
        $this->db->query($req);
    }

    public function delete(string $table, int $id)
    {
        $req = 'DELETE FROM' . $table . 'WHERE ID=' . $id;
        $this->db->query($req);
    }

    public function findOne(string $table, int $id)
    {
        $req = 'SElECT * FROM' . $table . ' WHERE ID=' . $id;
        $this->db->query($req);
    }

    public function findBy(string $table, array $params)
    {
        $req = 'SElECT * FROM' . $table . ' WHERE ' . $params;
        $this->db->query($req);
    }

    public function findAll(string $table)
    {
       $req = 'SElECT * FROM' . $table ;
       return  $this->db->query($req);
    }
}