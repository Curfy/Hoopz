<?php

if (isset($_COOKIE['isLogin'])) {
    unset($_COOKIE['isLogin']);
    setcookie('isLogin', '', time() - 3600, '/hoopz');
}

if (isset($_COOKIE['token'])) {
    unset($_COOKIE['token']);
    setcookie('token', '', time() - 3600, '/hoopz');
}


?>