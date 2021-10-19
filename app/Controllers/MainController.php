<?php

namespace portfolio\Controllers;

use portfolio\Models\Description;
use portfolio\Models\Project;
use portfolio\Models\Hardskill;
use portfolio\Models\Softskill;
use portfolio\Models\Person;

class MainController extends CoreController
{
    public function home()
    {
        $person = Person::findOneById();

        $viewVars = ['person' => $person];

        $this->show('main/home', $viewVars);
        
    }

    public function descriptions()
    {
        $descriptions = Description::findAll();
        $person = Person::findOneById();

        $viewVars = [
             'descriptions' => $descriptions,
             'person' => $person,
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
        $person = Person::findOneById();

        $viewVars = ['person' => $person];

        $this->show('main/contact', $viewVars);

    }

}
