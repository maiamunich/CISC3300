<?php

//require our files, remember should be relative to index.php
require '../app/core/Router.php';
require '../app/controllers/Controller.php';
require '../app/controllers/MainController.php';
require '../app/controllers/AuthController.php';
require '../app/core/AuthHelper.php';

//session_start() creates a session or resumes a current session based on a session identifier passed via a GET or POST request via a cookie.

//so session_start will check for a cookie with a session ID, if it doesn't find one it will set a new one
session_start();