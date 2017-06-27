<?php require_once 'templates/header.php';?>
<?php 
    $data = unserialize($_POST['input_name']); 
	$_POST['category']=$_SESSION["cat"];
	$_POST['subcat']=$_SESSION["subcat"];
	
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

</head>

<body>


	

<div class="content">
     	<div class="container">
			<div class="row">
			<form class="form-horizontal" role="form" id='quiz_form' method="post" action="quiz-result.php">
			 
	    <div class ="col-sm-9">
			<div class="panel panel-info" >
			
			   <div class="panel-heading" style="background:#ADD8E6" align ="right">
			         <a class= "btn btn-success" target="popup" onclick="window.open('http://web2.0calc.com/widgets/horizontal/?options=%7B%22angular%22%3A%22deg%22%2C%22options%22%3A%22hide%22%2C%22menu%22%3A%22show%22%7D','name','width=600,height=400')">Scientific Calculator</a>&emsp;
			         <button type="button"  onclick="window.open('useful_data.pdf', 'My Window', 'height=600px,width=1000px, top=50px, left=100px')" class="btn  btn-danger">Useful Data</button>&emsp;							
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
							
							</div>
						
					
				</div>
				</div>
				
							
							
							 <div  style="background:#ADD8E6" align ="right">
							  <?php 
								$i++;
									if ( $k == 1 ) {
										echo "<br/>
										
										<button type='button' class='btn'>Previous</button>
										<button id='".$j."' class='next btn btn-success' type='button'>Next</button>";
						                
										
										//$k++;
										$j++; 
										$i=0;
									} elseif ( $k > 1 && $k < $rowcount  ) { 
										echo "<br/>
										  
										  <button id='".$j."' class='previous btn btn-success' type='button'>Previous</button>
								          <button id='".$j."' class='next btn btn-success' type='button' >Next</button>";
										  
										
										$i = 0;
										$j++;
										//$k++;
									} elseif ( $k == $rowcount  ) { 
										echo "<br/>
										       
											   <button id='".$j."' class='previous btn btn-success' type='button'>Previous</button>
											   <button  class=' btn' type='button'>Next</button>";
											
										
									    $i = 0;
										$j++;
									} 
									$k++;
									?> </div> <br/>
									
			
			<div class="panel-heading" style="background:#ADD8E6" >Solution</div>
			    <div class="panel-body">
                  <br/>
				  <b><h4>Correct Answer: <?php if($result['answer']==1) echo 'A';
                                            if($result['answer']==2) echo 'B';				  
											if($result['answer']==3) echo 'C';
                                            if($result['answer']==4) echo 'D'; ?></h4></b><br/>
                  
				  <b><h4>Solution:</b><br/><br/> <?php echo $result['solution'] ; ?></h4>
                  <br/>
			    </div>
			

									</div>	
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
													
													  <p >
													 
														<button type="button" class="btn btn-sq-sm btn-primary value="Open popup" onclick="window.open('instruction1.php', 'My Window', 'height=600px,width=1000px, top=50px, left=100px')" >Instruction
														</button >
														<button type="button" class="btn btn-sq-sm btn-success">Profile
														</button >
														<button id="btn1" type="submit" class="btn btn-sq-sm btn-warning next btn btn-success" >Home
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
	echo "<pre>"; 
	print_r  ($data);
	echo "<pre>";  ?>

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
		$('#id_1').css('background', 'blue');
		
		
		$(document).on('click','.next',function(){
		    last=parseInt($(this).attr('id'));  console.log( last );   
		    nex=last+1; console.log( nex ); 
			
			$('.button1').css('background', '#ADD8E6');
			
			$('#id_'+nex).css('background', 'blue');
			
		    $('#question_splitter_'+last).addClass('hide');
		    
		    $('#question_splitter_'+nex).removeClass('hide');
			
			
		});
		
		
		$(document).on('click','.previous',function(){
		    last=parseInt($(this).attr('id'));  console.log( last );     
		    nex=last-1; console.log( nex ); 
			
			$('.button1').css('background', '#ADD8E6');
			
			$('#id_'+nex).css('background', 'blue');

		    $('#question_splitter_'+last).addClass('hide');
		    
		    $('#question_splitter_'+nex).removeClass('hide');
		});
		
			
		$(document).on('click','.button1',function(){
			if(nex) {last=nex; }
			else { last=1; } console.log( last ); 
		    nex=parseInt($(this).attr('value'));
			
			$('.button1').css('background', '#ADD8E6');
			
			$('#id_'+nex).css('background', 'blue');
			
		     $('#question_splitter_'+last).addClass('hide');
		    $('#question_splitter_'+nex).removeClass('hide');
				
		});
     
		
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
    
	
      setConfirmUnload(false);

</script>


</body>
</html>
