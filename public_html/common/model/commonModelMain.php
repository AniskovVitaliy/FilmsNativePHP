<?php

namespace common\model;

use base\baseControllerDataBase;

class commonModelMain extends baseControllerDataBase{

    function getSerials(){
        $query = 'SELECT * FROM serials';
        return $this->query($query);
    }

    function getFilms(){
        $query = 'SELECT * FROM films';
        return $this->query($query);
    }
}