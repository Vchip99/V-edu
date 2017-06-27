<?php
session_start();
error_reporting(1);
include("database.php");
extract($_POST);
extract($_GET);
extract($_SESSION);
/*$rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
if($_SESSION[qn]>mysql_num_rows($rs))
{
unset($_SESSION[qn]);
exit;
}*/
if(isset($subid) && isset($testid))
{
$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
header("location:quiz1.php");
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
	header("location: index.php");
}
include("header.php");
?>


<!DOCTYPE html>
<html lang="en-us">
	<head>
	<title>Online Quiz</title>
		<link href="quiz.css" rel="stylesheet" type="text/css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="style.css">
  
    </head>

<body>



<div class="container">
    <div class="row">
       
	    <div class ="col-sm-9">
			<div class="panel panel-info">
			   <div class="panel-heading" align ="right">
			         <a class= "btn btn-success" target="popup" onclick="window.open('http://web2.0calc.com/widgets/horizontal/?options=%7B%22angular%22%3A%22deg%22%2C%22options%22%3A%22hide%22%2C%22menu%22%3A%22show%22%7D','name','width=600,height=400')">Scientific Calculator</a>&emsp;
			         <button type="button"  onclick="myFunction()" class="btn  btn-danger">Useful Data</button>&emsp;
				     <button type="button" class="btn btn-warning">View full Screen</button>&emsp;</div>
				  <div class="panel-body">
				    <table class="table" >
					
					                 
                                
															  
					 <?php

				$query="select * from mst_question";

				$rs=mysqli_query($cn, "select * from mst_question where test_id=$tid") or die(mysqli_error());
				if(!isset($_SESSION[qn]))
				{
					$_SESSION[qn]=0;
					mysqli_query($cn, "delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysqli_error());
					$_SESSION[trueans]=0;
					
				}
				else
				{	
		        	if($submit=='Next Question' || $submit=='Mark for Review and Next')
						{
								mysqli_data_seek($rs,$_SESSION[qn]);
								$row= mysqli_fetch_row($rs);	
								mysqli_query($cn, "insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
								if($ans==$row[7])
								{
								 $_SESSION[trueans]=$_SESSION[trueans]+1;
								}
								$_SESSION[qn]=$_SESSION[qn]+1;
						}
						else if($submit=='Get Result' )
						{
								mysqli_data_seek($rs,$_SESSION[qn]);
								$row= mysqli_fetch_row($rs);	
								mysqli_query($cn, "insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
								if($ans==$row[7])
								{
									$_SESSION[trueans]=$_SESSION[trueans]+1;
								}
								echo "<h1 class=head1> Result</h1>";
								$_SESSION[qn]=$_SESSION[qn]+1;
								echo "<Table align=center><tr class=tot><td>Total Question<td> $_SESSION[qn]";
								echo "<tr class=tans><td>True Answer<td>".$_SESSION[trueans];
								$w=$_SESSION[qn]-$_SESSION[trueans];
								echo "<tr class=fans><td>Wrong Answer<td> ". $w;
								echo "</table>";
								mysqli_query($cn, "insert into mst_result(login,test_id,test_date,score) values('$login',$tid,'".date("d/m/Y")."',$_SESSION[trueans])") or die(mysqli_error());
								echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
								unset($_SESSION[qn]);
								unset($_SESSION[sid]);
								unset($_SESSION[tid]);
								unset($_SESSION[trueans]);
								exit;
					        	}
				}
				$rs=mysqli_query($cn, "select * from mst_question where test_id=$tid") or die(mysqli_error());
				if($_SESSION[qn]>mysqli_num_rows($rs)-1)
				{
				unset($_SESSION[qn]);
				echo "<h1 class=head1>Some Error  Occured</h1>";
				session_destroy();
				echo "Please <a href=index.php> Start Again</a>";

				exit;
				}
											
				
				
				mysqli_data_seek($rs,$_SESSION[qn]);
				$row= mysqli_fetch_row($rs);
				echo "<form name=myfm method=post action=quiz1.php>";
				
				echo "<table width=100%><tr><td width=30>&nbsp;<td> 
				<div class=bg-warning><table border=0>";
				
				$n=$_SESSION[qn] + 1;
				
				echo "<tr><td><span class=style2>Que ".  $n .": $row[2]</style>";
				include("numeric.php");
				echo "</table></div></table>";
            
				if($_SESSION[qn]<mysqli_num_rows($rs)-1)
					 
					echo '<br><tr>
			             <td   width="1000" >
						 <div class= "panel-heading">
						 
						 <input type="submit" onclick="uncheck()"  class="btn btn-success" value ="Clear Response"></input>&emsp;
						 
						 <input  type="submit" onclick="fullName(form)  "name="submit" class="btn btn-primary" value ="Mark for Review and Next"></input>&emsp;&emsp;
						  &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp;
						 
					    <input align="right" type="submit" onclick="setToBlack(form)"name="submit" class="btn btn-primary" value ="Next Question">
						 </input>
						  </div>
						 </td>
						
						 </form>';
			   else
				echo '<br><tr>
			            <td class="danger" width="1000" align="right">
					
				 &emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
			                   <input align="right" type=submit  name=submit class="btn btn-primary"  value="Get Result">
							   
							   </form>';
				
				
						  
						  
						  ?>
						
					</table>
				  
				  
				
			</div>
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
											  <div class="bg-warning" >
											      <p id = "id1"></p>
												  <button type="button" id ="col" class="btn btn-sq-xs btn-info">1</button>
												  <button type="button" id ="col1" class="btn btn-sq-xs btn-info">2</button>
												  <button type="button" id ="col2" class="btn btn-sq-xs btn-info">3</button>
												  <button type="button" id ="col2" class="btn btn-sq-xs btn-info">4</button>
												  <button type="button" class="btn btn-sq-xs btn-info">5</button>
												  <button type="button" class="btn btn-sq-xs btn-info">6</button>
												  <button type="button" class="btn btn-sq-xs btn-info">7</button>
												  <button type="button" class="btn btn-sq-xs btn-info">8</button>
												  <button type="button" class="btn btn-sq-xs btn-info">9</button>
												  <button type="button" class="btn btn-sq-xs btn-info">10</button>
												  <button type="button" class="btn btn-sq-xs btn-info">11</button>
												  <button type="button" class="btn btn-sq-xs btn-info">12</button>
												  <button type="button" class="btn btn-sq-xs btn-info">13</button>
												  <button type="button" class="btn btn-sq-xs btn-info">14</button>
												  <button type="button" class="btn btn-sq-xs btn-info">15</button>
												  <button type="button" class="btn btn-sq-xs btn-info">16</button>
												  <button type="button" class="btn btn-sq-xs btn-info">17</button>
												  <button type="button" class="btn btn-sq-xs btn-info">18</button>
												  <button type="button" class="btn btn-sq-xs btn-info">19</button>
												  <button type="button" class="btn btn-sq-xs btn-info">20</button>
												  <button type="button"class="btn btn-sq-xs btn-info">21</button>
												  <button type="button" class="btn btn-sq-xs btn-info">22</button>
												  <button type="button" class="btn btn-sq-xs btn-info">23</button>
												  <button type="button" class="btn btn-sq-xs btn-info">24</button>
												  <button type="button" class="btn btn-sq-xs btn-info">25</button>
												  <button type="button" class="btn btn-sq-xs btn-info">26</button>
												  <button type="button" class="btn btn-sq-xs btn-info">27</button>
												  <button type="button"class="btn btn-sq-xs btn-info">28</button>
												  <button type="button" class="btn btn-sq-xs btn-info">29</button>
												  <button type="button" class="btn btn-sq-xs btn-info">30</button>
												  <button type="button" class="btn btn-sq-xs btn-info">31</button>
												  <button type="button" class="btn btn-sq-xs btn-info">32</button>
												  <button type="button" class="btn btn-sq-xs btn-info">33</button>
												  <button type="button" class="btn btn-sq-xs btn-info">34</button>
												  <button type="button"class="btn btn-sq-xs btn-info">35</button>
												  <button type="button" class="btn btn-sq-xs btn-info">36</button>
												  <button type="button" class="btn btn-sq-xs btn-info">37</button>
												  <button type="button" class="btn btn-sq-xs btn-info">38</button>
												  <button type="button" class="btn btn-sq-xs btn-info">39</button>
												  </div>
												</td>
												 </div>
											  </div>
											  </tr>
											 
											   
											  <tr >
											 
											    <div class="row">
													<div class="col-lg-12">
													<td>
													
													  <p>
														<button type="button" class="btn btn-sq-sm btn-primary">Instruction
														</button >
														<button type="button" class="btn btn-sq-sm btn-success">Profile
														</button >
														<button type="button"class="btn btn-sq-sm btn-warning">Submit
														</button >
														<button type="button" class="btn btn-sq-sm btn-danger">Que paper
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
	
	 </div>
  </div>
  </div>
	

	<script type="text/javascript">

/*	var i = 0;
function setToBlack ( ){
				
             var a = ['col', 'col1', 'col2','col3'];
				switch (a[i])
			{
				case'col':
                document.getElementById("col").style.backgroundColor = "red"
				break;
					
				case'col1':
                document.getElementById("col1").style.backgroundColor = "red"
				break;
				case'col2':
                document.getElementById("col2").style.backgroundColor = "red"
                break;
				case'col3':
                document.getElementById("col3").style.backgroundColor = "red"
			    break;
	 	}
		i++;
   }
  */ 
  
   function setToBlack(form) {
			for (var i = 0; i < 4; i++) {
				if (form.ans[i].checked) 
					{
					  document.getElementById("col").style.backgroundColor = "blue" ;
					  exit;
				}  else
				{ 
					 document.getElementById("col").style.backgroundColor = "red"
				} 
		   
			  }
		   }
   
   function fullName(form) {
		for (var j = 0; j < 4; j++) {
			if (form.ans[j].checked) 
				{
				  document.getElementById("id1").innerHTML = "&#10003";
				  document.getElementById("col").style.backgroundColor = "green" ;
				  exit;
			}  else
			{ 
				 document.getElementById("col").style.backgroundColor = "green"
			} 
	   
		  }
	}

   
   function uncheck()
 {
   document.getElementById('rd1').checked = false;        
   document.getElementById('rd2').checked = false;      
   document.getElementById('rd3').checked = false;      
   document.getElementById('rd4').checked = false;         
 }
   
</script>
					 

    
	

</body>
</html>