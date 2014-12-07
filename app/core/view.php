<?php

class View
{

    function generate($content_view, $template_view = 'layout.phtml', $data = null)
    {
        ob_start();
        include 'app/views/' . $content_view;
        $content = ob_get_clean();
        include 'app/views/' . $template_view;

    }
}