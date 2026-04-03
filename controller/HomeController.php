<?php

class HomeController
{
    public function index():void
    {
        $title = 'Home';
        $view = __DIR__ . '/../views/home/home.php';

        require __DIR__ . '/../views/layout/layout.php';
    }

    public function login():void
    {
        $title = 'Login';
        $view = __DIR__ . '/../views/login/formLogin.php';

        require __DIR__ . '/../views/layout/layout.php';
    }
}