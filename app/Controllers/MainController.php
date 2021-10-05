<?php

namespace portfolio\Controllers;

use portfolio\Models\Hardskill;
use portfolio\Models\Softskill;

class MainController extends CoreController
{
    public function home()
    {


        $this->show('main/home');
        
    }

    public function contact()
    {
        $this->show('main/contact');

    }

    public function skills()
    {
        $hardskills = Hardskill::findAll();
        $softskills = Softskill::findAll();

        $viewVars = [
            'hardskills' => $hardskills,
            'softskills' => $softskills
        ];

        $this->show('main/skills', $viewVars);
    }

    public function page($pageNumber)
    {
        echo "je suis dans la méthode page et j'ai reçu {$pageNumber}";
    }
}
