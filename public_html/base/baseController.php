<?php

namespace base;

abstract class baseController {

    public $data = [];
    public $styles = [];

    public $output;
    public $route;

    function route(){

        if(is_file($this->route . '.php')){

            include $this->route . '.php';
            $nameClass = str_replace('/', '\\', $this->route);
            $front = new $nameClass();

            $front->index();

        }else{

            include 'ControllerError404.php';
            $front = new \ControllerError404();
            $front->index();
            //echo $front->index();

        }
    }

    public function setStyles(string $nameFile)
    {
        $this->styles[] = 'common/template/assets/css/' . $nameFile . '.css';
    }

    public function getStyles() : array
    {
        return $this->styles;
    }

    public function render($nameFile){

        extract($this->data);
        ob_start();
        include $nameFile;
        $content = ob_get_contents();
        ob_get_clean();
        return $content;

    }

    public function redirect($url) {
        header('Location: ' . $url);
        exit;
    }

    public function setOutput($output){
        $this->output = $output;
    }

    public function setOutputJson($output) {
        header('Content-type: application/json; charset=utf-8');
        $this->output = json_encode($output, JSON_UNESCAPED_UNICODE);
    }

    public function getOutput(){
        echo $this->output;
    }

}