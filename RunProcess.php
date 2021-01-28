<?php

function run_process()
{
    while(TRUE)
    {
        $date_time = (new Datetime("now", new DateTimeZone('Asia/Manila')))->format('Y-m-d H:i:s');
        $log_file = fopen("time_now.log", "a");
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
