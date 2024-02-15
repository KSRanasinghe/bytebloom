<?php

class Controller
{
    function __construct()
    {
        $this->model = null;
    }

    public function render($view)
    {
        require_once 'views/' . $view . '.php';
    }

    public function loadModel($modelName)
    {
        $file = 'models/' . $modelName . '_Model.php';

        if (file_exists($file)) {
            require $file;
            $modelClassName = $modelName . 'Model';
            $this->model = new $modelClassName();
        }
    }
}
