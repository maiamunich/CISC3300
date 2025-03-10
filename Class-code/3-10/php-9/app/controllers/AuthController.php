<?php

namespace app\controllers;

use app\core\AuthHelper;

class AuthController extends Controller
{

    public function loginView() {
        AuthHelper::nonAuthRoute();
        $this->returnView('./assets/views/auth/login.html');
    }

    public function registerView() {
        AuthHelper::nonAuthRoute();
        $this->returnView('./assets/views/auth/register.html');
    }

    public function login() {
        $inputData = [
            'email' => $_POST['email'] ?? null,
            'password' => $_POST['password'] ?? null,
        ];

        if ($_POST['email'] !== 'test@test.com' ||
            $_POST['password'] !== 'test') {
            http_response_code(400);
            echo json_encode([
                'message' => 'Invalid Login Credentials'
            ]);
            exit();
        }

        $authedUser =
            [
                'email' => $inputData['email'],
                'password' => $inputData['password'],
            ];

        AuthHelper::startSession($authedUser);

        http_response_code(200);
        $this->returnJSON([
            'route' => '/'
        ]);
    }

    public function logout() {
        AuthHelper::endSession();
        http_response_code(200);
        $this->returnJSON([
            'route' => '/login'
        ]);
    }

}