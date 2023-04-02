<?php

namespace common\controller;

use common\model\commonModelMenu;
use common\model\commonModelSerials;
use base\baseController;

class commonControllerSerials extends baseController {

    function index()
    {

        $this->setStyles('style');
        $this->data['styles'] = $this->getStyles();

        $menu   = new commonModelMenu();
        $this->data['menu'] = $menu->getMenu();

        $db      = new commonModelSerials();
        $serials = $db->getSerials();
        $this->data['serials'] = $serials;

        $this->data['header'] = $this->render(TEMPLATE_DIR_PUBLIC . 'header.php');
        $this->data['footer'] = $this->render(TEMPLATE_DIR_PUBLIC . 'footer.php');

        echo $this->render(TEMPLATE_DIR_PUBLIC . 'serials.php');
    }

}