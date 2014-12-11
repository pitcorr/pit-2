<?php

class LoginController extends Controller
{

    function IndexAction()
    {
        $this->view->generate('login.phtml', 'layout.phtml');
    }

}