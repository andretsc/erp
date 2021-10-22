<?php 
require_once("verificar.php");
require_once("../conexao.php");

$totalClientes = 0;

$query = $pdo->query("SELECT * FROM clientes where ativo = 'Sim' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$totalClientes = @count($res);

 ?>
<div class="main-page">
	<div class="col_3">
		<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				<i class="pull-left fa fa-dollar icon-rounded"></i>
				<div class="stats">
					<h5><strong>$452</strong></h5>
					<span>Total Revenue</span>
				</div>
			</div>
		</div>
		<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				<i class="pull-left fa fa-laptop user1 icon-rounded"></i>
				<div class="stats">
					<h5><strong>$1019</strong></h5>
					<span>Online Revenue</span>
				</div>
			</div>
		</div>
		<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				<i class="pull-left fa fa-money user2 icon-rounded"></i>
				<div class="stats">
					<h5><strong>$1012</strong></h5>
					<span>Expenses</span>
				</div>
			</div>
		</div>
		<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				<i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
				<div class="stats">
					<h5><strong>$450</strong></h5>
					<span>Expenditure</span>
				</div>
			</div>
		</div>
		<div class="col-md-3 widget">
			<div class="r3_counter_box">
				<i class="pull-left fa fa-users dollar2 icon-rounded"></i>
				<div class="stats">
					<h5><strong><?php echo $totalClientes ?></strong></h5>
					<span>Total Clientes</span>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>

	<div class="row-one widgettable">
		<div class="col-md-7 content-top-2 card">
			<div class="agileinfo-cdr">
				<div class="card-header">
					<h3>Weekly Sales</h3>
				</div>

				<div id="Linegraph" style="width: 98%; height: 350px">
				</div>

			</div>
		</div>
		<div class="col-md-3 stat">
			<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Sales</h5>
					<label>1283+</label>
				</div>
				<div class="col-md-6 top-content1">	   
					<div id="demo-pie-1" class="pie-title-center" data-percent="45"> <span class="pie-value"></span> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Reviews</h5>
					<label>2262+</label>
				</div>
				<div class="col-md-6 top-content1">	   
					<div id="demo-pie-2" class="pie-title-center" data-percent="75"> <span class="pie-value"></span> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Visitors</h5>
					<label>12589+</label>
				</div>
				<div class="col-md-6 top-content1">	   
					<div id="demo-pie-3" class="pie-title-center" data-percent="90"> <span class="pie-value"></span> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="col-md-2 stat">
			<div class="content-top">
				<div class="top-content facebook">
					<a href="#"><i class="fa fa-facebook"></i></a>
				</div>
				<ul class="info">
					<li class="col-md-6"><b>1,296</b><p>Friends</p></li>
					<li class="col-md-6"><b>647</b><p>Likes</p></li>
					<div class="clearfix"></div>
				</ul>
			</div>
			<div class="content-top">
				<div class="top-content twitter">
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
				<ul class="info">
					<li class="col-md-6"><b>1,997</b><p>Followers</p></li>
					<li class="col-md-6"><b>389</b><p>Tweets</p></li>
					<div class="clearfix"></div>
				</ul>
			</div>
			<div class="content-top">
				<div class="top-content google-plus">
					<a href="#"><i class="fa fa-google-plus"></i></a>
				</div>
				<ul class="info">
					<li class="col-md-6"><b>1,216</b><p>Followers</p></li>
					<li class="col-md-6"><b>321</b><p>shares</p></li>
					<div class="clearfix"></div>
				</ul>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>

	<div class="charts">
		<div class="col-md-4 charts-grids widget">
			<div class="card-header">
				<h3>Bar chart</h3>
			</div>

			<div id="container" style="width: 100%; height:270px;">
				<canvas id="canvas"></canvas>
			</div>
			<button id="randomizeData">Randomize Data</button>
			<button id="addDataset">Add Dataset</button>
			<button id="removeDataset">Remove Dataset</button>
			<button id="addData">Add Data</button>
			<button id="removeData">Remove Data</button>

		</div>

		<div class="col-md-4 charts-grids widget states-mdl">
			<div class="card-header">
				<h3>Column & Line Graph</h3>
			</div>
			<div id="chartdiv"></div>
		</div>

		<div class="clearfix"> </div>
	</div>

	
	<!-- for amcharts js -->
	<script src="js/amcharts.js"></script>
	<script src="js/serial.js"></script>
	<script src="js/export.min.js"></script>
	<link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
	<script src="js/light.js"></script>
	<!-- for amcharts js -->

	<script  src="js/index1.js"></script>
	
	<div class="charts">		
		<div class="mid-content-top charts-grids">
			<div class="middle-content">
				<h4 class="title">Carousel Slider</h4>
				<!-- start content_slider -->
				<div id="owl-demo" class="owl-carousel text-center">
					<div class="item">
						<img class="lazyOwl img-responsive" data-src="images/slider1.jpg" alt="name">
					</div>
					<div class="item">
						<img class="lazyOwl img-responsive" data-src="images/slider2.jpg" alt="name">
					</div>
					<div class="item">
						<img class="lazyOwl img-responsive" data-src="images/slider3.jpg" alt="name">
					</div>
					<div class="item">
						<img class="lazyOwl img-responsive" data-src="images/slider4.jpg" alt="name">
					</div>
					<div class="item">
						<img class="lazyOwl img-responsive" data-src="images/slider5.jpg" alt="name">
					</div>
					<div class="item">
						<img class="lazyOwl img-responsive" data-src="images/slider6.jpg" alt="name">
					</div>
					<div class="item">
						<img class="lazyOwl img-responsive" data-src="images/slider7.jpg" alt="name">
					</div>

				</div>
			</div>
			<!--//sreen-gallery-cursual---->
		</div>
	</div>

	<div class="col_1">
		<div class="col-md-4 span_8">
			<div class="activity_box">
				<h2>Inbox</h2>
				<div class="scrollbar" id="style-1">
					<div class="activity-row">
						<div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt=""/></div>
						<div class="col-xs-7 activity-desc">
							<h5><a href="#">Michael Chris</a></h5>
							<p>Hey ! There I'm available.</p>
						</div>
						<div class="col-xs-2 activity-desc1"><h6>12:05 PM</h6></div>
						<div class="clearfix"> </div>
					</div>
					<div class="activity-row">
						<div class="col-xs-3 activity-img"><img src='images/4.jpg' class="img-responsive" alt=""/></div>
						<div class="col-xs-7 activity-desc">
							<h5><a href="#">Alexander</a></h5>
							<p>Hey ! There I'm available.</p>
						</div>
						<div class="col-xs-2 activity-desc1"><h6>12:06 PM</h6></div>
						<div class="clearfix"> </div>
					</div>
					<div class="activity-row">
						<div class="col-xs-3 activity-img"><img src='images/3.jpg' class="img-responsive" alt=""/></div>
						<div class="col-xs-7 activity-desc">
							<h5><a href="#">Daniel Lucas</a></h5>
							<p>Hey ! There I'm available.</p>
						</div>
						<div class="col-xs-2 activity-desc1"><h6>01:30 PM</h6></div>
						<div class="clearfix"> </div>
					</div>
					<div class="activity-row">
						<div class="col-xs-3 activity-img"><img src='images/2.jpg' class="img-responsive" alt=""/></div>
						<div class="col-xs-7 activity-desc">
							<h5><a href="#">Jackson Jacob</a></h5>
							<p>Hey ! There I'm available.</p>
						</div>
						<div class="col-xs-2 activity-desc1"><h6>01:50 PM</h6></div>
						<div class="clearfix"> </div>
					</div>
					<div class="activity-row">
						<div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt=""/></div>
						<div class="col-xs-7 activity-desc">
							<h5><a href="#">David Samuel</a></h5>
							<p>Hey ! There I'm available.</p>
						</div>
						<div class="col-xs-2 activity-desc1"><h6>12:20 PM</h6></div>
						<div class="clearfix"> </div>
					</div>

					<div class="activity-row">
						<div class="col-xs-3 activity-img"><img src='images/4.jpg' class="img-responsive" alt=""/></div>
						<div class="col-xs-7 activity-desc">
							<h5><a href="#">laura Smith</a></h5>
							<p>Hey ! There I'm available.</p>
						</div>
						<div class="col-xs-2 activity-desc1"><h6>12:50 PM</h6></div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<form action="#" method="post">
					<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
					<input type="submit" value="Submit"/>		
				</form>
			</div>
		</div>
		<div class="col-md-4 span_8">
			<div class="activity_box activity_box1">
				<h3>chat</h3>
				<div class="scrollbar" id="style-3">
					<div class="activity-row activity-row1">
						<div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt=""/><span>06:01 AM</span></div>
						<div class="col-xs-5 activity-img1">
							<div class="activity-desc-sub">
								<h5>Michael Chris</h5>
								<p>Hello ! this is Michael chris</p>
							</div>
						</div>
						<div class="col-xs-4 activity-desc1"></div>
						<div class="clearfix"> </div>
					</div>
					<div class="activity-row activity-row1">
						<div class="col-xs-2 activity-desc1"></div>
						<div class="col-xs-7 activity-img2">
							<div class="activity-desc-sub1">
								<h5>Alexander</h5>
								<p>Hi,How are you ? What about our next meeting?</p>
							</div>
						</div>
						<div class="col-xs-3 activity-img"><img src='images/3.jpg' class="img-responsive" alt=""/><span>06:02 AM</span></div>
						<div class="clearfix"> </div>
					</div>
					<div class="activity-row activity-row1">
						<div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt=""/><span>06:05 AM</span></div>
						<div class="col-xs-5 activity-img1">
							<div class="activity-desc-sub">
								<h5>Michael Chris</h5>
								<p>Yeah fine, Hope you the same</p>
							</div>
						</div>
						<div class="col-xs-4 activity-desc1"></div>
						<div class="clearfix"> </div>
					</div>
					<div class="activity-row activity-row1">
						<div class="col-xs-2 activity-desc1"></div>
						<div class="col-xs-7 activity-img2">
							<div class="activity-desc-sub1">
								<h5>Alexander</h5>
								<p>Wow that's great</p>
							</div>
						</div>
						<div class="col-xs-3 activity-img"><img src='images/3.jpg' class="img-responsive" alt=""/><span>06:20 PM</span></div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<form action="#" method="post">
					<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
					<input type="submit" value="Send"/>		
				</form>
			</div>
		</div>

		<div class="col-sm-4 w3-agile-crd widgettable span_8">
			<div class="card">
				<div class="card-body card-padding">
					<div class="">
						<header class="widget-header">
							<h4 class="widget-title">Últimos Logs</h4>
						</header>
						<hr class="widget-separator">
						<div class="widget-body">
							<div class="streamline">

								<?php 
								$query = $pdo->query("SELECT * FROM logs ORDER BY id desc limit 5");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
								$total_reg = @count($res);
								if($total_reg > 0){

									for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}

										$hora = $res[$i]['hora'];
										$usuario = $res[$i]['usuario'];

										$agora = date('H:i:s');


										$tempo_minutos = gmdate('i', strtotime( $agora ) - strtotime( $hora ) );
										$tempo_hora = gmdate('H', strtotime( $agora ) - strtotime( $hora ) );


										if($tempo_hora < 10){
											$tempo_horaF = str_replace('0', '', $tempo_hora);
										}else{
											$tempo_horaF = $tempo_hora;
										}

										if($tempo_hora == "00"){
											$tempo = $tempo_minutos . ' Minutos ';
										}else if ($tempo_hora == "01"){
											$tempo = $tempo_horaF . ' Hora ';
										}else{
											$tempo = $tempo_horaF . ' Horas ';
										}




										$query2 = $pdo->query("SELECT * FROM usuarios where id = '$usuario'");
										$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
										if(@count($res2) > 0){
											$nome_usu = $res2[0]['nome'];
										}else{
											$nome_usu = 'Sem Usuário';
										}

										if($i == 0){
											$classe="sl-primary";
										}else if($i == 1){
											$classe="sl-danger";
										}else if($i == 2){
											$classe="sl-success";
										}else if($i == 3){
											$classe="sl-content";
										}else{
											$classe="sl-warning";
										}
										?>


										<div class="sl-item <?php echo $classe ?>">
											<div class="sl-content">
												<small class="text-muted"><?php echo $tempo ?> Atrás</small>
												<p style="font-size: 13px"><?php echo $nome_usu ?> - <?php echo $res[$i]['tabela'] ?> / <?php echo $res[$i]['acao'] ?></p>
											</div>
										</div>

									<?php } } ?>


								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			
		</div>

	</div>