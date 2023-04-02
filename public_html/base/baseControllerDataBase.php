<?php

namespace base;

class baseControllerDataBase{

    public $mysqli;

    function connect()
    {
        $this->mysqli = new \mysqli("localhost", "root", "", 'cms-db');
        $this->mysqli->query("SET NAMES UTF8");
    }

    function query($query){

        $this->connect();

        $result = [];

        $r = $this->mysqli->query($query);

        while ($row = $r->fetch_assoc()){
            $result[] = $row;
        }

        $this->mysqli->close();

        return $result;
    }

}