<?php

namespace portfolio\Controllers;

abstract class CoreController
{
    protected function show($viewName, $viewVars = [])
    {
        global $router;

        $viewVars['currentPage'] = $viewName;
        $viewVars['assetsBaseUri'] = $_SERVER['BASE_URI'] . 'assets/';
        $viewVars['baseUri'] = $_SERVER['BASE_URI'];
        
        extract($viewVars);

        require __DIR__ . '/../views/layout/header.tpl.php';
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/layout/footer.tpl.php';
    }
}
