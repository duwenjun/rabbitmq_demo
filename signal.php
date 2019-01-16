<?php

pcntl_async_signals(true);

pcntl_signal(SIGTERM, function ($signo) {
    var_dump("SIGTERM"); die;
});



pcntl_signal(SIGNINT, function ($signo) {
    var_dump("SIGNINT"); die;
});


pcntl_signal(SIGHUP, function ($signo) {
    var_dump("SIGHUP"); die;
});


while (true) {
    echo "1111" . "\n";
    usleep(100);
}