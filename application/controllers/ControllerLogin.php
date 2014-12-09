<?php

class ControllerLogin extends Controller
{

    function ActionIndex()
    {
        $this->view->generate('login.phtml', 'layout.phtml');
    }

}