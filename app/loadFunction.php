<?php

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);

function load($path) {
  require ROOT . $path;
}