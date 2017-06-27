<?php require_once 'templates/header.php';?>

<?php
$data1 = $_POST;  
?>

<?php 
if( !empty( $_POST )){
	try {
		$user = new Cl_User();
		$result = $user->getAnswers( $_POST );
	} catch (Exception $e) {
		$_SESSION['error'] = $e->getMessage();
	} 
}else{
	header('Location: home.php');exit;
}
?>
<style type="text/css">
	.panel
{
  -webkit-box-shadow: 0 1px 0px rgba(0,0,0,0.12), 0 1px 1px rgba(0,0,0,0.24);
  -moz-box-shadow: 0 1px 0px rgba(0,0,0,0.12), 0 1px 1px rgba(0,0,0,0.24);
  -ms-box-shadow: 0 1px 0px rgba(0,0,0,0.12), 0 1px 1px rgba(0,0,0,0.24);
  -o-box-shadow: 0 1px 0px rgba(0,0,0,0.12), 0 1px 1px rgba(0,0,0,0.24);
  box-shadow: 0 1px 0px rgba(0,0,0,0.12), 0 1px 1px rgba(0,0,0,0.24);
}
.panel{
  border-radius:0px;
  padding: 0px;
  border: none;
}

.panel-heading{
  line-height: 1.42857143 !important;
  color: #58666e !important;
}
.panel-heading
{
  padding: 0px;
  background: #F9F9F9;
  padding: 5px;
  padding-left: 20px;
  border-bottom: 1px solid #ddd;
}
/*bar chart*/
	.vertical .progress-bar {
		float: left;
		height: 240px;
		width: 25px;
		margin-right: 20px;
	}
@media  (max-width: 360px) {
.vertical .progress-bar {
		float: left;
		height: 240px;
		width: 20px;
		margin-right: 15px;
	}
}
@media  (max-width: 299px) {
.vertical .progress-bar {
		float: left;
		height: 240px;
		width: 16px;
		margin-right: 15px;
	}
}
	.vertical .progress-track {
		position: relative;
		width: 25px;
		height: 100%;
		background: #ebebeb;
	}

	.vertical .progress-fill {
		position: relative;
		background: #825;
		height: 50%;
		width: 25px;
		color: #fff;
		text-align: center;
		font-family: "Lato","Verdana",sans-serif;
		font-size: 12px;
		line-height: 20px;
	}
	.vertical .progress-fill span{font-size: 11px;}
</style>
<div class="content">
	<div class="container">
		<?php require_once 'templates/ads.php';?>
		<div class="row">
			<?php require_once 'templates/tutorials.php';?>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<h1 class="text-center text_underline">Your Quiz Results:</h1>
				<br />
				<form class="form-horizontal" role="form" id='solution' method="post" action="solution.php">
					<div class="form-group mg-b50">
						<p class="col-xs-12 col-sm-7 control-label">Right Answers:</p>
						<div class="col-xs-12 col-sm-5">
							<span class="well ans"> <?php echo isset($result['right_answer'])? $result['right_answer']:''; ?>
							</span>
						</div>
					</div>
					<div class="form-group mg-b50">
						<p class="col-xs-12 col-sm-7 control-label">Wrong Answers:</p>
						<div class="col-xs-12 col-sm-5">
							<span class="well ans"> <?php echo isset($result['wrong_answer'])? $result['wrong_answer']:''; ?>
							</span>
						</div>
					</div>
					<div class="form-group mg-b50">
						<p class="col-xs-12 col-sm-7 control-label">Unanswered Questions:</p>
						<div class="col-xs-12 col-sm-5">
							<span class="well ans"> <?php echo isset($result['unanswered'])? $result['unanswered']:''; ?>
							</span> 
						</div>
					</div>
					<div class="form-group mg-b50">
						<p class="col-xs-12 col-sm-7 control-label">Test Score:</p>
						<div class="col-xs-12 col-sm-5">
							<span class="well ans"> <?php echo isset($result['marks'])? $result['marks']:''; ?>/50
							</span> 
						</div>
					</div>

					<input type='hidden' name='input_name' value='<?php serialize($data1); ?>' />
					
					<div class="row btn-c well">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<a href="start-quiz.php" class="btn btn-success btn-home">Start New Quiz</a>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<button type="submit" class="btn btn-info btn-home">Solution</button>
						</div>
					</div>
				</form>
			</div>
			<?php require_once 'templates/sidebar.php';?>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="panel">
					<div class="panel-heading panel-heading-white text-center">
						<h4>Bar </h4>
					</div>
					<div class="panel-body">
						<div class="container vertical flat">

							<div class="progress-bar">
								<div class="progress-track">
									<div class="progress-fill">
										<span>100%</span>
									</div>
								</div>
							</div>

							<div class="progress-bar">
								<div class="progress-track">
									<div class="progress-fill">
										<span>75%</span>
									</div>
								</div>
							</div>

							<div class="progress-bar">
								<div class="progress-track">
									<div class="progress-fill">
										<span>60%</span>
									</div>
								</div>
							</div>

							<div class="progress-bar">
								<div class="progress-track">
									<div class="progress-fill">
										<span>20%</span>
									</div>
								</div>
							</div>

							<div class="progress-bar">
								<div class="progress-track">
									<div class="progress-fill">
										<span>34%</span>
									</div>
								</div>
							</div>

							<div class="progress-bar">
								<div class="progress-track">
									<div class="progress-fill">
										<span>82%</span>
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div>
				<div class="panel">
					<div class="panel-heading panel-heading-white text-center">
						<h4>Pie Chart</h4>
					</div>
					<div class="panel-body">
						<div id="pie-chart" style="height:200px;"></div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div> <!-- /container -->
<?php require_once 'templates/footer.php';?>

<script src="js/plugins/jquery.flot.min.js"></script>
<script src="js/plugins/jquery.flot.pie.min.js"></script>
<script type="text/javascript">
	     pieChart();


     function pieChart(){
          var dataPie = [
              { label: "Alfa", color:'#8C54CA', data: 210},
              { label: "Beta", color:'#58B2F4', data: 50},
              { label: "Gamma", color:'#BBE0E9', data: 150}
          ];

          $.plot('#pie-chart', dataPie, {
              series: {
                  pie: {
                      show: true
                  }
              },
              legend: {
                  show: false
              }
          });
     };
</script>
	<script type="text/javascript">
		$('.horizontal .progress-fill span').each(function(){
			var percent = $(this).html();
			$(this).parent().css('width', percent);
		});


		$('.vertical .progress-fill span').each(function(){
			var percent = $(this).html();
			var pTop = 100 - ( percent.slice(0, percent.length - 1) ) + "%";
			$(this).parent().css({
				'height' : percent,
				'top' : pTop
			});
		});
	</script>