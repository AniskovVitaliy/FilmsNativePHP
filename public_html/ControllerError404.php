<?php

use base\baseController;
use common\model\commonModelMenu;

class ControllerError404 extends baseController {

    function index(){

        $this->setStyles('style');
        $this->data['styles'] = $this->getStyles();

        $menu   = new commonModelMenu();
        $this->data['menu'] = $menu->getMenu();

        $this->data['header'] = $this->render(TEMPLATE_DIR_PUBLIC . 'header.php');
        $this->data['footer'] = $this->render(TEMPLATE_DIR_PUBLIC . 'footer.php');

        $this->data['error'] = 'Такой страницы не существует';
        echo $this->render(TEMPLATE_DIR_PUBLIC . 'error404.php');

    }

}
