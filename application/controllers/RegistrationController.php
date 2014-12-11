<?php

class RegistrationController extends Controller
{

    function IndexAction()
    {
        $this->view->generate('registration.phtml', 'layout.phtml');
    }

}