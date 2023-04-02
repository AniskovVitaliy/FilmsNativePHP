<?php

namespace common\controller;

use base\baseController;
use common\model\commonModelMenu;

class commonControllerContact extends baseController {

    function index(){

        $this->setStyles('style');
        $this->data['styles'] = $this->getStyles();

        $menu   = new commonModelMenu();
        $this->data['menu'] = $menu->getMenu();

        $this->data['header'] = $this->render(TEMPLATE_DIR_PUBLIC . 'header.php');
        $this->data['footer'] = $this->render(TEMPLATE_DIR_PUBLIC . 'footer.php');

        echo $this->render(TEMPLATE_DIR_PUBLIC . 'contact.php');
    }

}