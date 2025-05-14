<?php

load('app/vars.php');

setcookie('token', TOKEN);
header('Location: /');