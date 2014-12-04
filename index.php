<?php

isset($_GET['page']) ? $page = $_GET['page'] : $page = 'home';
$page = str_replace('/', '', $page);
$file = $_SERVER['DOCUMENT_ROOT'].'/view/'.$page.'.phtml';
if(file_exists($file)){
    ob_start();
    include ("$file");
    $content = ob_get_clean();
    include('view/layout.phtml');
} else echo 'Страница не найдена';