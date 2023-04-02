<?php

const TEMPLATE_DIR_PUBLIC = 'common/template/';
const IMG_DIR = 'common/template/assets/img/';

function CMSAutoload($path){
    $path = str_replace('\\', '/', $path);
    if(file_exists("{$path}.php")){
        require_once "{$path}.php";
    }else{
        exit("не верное подключение {$path}.php");
    }
}
spl_autoload_register('CMSAutoload');

