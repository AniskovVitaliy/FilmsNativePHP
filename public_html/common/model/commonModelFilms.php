<?php

namespace common\model;

use base\baseControllerDataBase;

class commonModelFilms extends baseControllerDataBase{
    function getFilms(){
        $query = 'SELECT * FROM films';
        return $this->query($query);
    }
}