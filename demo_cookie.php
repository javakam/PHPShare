<?php



//✨ 演示地址: http://demo.cn/demo_cookie.php
setcookie( 'pt_key', 'user@1212' );
setcookie( 'pt_value', 'abcdef', time() + 7 * 24 * 60 * 60 );
echo "<pre>";
echo $_COOKIE["TestCookie"];
echo "<br/>";
//print_r( $_COOKIE );
