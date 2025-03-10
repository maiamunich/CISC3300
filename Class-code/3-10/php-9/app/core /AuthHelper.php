<?php

namespace app\core;

class AuthHelper {
    //if session doesn't have an email
    public static function authRoute() {
        if (!isset($_SESSION['email'])) {
            http_response_code(401);
            header('Location: login');
            exit();
        }
    }

    public static function nonAuthRoute() {
        if (isset($_SESSION['email'])) {
            http_response_code(401);
            header('Location: /');
            exit();
        }
    }

    public static function startSession($user) {
        //session_regenerate_id() will replace the current session id with a new one, and keep the current session information.
        session_regenerate_id(true);
        //
        //add email to session
        $_SESSION['email'] = $user['email'];
    }

    public static function endSession() {
        $_SESSION = [];                                  // Empty $_SESSION superglobal
        session_destroy();
    }

}