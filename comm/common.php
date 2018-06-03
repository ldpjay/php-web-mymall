<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台管理系统</title> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="assets/materialize/css/materialize.min.css" media="screen,projection">
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet">
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet">
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
<div id="wrapper">
	<!-- 顶部导航 -------------------------------------  -->
	<nav class="navbar navbar-default top-navbar" role="navigation">
		<!-- 左侧内容 -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
				<span class="sr-only">aaa</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand waves-effect waves-dark" href="index.php">
				<i class="large material-icons">track_changes</i> <strong>后台管理系统</strong>
			</a>
			<div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
        </div>
		
		<!-- 右侧菜单 -->
		<ul class="nav navbar-top-links navbar-right"> 
			<!-- 邮件 -->
			<li>
				<a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown4">
					<i class="fa fa-envelope fa-fw"></i> 
					<i class="material-icons right">arrow_drop_down</i>
				</a>
				<ul id="dropdown4" class="dropdown-content dropdown-tasks w250 taskList">
					<li>
						<div>
							<strong>AAAA</strong>
							<span class="pull-right text-muted"><em>Today</em></span>
						</div>
						<p>aaaaa</p>
					</li>
					<li class="divider"></li>
					<li>
						<div>
							<strong>BBBB</strong>
							<span class="pull-right text-muted">
								<em>Yesterday</em>
							</span>
						</div>
						<p>bbbbb	</p>
						
					</li>
					<li class="divider"></li>
					<li><a class="text-center" href="#">
							<strong>全部消息</strong>
							<i class="fa fa-angle-right"></i>
						</a>
					</li>
				</ul>
			</li>	

			<!-- 进度 -->
			<li>
				<a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown3"><i class="fa fa-tasks fa-fw"></i> 
					<i class="material-icons right">arrow_drop_down</i>
				</a>
				<ul id="dropdown3" class="dropdown-content dropdown-tasks w250">
					<li>
						<a href="#">
							<div>
								<p><strong>进度一</strong>
									<span class="pull-right text-muted">完成度60%</span>
								</p>
								<div class="progress progress-striped active">
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
										<span class="sr-only">60% Complete (success)</span>
									</div>
								</div>
							</div>
						</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="#">
							<div>
								<p>
									<strong>进度二</strong>
									<span class="pull-right text-muted">完成度28%</span>
								</p>
								<div class="progress progress-striped active">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
										<span class="sr-only">28% Complete</span>
									</div>
								</div>
							</div>
						</a>
					</li>
				</ul>
			</li>

			<!-- 消息 -->
			<li>
				<a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown2"><i class="fa fa-bell fa-fw"></i> 
					<i class="material-icons right">arrow_drop_down</i>
				</a>
				<ul id="dropdown2" class="dropdown-content w250">
					<li>
						<div>
							<i class="fa fa-comment fa-fw"></i>AAAA
							<span class="pull-right text-muted small">4 min</span>
						</div>
					</li>
					<li class="divider"></li>
					<li>
						<div>
							<i class="fa fa-envelope fa-fw"></i>CCCC
							<span class="pull-right text-muted small">4 min</span>
						</div>
						
					</li>
					<li class="divider"></li>
					<li>
						<a class="text-center" href="#">
							<strong>查看全部</strong>
							<i class="fa fa-angle-right"></i>
						</a>
					</li>
				</ul>
			</li>
			
			<!-- 用户 -->
			<li>
				<a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1">
					<i class="fa fa-user fa-fw"></i><b id="top-admin-name">管理员</b>
					<i class="material-icons right">arrow_drop_down</i>
				</a>
				<ul id="dropdown1" class="dropdown-content">
					<li><a href="#"><i class="fa fa-user fa-fw"></i> 信息</a>
					</li>
					<li><a href="#"><i class="fa fa-gear fa-fw"></i> 设置</a>
					</li> 
					<li><a href="#"><i class="fa fa-sign-out fa-fw"></i> 退出</a>
					</li>
				</ul>
			</li>
		</ul>
    </nav>
	
	<!-- 左侧导航 -------------------------------------  -->
	<nav class="navbar-default navbar-side" role="navigation">
		<div class="sidebar-collapse">
			<ul class="nav" id="main-menu">
				<li><a href="index.php?page=0&sub=0" class="waves-effect waves-dark" id="nav_main_0"><i class="fa fa-dashboard"></i>网站概况</a></li>
				<li><a href="index.php?page=1&sub=0" class="waves-effect waves-dark" id="nav_main_1"><i class="fa fa-desktop"></i>用户管理</a></li>
				<li><a href="index.php?page=2&sub=0" class="waves-effect waves-dark" id="nav_main_2"><i class="fa fa-sitemap"></i>商品管理</a></li>
				<li><a href="index.php?page=3&sub=0" class="waves-effect waves-dark" id="nav_main_3"><i class="fa fa-qrcode"></i>订单管理</a></li>
				
				<!--
				<li><a href="#" class="active-menu waves-effect waves-dark" id="nav0"><i class="fa fa-dashboard"></i>首页</a></li>
				<li><a href="index.php?page=4" class="waves-effect waves-dark" id="nav_main_4"><i class="fa fa-table"></i>页面</a></li>
				<li><a href="index.php?page=5" class="waves-effect waves-dark" id="nav_main_5"><i class="fa fa-edit"></i>页面</a></li>
				<li><a href="index.php?page=6" class="waves-effect waves-dark" id="nav_main_6"><i class="fa fa-fw fa-file"></i>页面</a></li>
				<li>
					<a href="#" class="waves-effect waves-dark"><i class="fa fa-sitemap"></i>页面<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level collapse">
						<li><a href="#">二级菜单</a></li>
						<li><a href="#">二级菜单<span class="fa arrow"></span></a>
							<ul class="nav nav-third-level collapse">
								<li><a href="#">三级菜单</a></li>
							</ul>
						</li>
					</ul>
				</li>
				-->				
			</ul>
		</div>
	</nav>
	
	<!-- 内容部分 -------------------------------------  -->
	<div id="page-wrapper">
		<!-- 标题 -->
		<div class="header">
			<h1 class="page-header" id="page-title">标题</h1>
			<ol class="breadcrumb" id="page-subtitle">
				<!--
				<li><a href = "">子标题</a></li> <li><a href = "">子标题</a></li> <li><a href = "">子标题</a></li>
				-->
			</ol>
		</div>
		
		<!-- 内容 -->
		<div id="page-inner">
			
			
			
			<!--
			<table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
				<thead>
					<tr role="row">
					<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 166px;">Rendering engine</th>
					<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 258px;">Browser</th>
					<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 234px;">Platform(s)</th>
					<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 141px;">Engine version</th>
					<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 99px;">CSS grade</th>
					</tr>
				</thead>
				<tbody>
					<tr class="gradeA odd">
						<td class="sorting_1">Gecko</td>
						<td class=" ">Firefox 1.0</td>
						<td class=" ">Win 98+ / OSX.2+</td>
						<td class="center ">1.7</td>
						<td class="center ">A</td>
					</tr><tr class="gradeA even">
						<td class="sorting_1">Gecko</td>
						<td class=" ">Firefox 1.5</td>
						<td class=" ">Win 98+ / OSX.2+</td>
						<td class="center ">1.8</td>
						<td class="center ">A</td>
					</tr>
				</tbody>
			</table>
			-->
			
			
			<!--
			<div class="dashboard-cards"> 
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3">
				
					<div class="card horizontal cardIcon waves-effect waves-dark">
					<div class="card-image red">
					<i class="material-icons dp48">import_export</i>
					</div>
					<div class="card-stacked red">
					<div class="card-content">
					<h3>84,198</h3> 
					</div>
					<div class="card-action">
					<strong>数据</strong>
					</div>
					</div>
					</div>
 
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
				
					<div class="card horizontal cardIcon waves-effect waves-dark">
					<div class="card-image orange">
					<i class="material-icons dp48">shopping_cart</i>
					</div>
					<div class="card-stacked orange">
					<div class="card-content">
					<h3>36,540</h3> 
					</div>
					<div class="card-action">
					<strong>订单</strong>
					</div>
					</div>
					</div> 
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
				
						<div class="card horizontal cardIcon waves-effect waves-dark">
					<div class="card-image blue">
					<i class="material-icons dp48">equalizer</i>
					</div>
					<div class="card-stacked blue">
					<div class="card-content">
					<h3>24,225</h3> 
					</div>
					<div class="card-action">
					<strong>商品</strong>
					</div>
					</div>
					</div> 
					 
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
				
				<div class="card horizontal cardIcon waves-effect waves-dark">
					<div class="card-image green">
					<i class="material-icons dp48">supervisor_account</i>
					</div>
					<div class="card-stacked green">
					<div class="card-content">
					<h3>88,658</h3> 
					</div>
					<div class="card-action">
					<strong>用户</strong>
					</div>
					</div>
					</div>
				</div>
			</div>
		   </div>
		   -->
		</div>
	</div>
	
	<!-- 外部样式 -------------------------------------  -->
	<!-- /. WRAPPER  -->
	<!-- JS Scripts-->
	<!-- jQuery Js -->
	<script src="assets/js/jquery-1.10.2.js"></script>
	<!-- Bootstrap Js -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/materialize/js/materialize.min.js"></script>
	<!-- Metis Menu Js -->
	<script src="assets/js/jquery.metisMenu.js"></script>
	<!-- Morris Chart Js -->
	<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
	<script src="assets/js/morris/morris.js"></script>
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	<script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	<!-- Custom Js -->
	<script src="assets/js/custom-scripts.js"></script> 
</div>
</body>		
</html>



