<?php

use JetBrains\PhpStorm\Pure;

include_once "Controller.php";

class Router {
    /**
     * @var Controller
     */
    private Controller $controller;

    const ROUTING = [
        '/' => 'getMainPage',
        '/blog' => 'getBlogPage'
    ];

    #[Pure] public function __construct()
    {
        $this->controller = new Controller();
    }

    public function loadPage()
    {
        if (!isset(self::ROUTING[$_SERVER['REQUEST_URI']])) {
            call_user_func(array($this->controller, 'getNotFoundPage'));
        } else {
            call_user_func(array($this->controller, self::ROUTING[$_SERVER['REQUEST_URI']]));
        }
    }
}