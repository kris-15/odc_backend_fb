<?php
session_start();
require "apps/autoload.php";
use apps\Route;

Route::process();