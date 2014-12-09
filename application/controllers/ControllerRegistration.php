<?php

class ControllerRegistration extends Controller
{

    function ActionIndex()
    {
        $this->view->generate('registration.phtml', 'layout.phtml');
    }

}