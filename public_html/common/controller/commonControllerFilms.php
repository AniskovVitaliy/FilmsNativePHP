<?php

namespace common\controller;

use common\model\commonModelMenu;
use base\baseController;

use common\model\commonModelFilms;

class commonControllerFilms extends baseController {

    function index(){

        $this->setStyles('style');
        $this->data['styles'] = $this->getStyles();

        $menu   = new commonModelMenu();
        $this->data['menu'] = $menu->getMenu();

        $db   = new commonModelFilms();
        $films = $db->getFilms();
        $this->data['films'] = $films;

        $this->data['header'] = $this->render(TEMPLATE_DIR_PUBLIC . 'header.php');
        $this->data['footer'] = $this->render(TEMPLATE_DIR_PUBLIC . 'footer.php');

        echo $this->render(TEMPLATE_DIR_PUBLIC . 'films.php');
    }

}