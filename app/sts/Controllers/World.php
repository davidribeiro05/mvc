<?php

namespace Sts\Controllers;

class World
{
    public $data;

    public function index()
    {
        $readCity = new \Sts\Models\StsWorld();
        $this->data = $readCity->read();

        /** @var  $loadView */
        $loadView = new \Core\ConfigView("sts/Views/world/city", $this->data);
        $loadView->render();
    }
}