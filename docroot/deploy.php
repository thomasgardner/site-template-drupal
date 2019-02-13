<?php
/*
* Git Pull if called
*/

// settings
$password = 'RBdTG5DZynuZ2';

// force things
ignore_user_abort(true);
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

if (empty($_GET['p'])) {
  return 'No Password';
}

if ($_GET['p'] != $password) {
  return 'Incorrect Password';
}

$output = shell_exec('export PATH="$PATH:/bin:/usr/bin"; git pull 2>&1');
echo "<pre>$output</pre>";
return 1;
