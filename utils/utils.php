<?php

// 验证登录状态
function checkLoginState() {
  $userinfo = null;
  
  // session_name( "LoginSession" );
  session_start();
  if (empty($_SESSION['userinfo']) || empty($_SESSION['userinfo']['userid'])) {
    echo "<script>window.location.href='login/login.php';</script>";
  } else {
    $userinfo = $_SESSION['userinfo'];
  }
  session_write_close();
  
  //第一步：开启Session并初始化
  //session_start();
  //第二部：删除所有Session的变量，也可以用unset($_SESSION[XXX])逐个删除
  //$_SESSION = array();
  //第三部：如果使用基于Cookie的session，使用setCookkie()删除包含Session ID的cookie
  //if(isset($_COOKIE[session_name()])) {
  //  setCookie(session_name(), "", time()-42000, "/");
  //}
  //第四部：最后彻底销毁session
  //session_destroy();
  
  return $userinfo;
}

?>

