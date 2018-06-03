<?php
// 检查登录状态
include("utils/utils.php");
$userinfo = checkLoginState();

// 载入公共模块
include("comm/common.php");

// 获取当前页面
$pageid = 0;
$subid = 0;
if(!empty($_GET['page'])){
  $pageid = $_GET['page'];
}
if(!empty($_GET['sub'])){
  $subid = $_GET['sub'];
}
//echo "<script>alert('$pageid');</script>";

// 写SESSION
//session_start();
$_SESSION['pageid'] = $pageid;
$_SESSION['subid'] = $subid;
//session_write_close();

// PHP传参数给JS
//echo "<script>var pageid=\"$pageid\";</script>";
//echo "<script>var subid=\"$subid\";</script>";

// 内部页面内容
include("inner/main.php");
include("inner/user.php");
include("inner/goods.php");
include("inner/order.php");
function getInnerHtml() {
  // 读SESSION
  //session_start();
  $pageid = $_SESSION['pageid'];
  $subid = $_SESSION['subid'];
  //session_write_close();
  
  if ($pageid == 0) {
    return getMainInnerHtml($subid);
    return "<h3>getMainInnerHtml</h3>";
  } else if ($pageid == 1) {
    return getUserInnerHtml($subid);
    return "<h3>getUserInnerHtml</h3>";
  } else if ($pageid == 2) {
    return getGoodsInnerHtml($subid);
  } else if ($pageid == 3) {
    return getOrderInnerHtml($subid);
    return "<h3>getOrderInnerHtml</h3>";
  } else {
    return "";
  }
}
?>


<script>
// 管理员昵称
var username = "<?php echo $userinfo['username'] ?>";
document.getElementById("top-admin-name").innerHTML = username;

// 改变选中标签
var pageid = "<?php echo $pageid ?>"; // js中调用php变量
var subid = "<?php echo $subid ?>";
var pagecount = 4;
for (var i = 0; i < pagecount; i++) {
  var navid = "nav_main_" + i;
  if (i == pageid) {
    document.getElementById(navid).className = "active-menu waves-effect waves-dark";
  } else {
    document.getElementById(navid).className = "waves-effect waves-dark";
  }
}

