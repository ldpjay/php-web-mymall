<?php

// 创建表格语句
function createTable($keys, $values, $btnhtml = null) {
  $html = "";
  
  $html .= "<table class='table table-striped table-bordered table-hover dataTable no-footer' id='dataTables-example' aria-describedby='dataTables-example_info'>";
  $html .= "<thead>";
  $html .= "<tr role='row'>";

  //$html .= "<th class=''>AAA</th>"; // 标签
  
  foreach($keys as $k => $v) {
    $html .= "<th class='sorting' tabindex='0' aria-controls='dataTables-example' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: $v;'>";
    $html .= $k;
    $html .= "</th>";
  }
  
  if ($btnhtml != null) {
      $html .= "<th class='sorting' tabindex='0' aria-controls='dataTables-example' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 100px;'>";
      $html .= "操作";
      $html .= "</th>";
	}

  $html .= "</tr>";
  $html .= "</thead>";
  $html .= "<tbody>";
  $html .= "<tr class='gradeA odd'>";
  
  //$html .= "<td class=''>AAA</td>"; // 数值
	  
  foreach($values as $i => $t) {
    foreach($t as $k => $v) {
      $html .= "<td class=''>";
      $html .= $v;
      $html .= "</td>";
	}
	
	if ($btnhtml != null) {
      $html .= "<td class=''>";
	  $html .= $btnhtml;
      $html .= "</td>";
	}
	
	$html .= "</tr>";	
  }

  $html .= "</tr>";
  $html .= "</tbody>";
  $html .= "</table>";
  
  return $html;
}

// 创建单选框
function createRadioBox($value, $id, $group, $checked = false, $disabled = false) {
  $html = "";
  
  //$html .= "<form action='#'>";
  $html .= "<p>";
  $html .= "<input class='with-gap' name='$group' type='radio' id='$id' ";
  if ($checked) { $html .= "checked='checked'"; } else { $html .= ""; }
  if ($disabled) { $html .= "disabled='disabled'"; } else { $html .= ""; }
  $html .= ">";
  $html .= "<label for='$id'>";
  $html .= $value;
  $html .= "</label>";
  $html .= "</p>";
  //$html .= "</form>";
  
  return $html;
}

// 创建复选框
function createCheckBox($value, $id, $checked = false, $disabled = false) {
  $html = "";
  
  //$html .= "<form action='#'>";
  $html .= "<p>";
  $html .= "<input type='checkbox' class='filled-in' id='$id' ";
  if ($checked) { $html .= "checked='checked'"; } else { $html .= ""; }
  if ($disabled) { $html .= "disabled='disabled'"; } else { $html .= ""; }
  $html .= ">";
  $html .= "<label for='$id'>";
  $html .= $value;
  $html .= "</label>";
  $html .= "</p>";
  //$html .= "</form>";
  
  return $html;
}

// 创建普通按钮
function createButton($text, $href = '#') {
	$html = "";
  	$html .= "<a class='waves-effect waves-light btn' href='$href'>";
	$html .= $text;
	$html .= "</a>";
	return $html;
}

// 创建按钮组（下拉按钮）
function createButtonGroup($text, $subbtn = array()) {
	$html = "";
	
	$html .= "<div class='btn-group'>";
	$html .= "<button data-toggle='dropdown' class='btn btn-primary dropdown-toggle' aria-expanded='false'>";
	// class='btn btn-danger dropdown-toggle', class='btn btn-warning dropdown-toggle'
	$html .= $text;
	$html .= "<span class='caret'></span>";
	$html .= "</button>";
	$html .= "<ul class='dropdown-menu'>";
	
	//$html .= "<li><a href='#'>AAA</a></li>"; // 子按钮
	//$html .= "<li class='divider'></li>"; // 分界线
	
	foreach($subbtn as $k => $v) {
      $html .= "<li><a href='$v'>";
	  $html .= $k;
	  $html .= "</a></li>";
	  $html .= "<li class='divider'></li>";
	}
	
	$html .= "</ul>";
	$html .= "</div>";
	
	return $html;
}

function createInputPage() {
  $html = "";
  
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
  return $html;
}

?>








