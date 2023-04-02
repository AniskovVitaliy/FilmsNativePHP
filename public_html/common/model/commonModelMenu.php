<?php

namespace common\model;

use base\baseControllerDataBase;

class commonModelMenu extends baseControllerDataBase
{
    function getMenu()
    {
        $query = 'SELECT * FROM menu ORDER BY sort, id ASC';
        return $this->query($query);
    }
}