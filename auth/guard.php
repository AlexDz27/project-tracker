<?php

// TODO: ensure everything works correctly (dont forget invite.php)
load('app/vars.php');

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
  require ROOT . "/front-end/pages/forbidden.php";
  die();
}