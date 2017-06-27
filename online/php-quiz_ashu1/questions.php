<?php 
session_start();
$_SESSION["cat"] = $_POST['category'];
$_SESSION["subcat"] = $_POST['subcat'];
?>
<?php require_once 'templates/header.php';?>
<?php 

if( !empty( $_POST ))
{
	try {
		$user = new Cl_User();
		$results = $user->getQuestions($_POST  );
	}
	catch (Exception $e)
	{
		$_SESSION['error'] = $e->getMessage();
	} 

}else
{
	$_SESSION['error'] = CHOOSE_CATEGORY;
	header('Location: home.php');exit;
}
?>

<!DOCTYPE html>
<html lang="en-us">
  <meta charset="utf-40">
<head>
	
<!-- <link rel="stylesheet" href="css/jquery-ui.css">
	<script src="js/jquery-ui.js"></script>   -->
	<link rel="stylesheet" href="style.css">
	

	<script>
		/*  use for pop up when submit button is press */
/*
  $(function(){
  $("#zxc").dialog({autoOpen:false});
  $("#btn1").on("click",function(){
  $("#zxc").dialog("open");
  });
  $("#btn2").click(function(){
  $("#quiz_form").submit();
  $(this).dialog("close");
  });
  
});  */

</script>
<style type="text/css">
	.top-btn-align, .bottom-btn-align{text-align: right;
	}
	@media  (min-width: 993px) {
		.hidden-lg { display: none; } 		
	}
	@media  (max-width: 992px) {
		.hidden-sm { display: none; } 
		.top-btn-align, .bottom-btn-align{text-align: center;}
	}

	@media  (max-width: 478px) {
		.btn-inline{ display:inline-block; vertical-align: middle;}
		.btn-sq-sm{margin-left: 20%;}
}

}
	@media  (max-width: 410px) {
		.btn-sq-sm{margin-left: 10%;}
   }
   @media  (max-width: 322px) {
		.btn-sq-sm{margin-left: 5%;}
   }
    @media  (max-width: 290px) {
		.btn-sq-sm{text-align: center;margin-left: 0%;}
   }
      @media  (max-width: 309px) {
      	.top-btn-align, .bottom-btn-align{
      		text-align: left;
      		left: 0px;}

}
	.panel-body img{
		position: relative;
		outline: none; 
		width: 100%;
		max-width: 100% !important;
		height: auto !important;
		object-fit: contain !important; 
	}
@media (max-width: 366px){		

element.style {width: 100% !important;
	max-width: 100% !important;
			height: 249px !important;
}
.panel-body img{
	width: 100% !important;
	max-width: 100% !important;
		height: auto !important;

 }
}


</style>
</head>

