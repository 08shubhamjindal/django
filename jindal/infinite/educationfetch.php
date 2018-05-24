<?php
if(isset($_POST["limit"], $_POST["start"]))
{
 $connect = mysqli_connect("localhost", "root", "", "xyz");
 $query = "SELECT * FROM education ORDER BY post_id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {    
 	
   echo '<b>College-Name</b><p>'.$row["college_name"].'</p>
         <b>College-Location</b><p>'.$row["college_location"].'</p>
         <b>Courses-Offered</b><p>'.$row["courses_offered"].'</p>
         <b>College-Fees</b><p>' .$row["college_fees"].'</p>
         <b>college_descrption</b><p>'.$row["college_des"].'</p>
         <hr />';

 }
}

?>