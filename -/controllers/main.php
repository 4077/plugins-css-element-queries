<?php namespace plugins\cssElementQueries\controllers;

class Main extends \Controller
{
    public function load()
    {
        $this->js('ResizeSensor');
        $this->js('ElementQueries');
    }
}