<body>


	

	<div class="content">
		<div class="container">
			<div class="row">
				<form class="form-horizontal" role="form" id='quiz_form' method="post" action="quiz-result.php">

					<div class ="col-sm-9">
						<div class="panel panel-info" >

							<div class="panel-heading" style="background:#ADD8E6" align ="left">

								<button type="button"  class="btn  btn-primary">Aptitude</button>&emsp;
								<button type="button"  class="btn  btn-primary">Technical</button>&emsp;							
							</div>
							<div class="panel-heading top-btn-align" style="background:#ADD8E6" >

								<a class= "btn btn-success" title="Calculator"  target="popup" onclick="window.open('http://web2.0calc.com/widgets/horizontal/?options=%7B%22angular%22%3A%22deg%22%2C%22options%22%3A%22hide%22%2C%22menu%22%3A%22show%22%7D','name','width=600,height=400')"><i class="fa fa-calculator hidden-lg " aria-hidden="true" ></i><div class="hidden-sm">Scientific Calculator</div></a>
								&emsp;
								<button type="button" title="Useful Data" onclick="window.open('useful_data.pdf', 'My Window', 'height=600px,width=1000px, top=50px, left=100px')" class="btn  btn-danger"><i class="fa fa-book hidden-lg" aria-hidden="true"></i><div class="hidden-sm">Useful Data</div></button>&emsp;
								<button type="button" class="btn" title="Time"><i class="fa fa-clock-o hidden-lg" aria-hidden="true"></i> <b class="hidden-sm">Timer :</b> <span id='timer'></span></button >&emsp;&emsp;&emsp;								
							</div>




								<?php

								$remainder = $results['remainder'];
								$number_question =  1;
								$rowcount =  $results['rowcount'];
								$i = 0;
								$j = 1;
								$k = 1;
								?>

								<?php foreach ($results['questions'] as $result)
								{
									if ( $i == 0) 
										echo "<div class='cont' id='question_splitter_$j'>";  ?>




									<div class="bg-warning" style="height:400px" > 
										<div class="panel-body"  >

											<div id='question<?php echo $k;?>' >
												<p class="questions" id="qname<?php echo $j;?>"> <span class="btn btn-sq-xs btn-info"><?php echo $k?>.</span><?php echo $result['question_name'];?></p>
												<div class="row">A.<input  type="radio" value="1" class="radio1_<?php echo $j;?>" id="radio1_<?php echo $j;?>" name="<?php echo $result['id'];?>" /><?php echo $result['answer1'];?></div>


												<div class="row">B.<input type="radio" value="2" class="radio1_<?php echo $j;?>" id="radio2_<?php echo $j;?>" name="<?php echo $result['id'];?>" /><?php echo $result['answer2'];?></div>


												<div class="row">C.<input type="radio" value="3" class="radio1_<?php echo $j;?>" id="radio3_<?php echo $j;?>" name="<?php echo $result['id'];?>" /><?php echo $result['answer3'];?></div>


												<div class="row">D.<input type="radio" value="4" class="radio1_<?php echo $j;?>" id="radio4_<?php echo $j;?>" name="<?php echo $result['id'];?>" /><?php echo $result['answer4'];?></div>


												<?php if(isset( $result['answer5'] ) && !empty( $result['answer5'] )){ ?>
												<input type="radio" value="5" class="radio1_<?php echo $j;?>" id='radio5_<?php echo $j;?>' name='<?php echo $result['id'];?>'/><?php echo $result['answer5'];?>
												<br/>
												<?php } ?>

												<?php if(isset( $result['answer6'] ) && !empty( $result['answer6'] )){ ?>
												<input type="radio" value="6" class="radio1_<?php echo $j;?>" id='radio6_<?php echo $j;?>' name='<?php echo $result['id'];?>'/><?php echo $result['answer6'];?>
												<br/>
												<?php } ?>


												<input type="radio" checked='checked' style='display:none' value="unsolved" id='radio7_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>                                                                      
												<br/>  
											</div>


										</div>
									</div>



									<div  style="background:#ADD8E6"  class="bottom-btn-align">
										<?php 
										$i++;
										if ( $k == 1 ) {
											echo "<br/>

											<button type='button' class='btn' title='Previous'><i class='fa fa-arrow-circle-left hidden-lg' aria-hidden='true'></i><div class='hidden-sm'>Previous</div></button>
											<button id='".$j."' class='next btn btn-success' type='button' title='Next'><i class='fa fa-arrow-circle-right hidden-lg' aria-hidden='true'></i><div class='hidden-sm'>Next</div></button>&emsp; 
											<button  id='".$j."' class='clear btn btn-success' type='button' title='clear'><div class='hidden-lg'>clear</div><div class='hidden-sm'>clear response</div></button>&emsp; 
											<button  id='".$j."' class='mark btn btn-success' type='button' title='Mark for Review & Next'><i class='fa fa-check-square-o hidden-lg' aria-hidden='true'></i><div class='hidden-sm'>Mark for Review and Next</div></button>";

										//$k++;
											$j++; 
											$i=0;
										} elseif ( $k > 1 && $k < $rowcount  ) { 
											echo "<br/>

											<button id='".$j."' class='previous btn btn-success' type='button'><i class='fa fa-arrow-circle-left hidden-lg' aria-hidden='true'></i><div class='hidden-sm'>Previous</div></button>
											<button id='".$j."' class='next btn btn-success' type='button' ><i class='fa fa-arrow-circle-right hidden-lg' aria-hidden='true'></i><div class='hidden-sm'>Next</div></button>
											<button  id='".$j."' class='clear btn btn-success' type='button'><div class='hidden-lg'>clear</div><div class='hidden-sm'>clear response</div></button>&emsp; 
											<button  id='".$j."' class='mark btn btn-success'  type='button'><i class='fa fa-check-square-o hidden-lg' aria-hidden='true'></i><div class='hidden-sm'>Mark for Review and Next</div></button>";

											$i = 0;
											$j++;
										//$k++;
										} elseif ( $k == $rowcount  ) { 
											echo "<br/>

											<button id='".$j."' class='previous btn btn-success' type='button'><i class='fa fa-arrow-circle-left hidden-lg' aria-hidden='true'></i><div class='hidden-sm'>Previous</div></button>
											<button  class=' btn' type='button'><i class='fa fa-arrow-circle-right hidden-lg' aria-hidden='true'></i><div class='hidden-sm'>Next</div></button>
											<button  id='".$j."' class='clear btn btn-success' type='button'><div class='hidden-lg'>clear</div><div class='hidden-sm'>clear response</div></button>&emsp; 
											<button  id='".$j."' class='mark btn btn-success'  type='button'><i class='fa fa-check-square-o hidden-lg' aria-hidden='true'></i><div class='hidden-sm'>Mark for Review and Next</div></button>";

											$i = 0;
											$j++;
										} 
										$k++;
										?> </div></div>	
										<?php	}   ?>





									</div>				
								</div>				



								<div class ="col-sm-3">
									<div class="panel panel-info">
										<div class="panel-heading">Questions Palette</div>
										<div class="panel-body">

											<table class="table" >



												<tr  >
													<div class="row">
														<div class="col-lg-12">
															<td height="200px"   overflow = "scroll" > 
																<div class="bg-warning" style="height:300px" >
																	<p id = "id1"></p>
																	<button type="button" id ="id_1"  class="button1 btn btn-sq-xs btn-info" value="1"  title='".$j."'>1</button>
																	<button type="button" id ="id_2"  class="button1 btn btn-sq-xs btn-info" value="2"  title='".$j."'>2</button>
																	<button type="button" id ="id_3"  class="button1 btn btn-sq-xs btn-info" value="3"  title='".$j."'>3</button>
																	<button type="button" id ="id_4"  class="button1 btn btn-sq-xs btn-info" value="4"  title='".$j."'>4</button>
																	<button type="button" id ="id_5"  class="button1 btn btn-sq-xs btn-info" value="5"  title='".$j."'>5</button>
																	<button type="button" id ="id_6"  class="button1 btn btn-sq-xs btn-info" value="6"  title='".$j."'>6</button>
																	<button type="button" id ="id_7"  class="button1 btn btn-sq-xs btn-info" value="7"  title='".$j."'>7</button>
																	<button type="button" id ="id_8"  class="button1 btn btn-sq-xs btn-info" value="8"  title='".$j."'>8</button>
																	<button type="button" id ="id_9"  class="button1 btn btn-sq-xs btn-info" value="9"  title='".$j."'>9</button>
																	<button type="button" id ="id_10" class="button1 btn btn-sq-xs btn-info" value="10" title='".$j."'>10</button>
																	<button type="button" id ="id_11" class="button1 btn btn-sq-xs btn-info" value="11" title='".$j."'>11</button>
																	<button type="button" id ="id_12" class="button1 btn btn-sq-xs btn-info" value="12" title='".$j."'>12</button>
																	<button type="button" id ="id_13" class="button1 btn btn-sq-xs btn-info" value="13" title='".$j."'>13</button>
																	<button type="button" id ="id_14" class="button1 btn btn-sq-xs btn-info" value="14" title='".$j."'>14</button>
																	<button type="button" id ="id_15" class="button1 btn btn-sq-xs btn-info" value="15" title='".$j."'>15</button>
																	<button type="button" id ="id_16" class="button1 btn btn-sq-xs btn-info" value="16" title='".$j."'>16</button>
																	<button type="button" id ="id_17" class="button1 btn btn-sq-xs btn-info" value="17" title='".$j."'>17</button>
																	<button type="button" id ="id_18" class="button1 btn btn-sq-xs btn-info" value="18" title='".$j."'>18</button>
																	<button type="button" id ="id_19" class="button1 btn btn-sq-xs btn-info" value="19" title='".$j."'>19</button>
																	<button type="button" id ="id_20" class="button1 btn btn-sq-xs btn-info" value="20" title='".$j."'>20</button>
																	<button type="button" id ="id_21" class="button1 btn btn-sq-xs btn-info" value="21" title='".$j."'>21</button>
																	<button type="button" id ="id_22" class="button1 btn btn-sq-xs btn-info" value="22" title='".$j."'>22</button>
																	<button type="button" id ="id_23" class="button1 btn btn-sq-xs btn-info" value="23" title='".$j."'>23</button>
																	<button type="button" id ="id_24" class="button1 btn btn-sq-xs btn-info" value="24" title='".$j."'>24</button>
																	<button type="button" id ="id_25" class="button1 btn btn-sq-xs btn-info" value="25" title='".$j."'>25</button>

																</div>
															</td>
														</div>
													</div>
												</tr>


												<tr >

													<div class="row" >
														<div class="col-lg-12"  >
															<td>

																<p class="inline-btn">

																	<button type="button" class="btn btn-sq-sm btn-primary value="Open popup" onclick="window.open('instruction1.php', 'My Window', 'height=600px,width=1000px, top=50px, left=100px')" >Instruction
																	</button >
																	<button type="button" class="btn btn-sq-sm btn-success">Profile
																	</button >
																	<button id="btn1" type="submit" class="btn btn-sq-sm btn-warning next btn btn-success" >Submit
																	</button >
																	<button type="button" class="btn btn-sq-sm btn-danger" value="Open popup" onclick="window.open('gate_2013.pdf', 'My Window', 'height=600px,width=1000px, top=50px, left=100px')">Que paper
																	</button >            
																</p>

															</td>
														</div>
													</div>

												</tr>

											</table>

										</div>
									</div>
								</div>

	<!--      <div id="zxc" style="display:none">
          <p>Do you realy want to submit</p>
		  <button id="btn2" type="button"  >Submit</button >											
		  </div>  -->



		</form>

	</div>
	<?php require_once 'templates/sidebar.php';?>
