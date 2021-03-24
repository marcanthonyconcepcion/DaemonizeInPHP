# MARC'S Daemon Process on Windows via PHP.

The concept of Daemon to execute invisible background processes is only for Unix-based operating system. It has never been formally instituted on Windows operating system.

PHP is primarily meant to be serviced on a web server.
Although PHP scripts can be executed in the background, it is not primarily made for that purpose.

But this simple PHP source code can demonstrate a way to spawn PHP processes in the background acting like a daemon on the Windows OS.

The PHP script does the following:
1.	Automatically spawns the defined background daemon process.
2.	The background daemon process logs the current date and time every 60 seconds on the file "time_now.log".

Here is the console output when executing the script:
```
C:\ php.exe Trigger.php
Background daemon process already running.
Process finished with exit code 0
```

After this (main) process has finished, an invisible background daemon process has spawned and infinitely logs the current date and time on the log file mentioned.

You would see that the "time_now.log" is automatically generated and it is continuously being logged with the current date and time every minute.

You can see the existence of this background daemon process through the Windows Powershell using this command:
```
PS C:\> ps -name php
Handles  NPM(K)    PM(K)      WS(K)     CPU(s)     Id  SI ProcessName
-------  ------    -----      -----     ------     --  -- -----------
    122       9     6024      10916       0.05   4220   1 php
```

The daemon process is on process Id=4220.
To terminate this infinite daemon process and to stop the date time logging, perform the following process kill command on the Powershell.

```
PS C:\> kill -Id 4220
```

And the daemon process has been killed.

Through this demo, we can apply the UNIX-style daemonization and spawn/execute daemon process running invisibly on the background using Windows via PHP.

For more inquiries, please feel free to e-mail me at marcanthonyconcepcion@gmail.com.

Thank you for trying out this demo.
