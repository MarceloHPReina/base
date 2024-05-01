<?php

abstract class RouteSwitch
{
    protected function home()
    {
        require __DIR__ . '/views/home.php';
    }

    protected function about()
    {
        require __DIR__ . '/views/about.php';
    }

    protected function contact()
    {
        require __DIR__ . '/views/contact.php';
    }
    
    public function __call($name, $arguments)
    {
        http_response_code(404);
        require __DIR__ . '/views/not-found.php';
    }
}