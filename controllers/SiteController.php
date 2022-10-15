<?php

namespace app\controllers;

use grimm1994\grimmCore\Application;
use grimm1994\grimmCore\Controller;
use grimm1994\grimmCore\Request;
use grimm1994\grimmCore\Response;

class SiteController extends Controller
{
    public function home(): string
    {
        $params = [
            'name' => 'Grimm framework',
        ];

        return $this->render('home', $params);
    }
}