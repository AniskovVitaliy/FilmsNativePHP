<?php

namespace common\controller;

use common\model\commonModelMenu;
use base\baseController;

class commonControllerRating extends baseController {

    function index(){

        $this->setStyles('style');
        $this->data['styles'] = $this->getStyles();

        $menu   = new commonModelMenu();
        $this->data['menu'] = $menu->getMenu();

        $this->data['header'] = $this->render(TEMPLATE_DIR_PUBLIC . 'header.php');
        $this->data['footer'] = $this->render(TEMPLATE_DIR_PUBLIC . 'footer.php');

        echo $this->render(TEMPLATE_DIR_PUBLIC . 'rating.php');
    }

}