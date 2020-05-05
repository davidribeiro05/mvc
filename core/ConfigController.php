<?php

namespace Core;

class ConfigController
{
    private $url;
    private $fullUrl;
    private $controllerUrl;
    private $methodUrl;

    public function __construct()
    {
        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            $this->fullUrl = explode("/", $this->url);
            if (isset($this->fullUrl[0]) and isset($this->fullUrl[1])) {
                $this->controllerUrl = ucfirst($this->fullUrl[0]);
                $this->methodUrl = $this->fullUrl[1];
            } else {
                $this->controllerUrl = "Home";
                $this->methodUrl = "index";
            }
        } else {
            $this->controllerUrl = "Home";
            $this->methodUrl = "index";
        }
    }

    public function load()
    {
        $class = "\\Sts\\Controllers\\" . $this->controllerUrl;
        $classLoad = new $class;
        $classLoad->index();
    }
}