<?php require_once 'templates/header.php';?>
<?php

 				
	try {
		$user = new Cl_User();
		$categories = $user->getCategory();
		if(empty($categories)){
			$_SESSION['error'] = NO_CATEGORY;
			header('Location: home.php');exit;
		}
	} catch (Exception $e) {
		$_SESSION['error'] = $e->getMessage();
		header('Location: home.php');exit;
	}
	
?>



<script>
function showUser(str)
 {
 if (str=="")
   {
   document.getElementById("txtHint").innerHTML="";  
 return;
   } 
  if (window.XMLHttpRequest)
   {
// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();   
}
 else
   {
// code for IE6, IE5   
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");   
}
 xmlhttp.onreadystatechange=function()
   {
   if (xmlhttp.readyState==4 && xmlhttp.status==200)
     { 
    document.getElementById("subcat").innerHTML=xmlhttp.responseText;
     }
   }
   //alert(str);
xmlhttp.open("GET","getsubcategory_ajax.php?cat_id="+str,true); xmlhttp.send(); }
</script>

	<div class="content">
     	<div class="container">
		
			<?php  require_once 'templates/ads.php';?>
     		<div class="row">
     			<?php require_once 'templates/tutorials.php';?>
	     		<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 start-page">
	    <h3 class="text_underline">Choose Your Category </h3>
					<form class="form-signin well" method="post" id='signin' name="signin" action="questions.php">
						<div class="form-group">
							<?php 
								$user_id=$_SESSION['id'];
		$db = new Cl_DBclass();						
		$row = mysqli_query( $db->con, "select * from users where id='$user_id' ");
			$res = mysqli_fetch_assoc( $row );
			$cat_id=$res['categories_id'];
			
		
		//find category name
	$rows = mysqli_query( $db->con, "select * from categories where id='$cat_id'");
			$ress = mysqli_fetch_assoc( $rows );
			$cat_name=$ress['category_name'];		
			?>
							<select onchange="showUser(this.value)" class="form-control" name="category" id="category">
								<option value="">Choose your category</option>
								
								<option value="<?php echo $cat_id; ?>"><?php echo $cat_name;?></option>		
								
								
								
								 
							</select> 
							<span class="help-block"></span>
						</div>
						
						
						
						<div class="form-group">
							<select  class="form-control" name="subcat" id="subcat">
								<option value="">Choose Subcategory</option>
								
							</select> 
							<span class="help-block"></span>
						</div>
						
						
						
						
	
					<!--	<div class="form-group">
							<select class="form-control" name="num_questions" id="num_questions">
								<option value="">Choose number of questions to be showed on each page</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select> 
							<span class="help-block"></span>
						</div>    -->
	
						<br/>
						<button id="start_btn" class="btn btn-success btn-block" type="submit">Start!!!</button>
					</form>
				</div>
	     		<?php require_once 'templates/sidebar.php';?>
     		</div>
     	</div>
    </div> <!-- /container -->
    
<script src="js/start.js"></script>
<?php require_once 'templates/footer.php';?>
	
