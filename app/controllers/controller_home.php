<?php

class Controller_Home extends Controller
{

    function action_index()
    {
        $this->view->generate('home.phtml', 'layout.phtml');
    }
}