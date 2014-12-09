<?php

class Controller404 extends Controller
{

    function ActionIndex()
    {
        $this->view->generateError('404.phtml', 'layout.phtml');
    }

}
