<?php


namespace Core;


class ConfigView
{
    private $name;
    private $data;

    public function __construct($name, array $data = null)
    {
        $this->name = (string)$name;
        $this->data = $data;
    }

    public function render()
    {
        if (file_exists('app/' . $this->name . '.php')) {
            include 'app/' . $this->name . '.php';
        } else {
            echo "Erro ao carregar a view: {$this->name}";
        }
    }
}