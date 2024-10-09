<?php

session_start();
$user = $_SESSION['username'];

require "views/landing.view.php";