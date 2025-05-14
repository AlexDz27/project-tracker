<?php

// TODO: 1. Nginx -> check that http://localhost/app/routing.php no longer loads the file in the URL
// 2. do invite. I think about making WEB-SERVER only allow access to front-end/[css,js]. Thus, we preserve the notion on "Invite" as a separate flow in the app.

// TODO for today: 1. js 2. read a tale about testing drivers

require 'app/loadFunction.php';

load('auth/guard.php');
load('app/routing.php');