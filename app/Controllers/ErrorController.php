<?php

namespace portfolio\Controllers;

class ErrorController extends CoreController
{
    public function err404()
    {
        $this->show('main/404');
    }
    
}