<?php

namespace portfolio\Controllers;

use portfolio\Models\Description;
use portfolio\Models\Project;
use portfolio\Models\Hardskill;
use portfolio\Models\Softskill;

class MainController extends CoreController
{
    public function home()
    {


        $this->show('main/home');
        
    }

    public function descriptions()
    {
        $descriptions = Description::findAll();

        $viewVars = [
             'descriptions' => $descriptions,
        ];

        $this->show('main/descriptions', $viewVars);

    }

    public function skills()
    {
        $hardskills = Hardskill::findAll();
        $softskills = Softskill::findAll();

        $viewVars = [
            'hardskills' => $hardskills,
            'softskills' => $softskills,
        ];

        $this->show('main/skills', $viewVars);
    }

    public function projects()
    {
        $projects = Project::findAll();

        $viewVars = [
             'projects' => $projects,
        ];

        $this->show('main/projects', $viewVars);

    }

    public function contact()
    {
        $this->show('main/contact');

    }

    public function page($pageNumber)
    {
        echo "je suis dans la méthode page et j'ai reçu {$pageNumber}";
    }
}
