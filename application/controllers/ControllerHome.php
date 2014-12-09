<?php

class ControllerHome extends Controller
{

    function ActionIndex()
    {
        $this->view->generate('home.phtml', 'layout.phtml');
    }
}