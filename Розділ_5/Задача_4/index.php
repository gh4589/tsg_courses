<?php

function fib($n)
{
    if ($n < 3) {
        return 1; 
    }
    else {
        return fib($n-1) + fib($n-2);
    }
}

for ($n = 1; $n <= 20; $n++) {
    echo(fib($n) . ", ");
}
echo("...\n")
?>