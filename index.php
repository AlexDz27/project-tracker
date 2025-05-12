<?php

require "variables.php";

$token = $_COOKIE['token'] ?? null;
forbidIfBadToken($token);

require "home.php";


function forbidIfBadToken($token) {
  $reason = "";
  if (!isset($token) || $token === null) {
    $reason = "lack of credentials";
  } else if ($token !== TOKEN) {
    $reason = "invalid credentials";
  }

  if (empty($reason)) return;

  http_response_code(401);
  require "forbidden.php";
  die();
}