<?php
include("config.php");
include("utils/html.php");

// 商品管理子页面html字符串
function getGoodsInnerHtml($subid) {
  $html = "";
  $html .= "<hr style='height:1px;border:none;border-top:1px double red;'/>";
  
  ///////////////////////////////////////////////////////////
  /// 操作数据库 ////////////////////////////////////////////
  ///////////////////////////////////////////////////////////
  
  $db_url = "localhost";
  $db_user = "root";
  $db_pswd = "berry";
  $db_name = "db_mall";
	
  // 连接数据库
  $conn = mysqli_connect($db_url, $db_user, $db_pswd, $db_name);
  if (mysqli_connect_errno($conn)) 
  { 
    echo "connect error : " . mysqli_connect_error();
	exit();
  }
  @mysqli_query($link, "set names utf8");
  
  /////////////////////////////////////////////////////////////
  /// 商品分类管理 ////////////////////////////////////////////
  /////////////////////////////////////////////////////////////
  if ($subid == 0) {
    // 创建表格
	$keys = array('ID' => '100px', '名称' => '200px', '备注' => '500px'); // 表格头
	$vals = array();// 表格值，二维数组
	$sql = "SELECT * FROM `t_goodstype`";
	if ($query = mysqli_query($conn, $sql))
    {
      $rows = mysqli_num_rows($query);
	  if ($rows > 0) {
		// 给表格赋值
		for ($i = 0; $i < $rows; $i++) {
  	      $res = mysqli_fetch_array($query);
		  if ($res) {
			array_push($vals, array($res['id'], $res['name'], $res['remarks']));
		  }
	    }
      }
      mysqli_free_result($query);
    } else {
	  echo "error : " . mysqli_error($conn);
	}
	$subbtn = array('修 改' => '#', '删 除' => '#'); // 操作按钮子按钮
	$btnhtml = createButtonGroup("操作", $subbtn); // 最后一行操作按钮语句
	$html .= createTable($keys, $vals, $btnhtml); // 创建表格
	
	// 添加数据
	$html .= "<hr style='height:1px;border:none;border-top:1px double gray;'/>";
	$html .= createButton("添加分类", "index.php?page=2&sub=11");
  }
  
  /////////////////////////////////////////////////////////////
  /// 商品信息管理 ////////////////////////////////////////////
  /////////////////////////////////////////////////////////////
  else if ($subid == 1) {
    // 数据表格
	$keys = array('ID' => '100px', '名称' => '200px', '类型' => '50px', '价格' => '100px', '描述' => '500px'); // 表格头
	$vals = array(); // 表格值，二维数组
	$sql = "SELECT * FROM `t_goodsbase`";
	if ($query = mysqli_query($conn, $sql))
    {
      $rows = mysqli_num_rows($query);
	  if ($rows > 0) {
		// 给表格赋值
		for ($i = 0; $i < $rows; $i++) {
  	      $res = mysqli_fetch_array($query);
		  if ($res) {
			array_push($vals, array($res['gid'], $res['name'], $res['types'], $res['price'], $res['introduce']));
		  }
	    }
      }
      mysqli_free_result($query);
    } else {
	  echo "error : " . mysqli_error($conn);
	}
	$subbtn = array('修 改' => '#', '删 除' => '#'); // 操作按钮子按钮
	$btnhtml = createButtonGroup("操作", $subbtn); // 最后一行操作按钮语句
	$html .= createTable($keys, $vals, $btnhtml); // 创建表格
	
	// 添加数据
	$html .= "<hr style='height:1px;border:none;border-top:1px double gray;'/>";
	$html .= createButton("添加商品", "index.php?page=2&sub=12");
  }
  
  /////////////////////////////////////////////////////////////
  /// 详细信息管理 ////////////////////////////////////////////
  /////////////////////////////////////////////////////////////
  else if ($subid == 2) {
	  
  }
  
  /////////////////////////////////////////////////////////////
  /// 首页推广管理 ////////////////////////////////////////////
  /////////////////////////////////////////////////////////////
  else if ($subid == 3) {
	
  }
  
  /////////////////////////////////////////////////////////////
  /// 商品图片管理 ////////////////////////////////////////////
  /////////////////////////////////////////////////////////////
  else if ($subid == 4) {
    // 创建表格
	
	/*
	//$html .= "<form action='#'>";
	$value = "选项1";
	$group = "group1";
	$id = "test1";
	$html .= createRadioBox($value, $group, $id, false, false);
	//$html .= "</form>";
	
	$html .= createButton("操作按钮", '');
	
	$subbtn = array('修 改' => '#', '添 加' => '', '删 除' => '#');
    $html .= createButtonGroup("操作", $subbtn);
	
	
	$html .= "<a class='btn btn-success' id='popup-del' href='#'>删除按钮</a>";
	$html .= "<a class='btn btn-danger' id='popup-aaa' href='#'>登录按钮</a>";
	
	$html .= "<button onclick='payment();'>缴费提示层</button>";
	*/
  }
  
  /////////////////////////////////////////////////////////////
  /// 添加商品分类 ////////////////////////////////////////////
  /////////////////////////////////////////////////////////////
  else if ($subid == 11) {
	  
  }
  
  /////////////////////////////////////////////////////////////
  /// 添加商品页面 ////////////////////////////////////////////
  /////////////////////////////////////////////////////////////
  else if ($subid == 12) {
    
	$html .= "<div class='row'>";
	$html .= "<div class='col-lg-12'>";
	$html .= "<div class='card'>";
	$html .= "<div class='card-action'>";
	$html .= "添加商品";
	$html .= "</div>";
	$html .= "<div class='card-content'>";
	$html .= "<form class='col s12'>";

	$html .= "<div class='row'>";
	$html .= "<div class='input-field col s5'>";
	$html .= "<input id='first_name' type='text' class='validate' placeholder='' >";
	$html .= "<label for='first_name'>名称</label>";
	$html .= "</div>";
	$html .= "</div>";

	$html .= "<div class='row'>";
	$html .= "<div class='input-field col s12'>";
	$html .= "<input id='password' type='password' class='validate' placeholder='' >";
	$html .= "<label for='password'>密码</label>";
	$html .= "</div>";
	$html .= "</div>";

	$html .= "<div class='row'>";
	$html .= "<div class='input-field col s12'>";
	$html .= "提示:";
	$html .= "<input id='types' type='number' class='validate' placeholder=''  min='1' max='2'>";
	$html .= "<label for='types'>类型</label>";
	$html .= "</div>";
	$html .= "</div>";
	
	$html .= "<div class='row'>";
	$html .= "<div class='col s12'>";
	$html .= "提示:";
	$html .= "<div class='input-field inline'>";
	$html .= "<input id='email' type='email' class='validate'>";
	$html .= "<label for='email' data-error='输入错误' data-success='输入正确'>邮箱</label>";
	$html .= "</div>";
	$html .= "</div>";

	$html .= "</div>";
	$html .= "</form>";
	$html .= "<div class='clearBoth'></div>";
	$html .= "</div>";
	$html .= "</div>";
	$html .= "</div>";
	$html .= "</div>";
	
  }
  
  /// ////////// ////////////////////////////////////////////
  ///////////////////////////////////////////////////////////
  mysqli_close($conn);
  
  return $html;
}
?>



