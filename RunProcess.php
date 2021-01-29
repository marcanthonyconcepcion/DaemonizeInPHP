<?php

function run_process()
{
    $log_file_name = "time_now_".microtime().".log";
    while(TRUE)
    {
        $date_time = (new Datetime("now", new DateTimeZone('Asia/Manila')))->format('Y-m-d H:i:s');
        $log_file = fopen($log_file_name, "a");
        fwrite($log_file, "Right now, it is $date_time!".PHP_EOL);
        fclose($log_file);
        sleep(60);
    }
}

if (php_sapi_name() != "cli")
{
    die ("This PHP script can only be executed on the command line.");
}
run_process();
