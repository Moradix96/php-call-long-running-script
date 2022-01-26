<?php
// ini_set('display_errors', 'On');
// error_reporting(E_ALL | E_STRICT);

set_time_limit(60*10); // Max: 10 Min

// A heavy task
sleep(60*3);

log2("Task completed.");

/**
 * Write logs in a file
 */
function log2($log_msg) {
	file_put_contents("tasks.log", date('Y-m-d H:i:s') . ' : ' . $log_msg . "\n", FILE_APPEND);
}
