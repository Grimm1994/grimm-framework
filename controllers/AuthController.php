<?php

namespace app\controllers;

use grimm1994\grimmCore\Application;
use grimm1994\grimmCore\Controller;
use grimm1994\grimmCore\middlewares\AuthMiddleware;
use grimm1994\grimmCore\Request;
use grimm1994\grimmCore\Response;
use app\models\LoginForm;
use app\models\User;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function login(Request $request, Response $response): string
    {
        $loginForm = new LoginForm();
        if ($request->isPost()) {
            $loginForm->loadData($request->getBody());
            if ($loginForm->validate() && $loginForm->login()) {
                $response->redirect('/');
            }
        }

        return $this->render('login', [
            'model' => $loginForm,
        ]);
    }

    public function register(Request $request): string
    {
        $user = new User();

        if ($request->isPost()) {
            $user->loadData($request->getBody());

            if ($user->validate() && $user->save()) {
                Application::$app->session->setFlash('success', 'Thanks for registering');
                Application::$app->response->redirect('/');
            }

            return $this->render('register', [
                'model' => $user,
            ]);
        }

        return $this->render('register', [
            'model' => $user,
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }
}