<?php

namespace portfolio\Controllers;
use portfolio\Models\Hardskill;
use portfolio\Models\Tryskill;

class MainController extends CoreController
{
    public function home()
    {
        echo "je suis dans la méthode home";

    }

    public function contact()
    {
        echo "je suis dans la méthode contact";
    }

    public function skills()
    {
        echo "je suis dans la méthode skill";

        $hardskills = Hardskill::findAll();
        $tryskills = Tryskill::findAll();

        $data = [
            'hardskills' => $hardskills,
            'tryskills' => $tryskills
        ];

        $this->show('main/skills', $data);

    }

    public function page($pageNumber)
    {
        echo "je suis dans la méthode page et j'ai reçu {$pageNumber}";
    }


}