<?php

namespace portfolio\Controllers;

abstract class CoreController
{
    protected function show($view, $data = [])
    {
        extract($data);

        require __DIR__ .'/../views/layout/header.tpl.php';
        require __DIR__ .'/../views/'. $view .'.tpl.php';
        require __DIR__ .'/../views/layout/footer.tpl.php';
    }

}