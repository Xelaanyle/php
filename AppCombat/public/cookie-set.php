<?php

setcookie('foo','123');
setcookie('bar', '', -1);

unset($_COOKIE['bar']);
