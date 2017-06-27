<?php
require("admin/database.php");
$q=$_GET["cat_id"];
$sql="SELECT * FROM subcategory WHERE cat_id ='$q'";
 
$result = mysqli_query($cn, $sql);
 
echo "<option value=''>Select Subcatagory</option>";
while($row = mysqli_fetch_array($result))
{
echo "<option value='".$row[0]."'>" . $row[1] . "</option>";
}


?>