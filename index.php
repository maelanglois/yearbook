<?php

$availableRoutes = ['homepage', 'login', 'logout', 'yearbook', 'register'];

$route = 'homepage';

if (isset($_GET['page']) && in_array($_GET['page'], $availableRoutes)) {
    $route = $_GET['page'];
}

require 'view/layout.php';