// 嵌套页面内容
if (pageid == 0) {
  // 网站概况
  document.getElementById("page-title").innerHTML = "网站概况";
  
} else if (pageid == 1) {
  // 用户管理
  document.getElementById("page-title").innerHTML = "用户管理";
  
  if (subid == 0) {
    var html = "<li><a href = 'index.php?page=1&sub=0' style = 'color:gray'>用户信息管理</a></li>"
	  	     + "<li><a href = 'index.php?page=1&sub=1'>收货地址管理</a></li>";
    document.getElementById("page-subtitle").innerHTML = html;
	
  } else if (subid == 1) {
    var html = "<li><a href = 'index.php?page=1&sub=0'>用户信息管理</a></li>"
	  	     + "<li><a href = 'index.php?page=1&sub=1' style = 'color:gray'>收货地址管理</a></li>";
    document.getElementById("page-subtitle").innerHTML = html;
  }
  
  html = "<?php echo getInnerHtml() ?>";
  document.getElementById("page-inner").innerHTML = html;  
  
} else if (pageid == 2) {
  // 商品管理
  document.getElementById("page-title").innerHTML = "商品管理";
  
  if (subid == 0) {
    var html = "<li><a href = 'index.php?page=2&sub=0' style = 'color:gray'>商品分类管理</a></li>"
	  	     + "<li><a href = 'index.php?page=2&sub=1'>商品信息管理</a></li>"
		     + "<li><a href = 'index.php?page=2&sub=2'>详细信息管理</a></li>"
			 + "<li><a href = 'index.php?page=2&sub=3'>首页推广管理</a></li>"
			 + "<li><a href = 'index.php?page=2&sub=4'>商品图片管理</a></li>";
    document.getElementById("page-subtitle").innerHTML = html;
	
  } else if (subid == 1) {
    var html = "<li><a href = 'index.php?page=2&sub=0'>商品分类管理</a></li>"
	  	     + "<li><a href = 'index.php?page=2&sub=1' style = 'color:gray'>商品信息管理</a></li>"
		     + "<li><a href = 'index.php?page=2&sub=2'>详细信息管理</a></li>"
			 + "<li><a href = 'index.php?page=2&sub=3'>首页推广管理</a></li>"
			 + "<li><a href = 'index.php?page=2&sub=4'>商品图片管理</a></li>";
    document.getElementById("page-subtitle").innerHTML = html;
	
  } else if (subid == 2) {
    var html = "<li><a href = 'index.php?page=2&sub=0'>商品分类管理</a></li>"
	  	     + "<li><a href = 'index.php?page=2&sub=1'>商品信息管理</a></li>"
		     + "<li><a href = 'index.php?page=2&sub=2' style = 'color:gray'>详细信息管理</a></li>"
			 + "<li><a href = 'index.php?page=2&sub=3'>首页推广管理</a></li>"
			 + "<li><a href = 'index.php?page=2&sub=4'>商品图片管理</a></li>";
    document.getElementById("page-subtitle").innerHTML = html;
  } else if (subid == 3) {
    var html = "<li><a href = 'index.php?page=2&sub=0'>商品分类管理</a></li>"
	  	     + "<li><a href = 'index.php?page=2&sub=1'>商品信息管理</a></li>"
		     + "<li><a href = 'index.php?page=2&sub=2'>详细信息管理</a></li>"
			 + "<li><a href = 'index.php?page=2&sub=3' style = 'color:gray'>首页推广管理</a></li>"
			 + "<li><a href = 'index.php?page=2&sub=4'>商品图片管理</a></li>";
    document.getElementById("page-subtitle").innerHTML = html;
  } else if (subid == 4) {
    var html = "<li><a href = 'index.php?page=2&sub=0'>商品分类管理</a></li>"
	  	     + "<li><a href = 'index.php?page=2&sub=1'>商品信息管理</a></li>"
		     + "<li><a href = 'index.php?page=2&sub=2'>详细信息管理</a></li>"
			 + "<li><a href = 'index.php?page=2&sub=3'>首页推广管理</a></li>"
			 + "<li><a href = 'index.php?page=2&sub=4' style = 'color:gray'>商品图片管理</a></li>";
    document.getElementById("page-subtitle").innerHTML = html;
  } else {
    var html = "<li><a href = 'index.php?page=2&sub=0'>商品分类管理</a></li>"
	  	     + "<li><a href = 'index.php?page=2&sub=1'>商品信息管理</a></li>"
		     + "<li><a href = 'index.php?page=2&sub=2'>详细信息管理</a></li>"
			 + "<li><a href = 'index.php?page=2&sub=3'>首页推广管理</a></li>"
			 + "<li><a href = 'index.php?page=2&sub=4'>商品图片管理</a></li>";
    document.getElementById("page-subtitle").innerHTML = html;
  }
  
  html = "<?php echo getInnerHtml() ?>";
  document.getElementById("page-inner").innerHTML = html; 
  
} else if (pageid == 3) {
  // 订单管理
  document.getElementById("page-title").innerHTML = "订单管理";
  
  if (subid == 0) {
    var html = "<li><a href = 'index.php?page=3&sub=0' style = 'color:gray'>已支付订单</a></li>"
	  	     + "<li><a href = 'index.php?page=3&sub=1'>待支付订单</a></li>"
			 + "<li><a href = 'index.php?page=3&sub=2'>已取消订单</a></li>"
			 + "<li><a href = 'index.php?page=3&sub=3'>已完成订单</a></li>";
    document.getElementById("page-subtitle").innerHTML = html;
	
  } else if (subid == 1) {
    var html = "<li><a href = 'index.php?page=3&sub=0'>已支付订单</a></li>"
	  	     + "<li><a href = 'index.php?page=3&sub=1' style = 'color:gray'>待支付订单</a></li>"
			 + "<li><a href = 'index.php?page=3&sub=2'>已取消订单</a></li>"
			 + "<li><a href = 'index.php?page=3&sub=3'>已完成订单</a></li>";
    document.getElementById("page-subtitle").innerHTML = html;
  } else if (subid == 2) {
    var html = "<li><a href = 'index.php?page=3&sub=0'>已支付订单</a></li>"
	  	     + "<li><a href = 'index.php?page=3&sub=1'>待支付订单</a></li>"
			 + "<li><a href = 'index.php?page=3&sub=2' style = 'color:gray'>已取消订单</a></li>"
			 + "<li><a href = 'index.php?page=3&sub=3'>已完成订单</a></li>";
    document.getElementById("page-subtitle").innerHTML = html;
  } else if (subid == 3) {
    var html = "<li><a href = 'index.php?page=3&sub=0'>已支付订单</a></li>"
	  	     + "<li><a href = 'index.php?page=3&sub=1'>待支付订单</a></li>"
			 + "<li><a href = 'index.php?page=3&sub=2'>已取消订单</a></li>"
			 + "<li><a href = 'index.php?page=3&sub=3' style = 'color:gray'>已完成订单</a></li>";
    document.getElementById("page-subtitle").innerHTML = html;
  }
  
  html = "<?php echo getInnerHtml() ?>";
  document.getElementById("page-inner").innerHTML = html;  
  
} else {
  // 其他设置
  document.getElementById("page-title").innerHTML = "其他设置";
  
  document.getElementById("page-inner").innerHTML = "<hr style='height:1px;border:none;border-top:1px double red;'/>";
}
</script>