</div>
</div>	


<?php
extract($_POST); 
$query = "SELECT * FROM subcategory where id = '$subcat' ";
$db = new Cl_DBclass();
//$this->_con = $db->con;
$result = mysqli_query($db->con,$query);
$data = mysqli_fetch_assoc($result);
$time= $data['time'];
?>



<script>
/* $( "#quiz_form" ).submit(function( event ) {
  alert( "Do you realy want to submit" );
  event.preventDefault();
});  */
$('btn2').on('click', function() {

	if ( this.host == window.location.host ) {
		if ( window.confirm('Really want to submit?') ) {
                    // They clicked Yes
                    $( "#quiz_form" ).submit();
                }
                else {
                    // They clicked no
                    console.log('you chose to stay here.');
                    return false
                }
            }
        }); 

    </script>

    <script>
    	$('.cont').addClass('hide');   
    	$('#question_splitter_1').removeClass('hide');  


    	$(document).on('click','.next',function(){
    		last=parseInt($(this).attr('id'));  console.log( last );   
    		nex=last+1; console.log( nex ); 

    		if($('#radio1_'+last).prop("checked") || $('#radio2_'+last).prop("checked") || $('#radio3_'+last).prop("checked") || $('#radio4_'+last).prop("checked") || $('#radio5_'+last).prop("checked") || $('#radio6_'+last).prop("checked")){
    			$('#id_'+last).css('background', 'green'); 
    		}
    		else{
    			$('#id_'+last).css('background', 'red');  
    		}


    		$('#question_splitter_'+last).addClass('hide');

    		$('#question_splitter_'+nex).removeClass('hide');


    	});


    	$(document).on('click','.previous',function(){
    		last=parseInt($(this).attr('id'));  console.log( last );     
    		nex=last-1; console.log( nex ); 

    		if($('#radio1_'+last).prop("checked") || $('#radio2_'+last).prop("checked") || $('#radio3_'+last).prop("checked") || $('#radio4_'+last).prop("checked") || $('#radio5_'+last).prop("checked") || $('#radio6_'+last).prop("checked")){
    			$('#id_'+last).css('background', 'green'); 
    		}
    		else{
    			$('#id_'+last).css('background', 'red');  
    		}

    		$('#question_splitter_'+last).addClass('hide');

    		$('#question_splitter_'+nex).removeClass('hide');
    	});


    	$(document).on('click','.mark',function(){
    		last=parseInt($(this).attr('id'));  console.log( last );   
    		nex=last+1; console.log( nex ); 

    		if($('#radio1_'+last).prop("checked") || $('#radio2_'+last).prop("checked") || $('#radio3_'+last).prop("checked") || $('#radio4_'+last).prop("checked") || $('#radio5_'+last).prop("checked") || $('#radio6_'+last).prop("checked")){
    			$('#id_'+last).css('background', '#8A2BE2');
    		}
    		else{
    			$('#id_'+last).css('background', '#8A2BE2');  
    		}


    		$('#question_splitter_'+last).addClass('hide');

    		$('#question_splitter_'+nex).removeClass('hide');

    	});

    	$(document).on('click','.clear',function(){
    		last=parseInt($(this).attr('id'));  console.log( last ); 
    		$('#radio1_'+last).attr('checked', false);
    		$('#radio2_'+last).attr('checked', false);
    		$('#radio3_'+last).attr('checked', false);
    		$('#radio4_'+last).attr('checked', false);
    		$('#radio5_'+last).attr('checked', false);
    		$('#radio6_'+last).attr('checked', false);

    	});

    	$(document).on('click','.button1',function(){
    		last=nex; console.log( last );
    		nex=parseInt($(this).attr('value'));

    		if($('#radio1_'+last).prop("checked") || $('#radio2_'+last).prop("checked") || $('#radio3_'+last).prop("checked") || $('#radio4_'+last).prop("checked") || $('#radio5_'+last).prop("checked") || $('#radio6_'+last).prop("checked")){
    			$('#id_'+last).css('background', 'green');
    		}
    		else{
    			$('#id_'+last).css('background', 'red');  
    		}


    		$('#question_splitter_'+last).addClass('hide');
    		$('#question_splitter_'+nex).removeClass('hide');

    	});

    	var c = '<?php echo $time; ?>';
    	var t;
    	timedCount();

    	function timedCount() {

    		var hours = parseInt( c / 3600 ) % 24;
    		var minutes = parseInt( c / 60 ) % 60;
    		var seconds = c % 60;

    		var result = (hours < 10 ? "0" + hours : hours) + ":" + (minutes < 10 ? "0" + minutes : minutes) + ":" + (seconds  < 10 ? "0" + seconds : seconds);


    		$('#timer').html(result);
    		if(c == 0 ){
    			setConfirmUnload(false);
    			$("#quiz_form").submit();
    		}
    		c = c - 1;
    		t = setTimeout(function(){ timedCount() }, 1000);
    	}

    </script>

    <?php // require_once 'templates/footer.php';?>





    <script type="text/javascript">
    // Prevent accidental navigation away
    setConfirmUnload(true);
    function setConfirmUnload(on)
    {
    	window.onbeforeunload = on ? unloadMessage : null;
    }
    function unloadMessage()
    {
    	return 'Your Answered Questions are resetted zero, Please select stay on page to continue your Quiz';
    }
    
    $(document).on('click', 'button:submit',function(){
    	setConfirmUnload(false);
    	window.onbeforeunload =  function(event) {
    		event.returnValue = "Are you sure";
    	}

    });
</script>
<!-- tooltip -->
<script >
	$(document).ready(function()
		{   $('[title]').tooltip({
			container: 'body'
		})
	});
</script>
</body>
</html>
