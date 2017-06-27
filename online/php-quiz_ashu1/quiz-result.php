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
@media(max-width: 771px){
.col-sm-7{margin-left: 20%;  position: relative;
  height: 1px;}
.col-sm-5{  margin-left:46%;  position: relative;
  }
  .well{width: 80%; margin: 10px auto;}
}
@media(max-width: 621px){
.col-sm-7{margin-left: 20%;  position: relative;
  height: 1px;}
.col-sm-5{  margin-left:53%;  position: relative;
  }
}
@media(max-width: 478px){
.col-sm-7{margin-left: 10%;  position: relative;}
.well{width: 100%;}
}
@media(max-width: 374px){
.col-sm-7{text-align: left; }
.col-sm-5{  margin-right: 10%; }
h1{font-size: 25px;} 
}
@media(max-width: 357px){
.col-sm-7{text-align: left; margin-right: 10%;}
.col-sm-5{  margin-left: 59%;  }
}
@media(max-width: 320px){
.col-sm-7{text-align: left; margin-right: 40%;}
.col-sm-5{  margin-left: 45%;  }
}
@media(max-width: 292px){
.col-sm-7{text-align: left; margin-right: 30%;}
.col-sm-5{ text-align: right; }
}
</style>
	<div class="content">
     	<div class="container">
			<?php require_once 'templates/ads.php';?>
     		<div class="row">
     			<?php require_once 'templates/tutorials.php';?>
	     		<div class="col-sm-6">
					<h1 class="text-center text_underline">Your Quiz Results:</h1>
					<br />
					<form class="form-horizontal" role="form" id='solution' method="post" action="solution.php">
						<div class="form-group mg-b50 row">
							<p class="  col-sm-7 control-label">Right Answers:</p>
							<div class="  col-sm-5">
								<span class="well ans"> <?php echo isset($result['right_answer'])? $result['right_answer']:''; ?>
								</span>
							</div>
						</div>
						<div class="form-group mg-b50">
							<p class="col-sm-7 control-label">Wrong Answers:</p>
							<div class="col-sm-5">
								<span class="well ans"> <?php echo isset($result['wrong_answer'])? $result['wrong_answer']:''; ?>
								</span>
							</div>
						</div>
						<div class="form-group mg-b50">
							<p class="col-sm-7 control-label">Unanswered Questions:</p>
							<div class="col-sm-5">
								<span class="well ans"> <?php echo isset($result['unanswered'])? $result['unanswered']:''; ?>
								</span> 
							</div>
						</div>
						<div class="form-group mg-b50">
							<p class="col-sm-7 control-label">Test Score:</p>
							<div class="col-sm-5">
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
     		</div>
     	</div>
    </div> <!-- /container -->
<?php require_once 'templates/footer.php';?>