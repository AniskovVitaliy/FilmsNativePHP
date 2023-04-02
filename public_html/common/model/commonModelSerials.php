<?php

namespace common\model;

use base\baseControllerDataBase;

class commonModelSerials extends baseControllerDataBase{
    function getSerials(){
        $query = 'SELECT * FROM serials';
        return $this->query($query);
    }
}