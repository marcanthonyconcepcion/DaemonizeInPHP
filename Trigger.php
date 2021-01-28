<?php

if (strtoupper(substr(php_uname(), 0, 3)) == "WIN")
{
    $command = "start /B php ".__DIR__.DIRECTORY_SEPARATOR."RunProcess.php";
    pclose(popen($command, "r"));
}
else // if LINUX
{
    $command = "php ".__DIR__.DIRECTORY_SEPARATOR."RunProcess.php > /dev/null &";
    exec($command);
}

echo "Background daemon process is now running.";
