<?php
include("../config.php");

// 进行过滤
function inject_check($sql_str) {
  return preg_match("/select|insert|update|delete|\'|\/\*|\*|\.\.\/|\.\/|union|into|load_file|outfile|%|eval|=|and|'|;|exec|count/i", $sql_str);
}

// 登录处理
function login_result($success, $res) {
  if ($success == true) {
    if ($res['usertype'] == 2){
		echo "<script>alert('登录成功，点击跳转到管理页面');</script>";
		
		// 用SESSION保存登录状态
		// session_name( "LoginSession" );
		session_start();
		$_SESSION['userinfo'] = [
		  'userid' => $res['uid'],
		  'username' => $res['username'],
		  'usertype' => $res['usertype'],
		];
		session_write_close();
		
		// 跳转
		echo "<script>window.location.href='../index.php';</script>";
	} else {
	  echo "<script>alert('登录成功，但您不是管理员');</script>";
	}
  }else{
    echo "<script>alert('用户名或密码错误！');</script>";
  }
}
 
// 接收提交
if(!empty($_POST)) {
  // 接收数据
  foreach($_POST as $key => $value){
    if(inject_check($value)){
      echo "<script>alert('地址栏输入发现有非法字符，请重新输入！');history.go(-1);</script>";
      exit();
    }
  }
  $user = $_POST['user'];
  $pswd = md5($_POST['pswd']);
  
  // 连接数据库
  $conn = mysqli_connect($db_url, $db_user, $db_pswd, $db_name);
  if (mysqli_connect_errno($conn)) 
  { 
    echo "connect error : " . mysqli_connect_error();
	exit();
  }
  @mysqli_query($link, "set names utf8");
  //$sql = "SELECT count(*) as m FROM `t_user` WHERE `username`='$user' AND `password`='$pswd'";
  $sql = "SELECT * FROM `t_user` WHERE `username`='$user' AND `password`='$pswd'";
  if ($query = mysqli_query($conn, $sql))
  {
    // 返回记录数
    $rows = mysqli_num_rows($query);
	if ($rows > 0) {
	  $res = mysqli_fetch_array($query);
	  login_result(true, $res);
    } else {
	  login_result(false, null);
	}
    // 释放结果集
    mysqli_free_result($query);
  } else {
    echo "select error.";
	exit();
  }
  mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html>
<head>
<title>后台管理系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/login-style.css" rel='stylesheet' type='text/css' />
</head>

<script>
// 校验用户名和密码
function check(obj){
  with(obj){
    if((user.value+"").length <= 0){
      alert("用户名不能为空");
      return false;
    }else if((pswd.value+"").length <= 0){  
      alert("用户名不能为空");
      return false;
    }else{
      return true;
    }
  }
}
</script>

<body>
<div class="main">
	<div class="login">
		<h1>后台管理系统</h1>
		<div class="inset">
			<form action="login.php" method="post" onsubmit="return check(this)">
				<div>
					<h2>管理员登录</h2>
					<span><label>用户名</label></span>
					<span><input type="text" class="textbox" name="user"></span>
				</div>
				<div>
					<span><label>密码</label></span>
					<span><input type="password" class="password" name="pswd"></span>
				</div>
				<div class="sign">
					<input type="submit" value="登录" class="submit" />
				</div>
			</form>
		</div>
	</div>
	</div>
</body>
</html>