<?php
// ini_set('display_errors', 'On');
// error_reporting(E_ALL | E_STRICT);

exec("/opt/plesk/php/7.4/bin/php sub-task.php > /dev/null &"); // 2>&1

exit('Hey, Task is started in ' . date('Y-m-d H:i:s'));
