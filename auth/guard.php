<?php

// TODO: phpstorm -> check how Laravel wrote app_path (or root_path) -> write the same code in my app
// TODO: ensure everything works correctly (dont forget invite.php)
require "variables.php";

$token = $_COOKIE['token'] ?? null;
forbidIfBadToken($token);


function forbidIfBadToken($token) {
  $reason = "";
  if (!isset($token) || $token === null) {
    $reason = "lack of credentials";
  } else if ($token !== TOKEN) {
    $reason = "invalid credentials";
  }

  if (empty($reason)) return;

  http_response_code(401);
  require "pages/forbidden.php";
  die();
}