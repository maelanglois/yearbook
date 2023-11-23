<?php

require './root/connection.php';
require dirname(__DIR__) . '/view/login.php';

$_SESSION = array();

session_destroy();

header("Location: ?page=homepage");

exit();

?>